<?php

namespace App\Http\Controllers\Editor\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return view('layouts.tag.index');
    }
    public function create()
    {
        return view('layouts.tag.create');
    }
    public function edit()
    {
        return view('layouts.tag.edit');
    }
}
