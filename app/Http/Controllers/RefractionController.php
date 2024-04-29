<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefractionController extends Controller
{


  public function index()
  {
  }

  public function create($patient)
  {
    return view('refraction.create', compact('patient'));
  }
}
