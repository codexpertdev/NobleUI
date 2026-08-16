<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;
use App\Article;

class ArticleController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('article.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'title_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

            'heading_1' => 'required|string|max:255',
            'description_1' => 'required|string',
            'image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

            'heading_2' => 'nullable|string|max:255',
            'description_2' => 'nullable|string',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

            'heading_3' => 'nullable|string|max:255',
            'description_3' => 'nullable|string',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

            'hashtags' => 'nullable|string',

        ];

        $validatedData = $request->validate($rules);

        $imagePaths = [];
        foreach (['title_image', 'image1', 'image2', 'image3'] as $imageField) {
            if ($request->hasFile($imageField)) {
                $imagePaths[$imageField] = $request->file($imageField)->store('articles', 'public');
            } else {
                $imagePaths[$imageField] = null;
            }
        }

        // Store data in database
        $article = Article::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'title_image' => $imagePaths['title_image'] ?? null,

            'heading_1' => $validatedData['heading_1'] ?? null,
            'description_1' => $validator['description_1'] ?? null,
            'image_h1' => $imagePaths['image_h1'] ?? null,

            'heading_2' => $validatedData['heading_2'] ?? null,
            'description_2' => $validator['description_2'] ?? null,
            'image_h2' => $imagePaths['image_h2'] ?? null,

            'heading_3' => $validatedData['heading_3'] ?? null,
            'description_3' => $validator['description_3'] ?? null,
            'image_h3' => $imagePaths['image_h3'] ?? null,

            'hashtags' => $validatedData['hashtags'] ?? null,
        ]);

        return redirect()->back()->with('success', 'Article added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
