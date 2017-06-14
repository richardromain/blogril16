<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function home($name = null)
    {
        return view('hello', compact('name'));
    }
}
