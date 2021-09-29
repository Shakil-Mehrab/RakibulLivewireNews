<?php

namespace App\Http\Controllers\Editor\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('layouts.category.index');
    }
    public function create()
    {
        return view('layouts.category.create');
    }
    public function edit()
    {
        return view('layouts.category.edit');
    }
}
