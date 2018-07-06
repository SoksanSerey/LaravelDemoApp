<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newPageController extends Controller
{
    public function new()
    {
        return view('newPage');
        // echo 'Welcome to laravel';/ 
    }
}
