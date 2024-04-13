<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\DrugRequest;
use Illuminate\Http\Request;
use App\Services\ServiceRequestHandler;

class PharmacyController extends Controller
{
  public function index()
  {
    return view('pharmacy.index');
  }


  public function store(Request $request)
  {
    $drugs = DrugRequest::create(array_merge($request->except('status'), ['status' => 'Pending', 'user_id' => auth()->user()->id]));
    $drug = Drug::find($request->drug_id);
    $serviceHandler = new ServiceRequestHandler();
    $billingRecord = $serviceHandler->handleServiceRequest($drug->name, $request->patient_id, 'Pharmacy');
    return redirect()->back()->with('success', 'Drugs Requested!');
  }
}
