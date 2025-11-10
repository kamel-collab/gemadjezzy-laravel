<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//php artisan make:controller ArticleControlleroller

class ArticleController extends Controller
{
    public function show($n)
    {
        return view('article')->with('numero', $n);
    }
    
}
