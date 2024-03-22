<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisionAcuity extends Model
{
  use HasFactory;

  protected $fillable = [
    'patient_id',
    'left_os',
    'right_od',
  ];
}
