<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsumbleController extends Controller
{
  public function index()
  {
    return view('consumable.index');
  }
}
