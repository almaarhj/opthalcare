<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('procedure.index');
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(Procedure $procedure)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Procedure $procedure)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Procedure $procedure)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Procedure $procedure)
  {
    //
  }
}
