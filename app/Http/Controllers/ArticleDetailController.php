<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;

class ArticleDetailController extends Controller
{
    public function index(artikel $artikel)
    {
        return view('article.show', [
            'article' => $artikel
        ]);
    }
}
