<?php

use App\Http\Controllers\RuanganController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('pages.user.index');
});

Route::get('/admin/home', function () {
  return view('pages.admin.home');
});

Route::get('/admin/booking', function () {
  return view('pages.admin.book');
});

Route::get('/admin/room', function () {
  return view('pages.admin.room');
});

Route::get('/admin/report', function () {
  return view('pages.admin.report');
});

Route::resource('/admin/room', RuanganController::class);
