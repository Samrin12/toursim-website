<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours= Tour::with('media')->get();
        $bookedTours = Auth::check() ? auth()->user()->tours()->get() : null;
        return view('tour.index', compact('tours', 'bookedTours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Tour $tour = null)
    {
        if ($tour == null) {
            return view('tour.create',compact('tour'));
        }
        return view('tour.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $tour= Tour::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'duration'=>$request->duration,
            'promo'=>$request->promo,
            'description'=>$request->description,
        ]);
        $tour->addMediaFromRequest('image')->toMediaCollection();
        return redirect('tour/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        $tour->delete();
        return redirect('tour/list');
    }

    public function list()
    {
        $tours = Tour::all();
        return view('tour.list', compact('tours'));
    }
}
