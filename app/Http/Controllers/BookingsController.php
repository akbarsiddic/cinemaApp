<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Movies;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all bookings
        $bookings = Bookings::all();

        // get movies
        $movies = Movies::all();

        // return the view
        return view('bookings.create', [
            'bookings' => $bookings,
            'movies' => $movies,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
{

    $bookings = Bookings::all();

    // Get the movies with specific IDs
    $movies = Movies::findOrFail($id);

    // Return the view
    return view('bookings.create', [
        'bookings' => $bookings,
        'movies' => $movies,
    ]);
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate the form data
        $validatedData = $request->validate([
            'movie_id' => 'required|integer',
            'seats' => 'required|integer',
            // name from auth name
            'name' => 'required|string',
            'age' => 'required|integer',
            'price' => 'required|integer',
            'total_price' => 'required|integer',

        ]);



        // create a new booking
        $booking = Bookings::create([
            'movie_id' => $validatedData['movie_id'],
            'seats' => $validatedData['seats'],
            'name' => Auth::user()->name,
            'age' => Auth::user()->age,
            'price' => $validatedData['price'],
            'total_price' => $validatedData['total_price'],
        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       

        // get the movie
        $movie = Movies::findOrFail($id);

        // return the view
        return view('bookings.show', [
            'movie' => $movie,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bookings $bookings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bookings $bookings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bookings $bookings)
    {
        //
    }
}
