<?php

namespace App\Http\Controllers\Editor\Area;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        return view('layouts.area.index');
    }
    public function create()
    {
        return view('layouts.area.create');
    }
    public function edit()
    {
        return view('layouts.area.edit');
    }
}
