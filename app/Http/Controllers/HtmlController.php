<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlController extends Controller
{
    public function show() 
    {
        $words = array();
        $words = ["div","h1","ul","li","a","img","class","id",9];
        
        return view('html/index')->with('words',$words);
    }
}
