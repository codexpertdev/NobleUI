@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
  </div>
</div>

<div class="col-lg-12">
    <div class="row">
        <!-- Sales Card -->
        <div class="col-md-12 mb-5 text-center">
        </div>
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card clr-1">
                <div class="card-body">
                    <h5 class="card-title p-0">Total Posts </h5>
                    <div class="d-flex align-items-center justify-content-between">

                        <div class="">
                            <h6>10</h6>
                        </div>
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-square"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card clr-2">

                <div class="card-body">
                    <h5 class="card-title p-0">
                        Active Posts
                    </h5>
                    <div class="d-flex align-items-center justify-content-between">

                        <div class="">
                            <h6>5</h6>

                        </div>
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-square"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card clr-3">

                <div class="card-body">
                    <h5 class="card-title p-0">
                        Inactive Posts
                    </h5>
                    <div class="d-flex align-items-center justify-content-between">

                        <div class="">
                            <h6>5</h6>
                        </div>
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-square"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/flatpickr/flatpickr.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
@endpush
