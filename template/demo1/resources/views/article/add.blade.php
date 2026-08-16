@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Article</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <h4 class="mb-4">Create Article</h4>

        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ url('add-post') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="2" oninput="autoResize(this)" required></textarea>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Article Image</label>
            <input type="file" class="form-control" id="title_image" name="title_image" accept="image/*" onchange="previewImage(event, 'mainImagePreview')">
            <img id="mainImagePreview" src="" class="mt-2" style="max-width: 100px; display: none;">
          </div>

        @for ($i = 1; $i <= 3; $i++)
          <div class="mb-3">
            <label for="heading_{{ $i }}" class="form-label">Heading {{ $i }}</label>
            <input type="text" class="form-control" id="heading_{{ $i }}" name="heading_{{ $i }}">
          </div>

          <div class="mb-3">
            <label for="description_{{ $i }}" class="form-label">Description</label>
            <textarea class="form-control" id="description_{{ $i }}" name="description_{{ $i }}" rows="2" oninput="autoResize(this)"></textarea>
          </div>

          <div class="mb-3">
            <label for="image_{{ $i }}" class="form-label">Image</label>
            <input type="file" class="form-control" id="image_{{ $i }}" name="image_{{ $i }}" accept="image/*" onchange="previewImage(event, 'preview{{ $i }}')">
            <img id="preview{{ $i }}" src="" class="mt-2" style="max-width: 100px; display: none;">
          </div>
        @endfor
          <div class="mb-3">
             <label for="hashtags" class="form-label">Hashtags</label>
             <input type="text" class="form-control" id="hashtags" placeholder="Type a hashtag and press Tab">
             <div id="hashtags-container" class="mt-2"></div>
             <input type="hidden" name="hashtags" id="hashtags-hidden">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  function autoResize(textarea) {
    textarea.style.height = "auto";
    textarea.style.height = (textarea.scrollHeight) + "px";
  }

  function previewImage(event, previewId) {
    const input = event.target;
    const preview = document.getElementById(previewId);

    if (input.files && input.files[0]) {
      const reader = new FileReader();
      reader.onload = function (e) {
        preview.src = e.target.result;
        preview.style.display = "block";
      };
      reader.readAsDataURL(input.files[0]);
    } else {
      preview.src = "";
      preview.style.display = "none";
    }
  }


// Hashtags Code :

document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById("hashtags");
    const container = document.getElementById("hashtags-container");
    const hiddenInput = document.getElementById("hashtags-hidden");

    let hashtags = [];

    input.addEventListener("keydown", function (event) {
      if (event.key === "Tab") {
        event.preventDefault();
        let text = input.value.trim().replace(/\s+/g, "");

        if (text && !hashtags.includes(text)) {
          hashtags.push(text);
          updateHashtagDisplay();
        }
        input.value = "";
      }
    });

    function updateHashtagDisplay() {
      container.innerHTML = "";
      hashtags.forEach((tag, i) => {
        let span = document.createElement("span");
        span.classList.add("badge", "bg-primary", "me-1", "p-2");
        span.innerHTML = `#${tag} <span class="ms-1 text-white" style="cursor:pointer;" onclick="removeHashtag(${i})">&times;</span>`;
        container.appendChild(span);
      });

      hiddenInput.value = hashtags.join(",");
    }

    window.removeHashtag = function (tagIndex) {
      hashtags.splice(tagIndex, 1);
      updateHashtagDisplay();
    };
  });
</script>
@endsection
