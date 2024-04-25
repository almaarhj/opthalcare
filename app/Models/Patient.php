<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id',
    'hospital_no',
    'middlename',
    'phone',
    'date_of_birth',
    'gender',
    'religion_id',
    'occupation',
    'marital_status',
    'state_of_residence',
    'lga_of_residence',
    'state_of_origin',
    'lga_of_origin',
    'residential_address',
    'hmo_id',
    'dependent',
    'principal_id',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function nextOfKin()
  {
    return $this->hasOne(NextOfKin::class);
  }

  public function getAge()
  {
    return Carbon::parse($this->date_of_birth)->age . " yrs";
  }

  public function religion()
  {
    return $this->belongsTo(Religion::class);
  }

  public function hmo()
  {
    return $this->hasOne(HmoGroup::class, 'id');
  }

  public function state()
  {
    return $this->belongsTo(State::class);
  }
}
