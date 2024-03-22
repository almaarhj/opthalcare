<?php

namespace App\Http\Controllers;

use App\Models\LabRequest;
use Illuminate\Http\Request;

class LabRequestController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('laboratory.index');
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
    $labrequest = LabRequest::create(array_merge($request->except('status'), ['status' => 'Pending']));
    // dd($request->all());
    return redirect()->back()->with('success', 'Lab Test Requested!');
  }

  /**
   * Display the specified resource.
   */
  public function show(LabRequest $labRequest)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(LabRequest $labRequest)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, LabRequest $labRequest)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(LabRequest $labRequest)
  {
    //
  }
}
