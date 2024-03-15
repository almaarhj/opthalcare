<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NextOfKin extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id',
    'next_of_kin_name',
    'next_of_kin_relation',
    'next_of_kin_phone',
    'next_of_kin_address',
  ];
}
