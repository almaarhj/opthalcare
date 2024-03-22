<?php

namespace App\Http\Controllers;

use App\Http\Resources\RadiologyRequestResourceCollection;
use App\Models\RadiologyRequest;
use Illuminate\Http\Request;

class RadiologyRequestController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {

    return view('radiology.index');
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
    $imagingrequest = RadiologyRequest::create(array_merge($request->except('status'), ['status' => 'Pending']));
    // dd($request->all());
    return redirect()->back()->with('success', 'Imaging Requested!');
  }

  /**
   * Display the specified resource.
   */
  public function show(RadiologyRequest $radiologyRequest)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(RadiologyRequest $radiologyRequest)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, RadiologyRequest $radiologyRequest)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(RadiologyRequest $radiologyRequest)
  {
    dd("Dssd");
   $radiologyRequest->delete();
    return redirect()->back()->with('success', 'Request Deleted!');
  }
}
