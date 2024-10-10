<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Library extends Controller
{
    public function library()
    {
        return view('library');
    }
}
