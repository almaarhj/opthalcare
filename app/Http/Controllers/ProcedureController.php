<?php

namespace App\Http\Controllers;



use App\Models\Procedure;
use App\Models\ProcedureCategory;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
  
  
  public function storeProcedure(Request $request)
  {
    $procedure = Procedure::create($request->all());
    return redirect()->route('app.settings.procedures')->with('success', 'Procedure Added !');
  }

  public function updateProcedure()
  {
  }

  public function storeCategory(Request $request)
  {
    $category = ProcedureCategory::create($request->all());
    // dd($request->all());
    return redirect()->route('app.settings.procedures')->with('success', 'Procedure Category Added !');
  }

  public function UpdateCategory()
  {
  }
}
