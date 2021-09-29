<?php

namespace App\Http\Controllers\Editor\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('layouts.article.index');
    }
    public function create()
    {
        return view('layouts.article.create');
    }
    public function edit()
    {
        return view('layouts.article.edit');
    }
}
