<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RuanganController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('user.home');
Route::get('/booking', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');

Auth::routes();
Route::get('/admin/home', [BookingController::class, 'home'])->name('admin.home');
Route::get('/admin/booking', [BookingController::class, 'index'])->name('admin.booking.index');
Route::resource('/admin/room', RuanganController::class);
Route::get('/admin/report', function () {
  return view('pages.admin.report');
});
