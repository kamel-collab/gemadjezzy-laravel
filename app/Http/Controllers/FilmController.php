<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug = null)
    {
        $films = $slug ? Category::where('slug', $slug)->first()->films : Film::all();

        $categories = Category::all();
        return view('films.index', compact('films', 'categories','slug'));
    }
    //facebook.com
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('films.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'year' => 'required|integer|min:1920|max:' . date('Y'),
            'category_id' => 'required|exists:categories,id',
        ]);


        Film::create($request->all());

        return redirect()->route('films.index')->with('success', 'Film created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {


        return view('films.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        $categories = Category::all();
        return view('films.edit', compact('film', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'year' => 'required|integer|min:1920|max:' . date('Y'),
            'category_id' => 'required|exists:categories,id',
        ]);

        $film->update($request->all());

        return redirect()->route('films.index')->with('updated', 'Film updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {

        $film->delete();
        return redirect()->route('films.index')->with('deleted', 'Film deleted successfully.');
    }
}
