<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Models\Booking;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class BookingController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // $ruangan = Ruangan::all();
    // $booking = Booking::all();
    // return view('pages.admin.book', compact('ruangan', 'booking'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $ruangan = Ruangan::all();
    return view('pages.user.booking', compact('ruangan'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreBookingRequest $request)
  {
    $data = $request->validated();
    Booking::create($data);
    return redirect()->route('home');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Booking  $booking
   * @return \Illuminate\Http\Response
   */
  public function show(Booking $booking)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Booking  $booking
   * @return \Illuminate\Http\Response
   */
  public function edit(Booking $booking)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Booking  $booking
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Booking $booking)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Booking  $booking
   * @return \Illuminate\Http\Response
   */
  public function destroy(Booking $booking)
  {
    //
  }
}
