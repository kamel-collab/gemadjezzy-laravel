<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
       $request->validate([
            'name'     => ['required', 'string', 'min:3'],
            'price'    => ['required', 'numeric', 'min:0'],
            'stock'    => ['required', 'integer', 'min:0'],
            'category' => ['required', 'in:informatique,accessoires,logiciels,autre'],
        ], [
         // (Optionnel) Messages FR plus parlants
            'name.required'     => 'صتتنمصثنمصثنم',
            'name.min'          => 'Le nom doit contenir au moins :min caractères.',
            'price.required'    => 'Le prix est obligatoire.',
            'price.numeric'     => 'Le prix doit être un nombre.',
            'price.min'         => 'Le prix ne peut pas être négatif.',
            'stock.required'    => 'Le stock est obligatoire.',
            'stock.integer'     => 'Le stock doit être un entier.',
            'stock.min'         => 'Le stock ne peut pas être négatif.',
            'category.required' => 'La catégorie est obligatoire.',
            'category.in'       => 'Catégorie invalide.',
        ]);
       return redirect()
            ->route('products.create')
            ->with('success', "Produit  ajouté avec succès !");
    }
    
}
