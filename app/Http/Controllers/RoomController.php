<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Hotel $hotel)
    {
        $rooms= $hotel->rooms()->get();
        $bookedRooms = Auth::check() ? auth()->user()->rooms()->get() : null;
        return view('room.index',compact('rooms', 'bookedRooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Hotel $hotel)
    {
        return view('room.create',compact('hotel'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Hotel $hotel)
    {
        $room = $hotel->rooms()->create([
            'name'=>$request->name,
            'price'=>$request->price,
            'days'=>$request->days,
            'nights'=>$request->nights,
            'ratings'=>$request->ratings,
        ]);
        $room->addMediaFromRequest('image')->toMediaCollection();
        return redirect('hotel/'.$hotel->id.'/room/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel, Room $room)
    {
        $room->delete();
        return redirect('hotel/'.$hotel->id.'/room/list');

    }

    public function list(Hotel $hotel)
    {
        $rooms= $hotel->rooms()->get();
        return view('room.list',compact('rooms','hotel'));
    }

    public function attachForm(Room $room)
    {
        return view('room.attach', compact('room'));
    }

    public function attach(Request $request, Room $room)
    {
        auth()->user()->rooms()->attach($room,[
            'number_of_guests'=> $request->number_of_guests,
            'check_in'=>$request->check_in
        ]);
        return redirect()->back();
    }
}
