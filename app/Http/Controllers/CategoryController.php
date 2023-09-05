<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = category::all();
        $data_paginate = category::paginate(5);
        $category = $data->find(1);
        return view('category.index', compact('data', 'category', 'data_paginate'));
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
     * @param  \App\Http\Requests\StorecategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $validatedData = $req->validate([
            'gambar' => 'image|file',
        ]);
        if ($req->file('gambar')) {
            $validatedData['gambar'] = $req->file('gambar')->store('gambar-category');
        }
        $slug = SlugService::createSlug(category::class, 'slug', $req->name);
        $category = new category();
        $category->nama = $req->name;
        $category->slug = $slug;
        $category->gambar = $validatedData['gambar'];
        $category->save();
        return redirect('/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req, $id)
    {
        $category = category::find($id);
        $data = category::all();
        $data_paginate = category::paginate(5);
        $category->all();
        $trigger = true;
        return view('category.update', compact('category', 'data', 'data_paginate', 'trigger'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecategoryRequest  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $validatedData = $req->validate([
            'gambar' => 'image|file',
        ]);
        $category = category::find($id);
        if ($req->file('gambar')) {
            if ($category->gambar != null) {
                Storage::delete($category->gambar);
            }
            $validatedData['gambar'] = $req->file('gambar')->store('gambar-category');
            $category->gambar = $validatedData['gambar'];
        }
        $category->nama = $req->name;
        $category->save();
        return redirect('/category')->with("success", "data succesfully updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = category::find($id);
        if ($category->gambar != null) {
            Storage::delete($category->gambar);
        }
        category::where("id", $id)->delete();
        return redirect('category');
    }
}
