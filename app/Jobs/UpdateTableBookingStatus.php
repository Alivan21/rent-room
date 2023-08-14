<?php

namespace App\Jobs;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UpdateTableBookingStatus implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  /**
   * Create a new job instance.
   *
   * @return void
   */
  public function __construct()
  {
  }

  /**
   * Execute the job.
   *
   * @return void
   */
  public function handle()
  {
    $currentDate = Carbon::now()->format('Y-m-d');

    Log::info('UpdateTableBookingStatus job started.');

    Booking::where('status', 'dipesan')
      ->where('tanggal', '<', $currentDate)
      ->update(['status' => 'selesai']);

    Log::info('UpdateTableBookingStatus job completed.');
  }
}
