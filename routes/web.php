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

Auth::routes();
Route::group(['middleware' => ['guest']], function () {
  Route::get('/', [HomeController::class, 'index'])->name('user.home');
  Route::get('/booking', [BookingController::class, 'create'])->name('booking.create');
  Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
});

Route::group(['middleware' => ['auth']], function () {
  Route::get('/admin/home', [BookingController::class, 'home'])->name('admin.home');
  Route::get('/admin/booking', [BookingController::class, 'index'])->name('admin.booking.index');
  Route::resource('/admin/room', RuanganController::class);
  Route::get('/admin/room/edit/{id}', [RuanganController::class, 'edit'])->name('room.edit');
  Route::put('/admin/room/update/{id}', [RuanganController::class, 'update'])->name('room.update');
  Route::get('/admin/report', function () {
    return view('pages.admin.report');
  });
});
