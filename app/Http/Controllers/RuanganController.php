<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRuanganRequest;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $rooms = Ruangan::all();
    return view('pages.admin.room', compact('rooms'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('pages.admin.room.input');
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
    if (!isset($data['fasilitas'])) {
      $data['fasilitas'] = null;
    }
    $data['fasilitas'] = implode(',', $data['fasilitas']);
    Ruangan::create($data);
    return redirect()->route('room.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\ruangan  $ruangan
   * @return \Illuminate\Http\Response
   */
  public function show(ruangan $ruangan)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\ruangan  $ruangan
   * @return \Illuminate\Http\Response
   */
  public function edit(ruangan $ruangan)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\ruangan  $ruangan
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, ruangan $ruangan)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\ruangan  $ruangan
   * @return \Illuminate\Http\Response
   */
  public function destroy(ruangan $ruangan)
  {
    //
  }
}
