<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;

class IndexController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $articles = Article::orderBy('published_at','desc')
            ->simplePaginate(7);

        return view('index',['articles' => $articles]);
    }
}
