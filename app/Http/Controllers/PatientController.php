<?php

namespace App\Http\Controllers;

use App\Charts\BloodPressureChart;
use App\Models\HmoGroup;
use App\Models\NextOfKin;
use Jajo\NG;
use App\Models\User;
use App\Models\Patient;
use App\Models\Religion;
use Illuminate\Http\Request;
use sirajcse\UniqueIdGenerator\UniqueIdGenerator;

class PatientController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('patients.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $ng = new NG();
    $states = $ng->states;
    $religions = Religion::all();
    $hmos = HmoGroup::all();
    $hospital_no = UniqueIdGenerator::generate(['table' => 'patients', 'length' => 4,]);
    return view('patients.create', compact('religions', 'states', 'hmos'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $user = User::create(array_merge($request->except(['date_of_birth', 'gender', 'password']), ['password' => bcrypt($request->password)]));
    $user->assignRole('patient');
    $hospital_no = UniqueIdGenerator::generate(['table' => 'patients', 'length' => 4,]);
    $patient = Patient::create(array_merge($request->except(['password', 'next_of_kin_name', 'next_of_kin_relation', 'next_of_kin_phone', 'next_of_kin_address']), ['hospital_no' => $hospital_no, 'user_id' => $user->id]));
    $next_of_kin = NextOfKin::create(array_merge($request->only(['next_of_kin_name', 'next_of_kin_relation', 'next_of_kin_phone', 'next_of_kin_address']), ['user_id' => $user->id]));
    return redirect()->route('app.patients.index')->with('success', 'Patient Created Successfully');
  }


  public function createAccount(Request $request)
  {
    $user = User::create(array_merge($request->except(['date_of_birth', 'gender', 'password']), ['password' => bcrypt($request->password)]));
    // $user->assignRole('patient');
    $hospital_no = UniqueIdGenerator::generate(['table' => 'patients', 'length' => 4,]);
    $patient = Patient::create(array_merge($request->except(['password']), ['hospital_no' => $hospital_no, 'user_id' => $user->id]));

    return redirect()->route('register')->with('success', 'Account Created Successfully');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Patient  $patient
   * @return \Illuminate\Http\Response
   */
  public function show(BloodPressureChart $chart, Patient $patient)
  {
    $checked_in = 1;
    if ($checked_in) {
      return view('patients.show', ['patient' => $patient, 'chart' => $chart->build()]);
    } else {
      return back()->with('error', 'Please Check-In the Patient');
    }
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Patient  $patient
   * @return \Illuminate\Http\Response
   */
  public function edit(Patient $patient)
  {
    $ng = new NG();
    $states = $ng->states;
    $religions = Religion::all();
    $hmos = HmoGroup::all();
    $hospital_no = UniqueIdGenerator::generate(['table' => 'patients', 'length' => 4,]);
    return view('patients.edit', compact('religions', 'states', 'hmos', 'patient'));
  }

  public function draw(Patient $patient)
  {
    return view('patients.draw');
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Patient  $patient
   * @return \Illuminate\Http\Response
   */

  public function update(Request $request, Patient $patient)
  {
    $userId = $patient->user->id;

    $userUpdateData = array_merge(
      $request->except(['date_of_birth', 'gender', 'password']),
      ['password' => bcrypt($request->password)]
    );

    $user = User::findOrFail($userId);
    $user->update($userUpdateData);
    $user->assignRole('patient');

    $patientUpdateData = $request->except([
      'password',
      'next_of_kin_name',
      'dependent',
      'next_of_kin_relation',
      'next_of_kin_phone',
      'next_of_kin_address'
    ]);

    $patient = Patient::where('user_id', $userId)->firstOrFail();
    $patient->update($patientUpdateData);

    $nextOfKinUpdateData = $request->only([
      'next_of_kin_name',
      'next_of_kin_relation',
      'next_of_kin_phone',
      'next_of_kin_address'
    ]);

    $nextOfKin = NextOfKin::where('user_id', $userId)->firstOrFail();
    $nextOfKin->update($nextOfKinUpdateData);
    return redirect()->route('app.patients.index')->with('success', 'Patient Updated Successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Patient  $patient
   * @return \Illuminate\Http\Response
   */
  public function destroy(Patient $patient)
  {
    //
  }
}
