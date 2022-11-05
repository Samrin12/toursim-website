<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\User;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function create(Tour $id)
    {
        $tours = Tour::all();
        return view('reserve.create', compact('tours', 'id'));
    }

    public function store(Request $request)
    {
        auth()->user()->tours()->attach($request->tour_id,[
            'number_of_guests'=> $request->number_of_guests,
            'check_in'=>$request->check_in
        ]);
        return redirect('tour');
    }
}
