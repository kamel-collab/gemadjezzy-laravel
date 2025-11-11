<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user');
    }
    public function store(Request $request)
    {    
        $request->validate([
            'nom' => 'required|min:3|alpha',
            'email' => 'required|email'
        ]);

        return "Nom de l'utilisateur: " . $request->input('nom')
            . ", Email: " . $request->input('email');
    }
}
