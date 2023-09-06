<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use App\Models\category;
use Illuminate\Http\Request;

class PostArticleController extends Controller
{
    public function index()
    {
        $title = "";
        if (request('category')) {
            $category = category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->nama;
        }

        return view('article.index', [
            "title" => "All Article" . $title,
            "article" => artikel::latest()->filter(request(['category']))
                ->paginate(3)->withQueryString()
        ]);
    }
}
