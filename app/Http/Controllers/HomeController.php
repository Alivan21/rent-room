<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $rooms = Ruangan::with('facilities')->get();
    return view('pages.user.index', compact('rooms'));
  }
}
