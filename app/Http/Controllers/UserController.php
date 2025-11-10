<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user');
    }
    public function store(Request $request) {
         return "Nom de l'utilisateur: " . $request->input('nom');
    }
}
