<?php

namespace App\Http\Controllers;

use App\Models\CashPoint;
use Illuminate\Http\Request;

class CashPointController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
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
    $cashpoint = CashPoint::create($request->all());
    return redirect()->back()->with('success', 'Cash Point Added!');
  }

  /**
   * Display the specified resource.
   */
  public function show(CashPoint $cashPoint)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(CashPoint $cashPoint)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, CashPoint $cashPoint)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(CashPoint $cashPoint)
  {
    //
  }
}
