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

  public function show($id)
  {
    $request = DrugRequest::find($id);
    // dd($request);
    return view('pharmacy.details', compact('request'));
  }


  public function edit($id)
  {

    $request = DrugRequest::find($id);
    $serviceHandler = new ServiceRequestHandler();
    $service = "Pharmacy:" . $request->drug->name;
    $paid = $serviceHandler->isBilled($request->id, $service);

    if ($paid) {
      return "Paid";
      //$lab->update(['status' => 'Specimen Collected']);
      // return view('pharmacy.fill', compact('request'));
    } else {
      // dd("Service Has Not Been Paid");
      return redirect()->back()->with('error', 'Service Has Not Been Paid For Yet');
    }
    // dd($request);
  }

  public function print($id)
  {
    $request = DrugRequest::find($id);
    return view('pharmacy.print', compact('request'));
  }
}
