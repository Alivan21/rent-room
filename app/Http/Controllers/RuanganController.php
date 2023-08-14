<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRuanganRequest;
use App\Models\Facility;
use App\Models\FacilityRoom;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function auth()
  {
    $user = auth()->user();
    return view('home', ['user' => $user]);
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $rooms = Ruangan::with('facilities')->get();
    return view('pages.admin.room', compact('rooms'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $facilities = Facility::all();
    return view('pages.admin.room.input', compact('facilities'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreRuanganRequest $request)
  {
    $data = $request->validated();
    $ruangan = Ruangan::create($data);

    if (isset($data['fasilitas']) && is_array($data['fasilitas'])) {
      foreach ($data['fasilitas'] as $facility) {
        FacilityRoom::create([
          'facility_id' => $facility,
          'room_id' => $ruangan->id,
        ]);
      }
    }

    return redirect()->route('room.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Ruangan  $ruangan
   * @return \Illuminate\Http\Response
   */
  public function show(Ruangan $ruangan)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Ruangan  $ruangan
   * @return \Illuminate\Http\Response
   */
  public function edit(Ruangan $ruangan)
  {
    $facilities = Facility::all();
    return view('pages.admin.room.edit', compact('ruangan', 'facilities'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Ruangan  $ruangan
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Ruangan $ruangan)
  {
    $ruangan->update($request->all());

    // Update related fasilitas
    $selectedFacilities = $request->input('fasilitas', []); // Get the selected facilities from checkboxes

    // Sync the selected facilities with the Ruangan
    $ruangan->facilities()->sync($selectedFacilities);

    return redirect()->route('room.index');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Ruangan  $ruangan
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $ruangan = Ruangan::findOrFail($id);
    $ruangan->delete();
    return redirect()->route('room.index');
  }
}
