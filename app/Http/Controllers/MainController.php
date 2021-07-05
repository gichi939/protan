<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function show()
    {
        return view('top/index');
    }

    // public function test()
    // {
    //     return view('page');
    // }
}
