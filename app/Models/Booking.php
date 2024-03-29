<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
  use HasFactory;
  protected $with = ['ruangan'];
  protected $guarded = ['id'];

  public function ruangan()
  {
    return $this->belongsTo(Ruangan::class);
  }
}
