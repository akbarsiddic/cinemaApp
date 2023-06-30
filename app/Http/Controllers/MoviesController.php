<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movies::all();

        
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // validate the data
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'age_rating' => 'required',
            'poster_url' => 'required',
            'price' => 'required',
        ]);
        
        // store in the database
        Movies::create($request->all());
        
       
        // redirect to home page
        return redirect()->route('movies.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // display single movie
        $movies = Movies::findOrFail($id);

        return view('movies.show', compact('movies'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Movies $movies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movies $movies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movies $movies)
    {
        //
    }
}
