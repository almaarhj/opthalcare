<?php

namespace App\Http\Controllers;

use App\Models\LabCategory;
use App\Models\Laboratory;
use App\Models\LabTemplate;
use Illuminate\Http\Request;

class LaboratoryController extends Controller
{
  public function store(Request $request)
  {
    $labTest = Laboratory::create($request->all());
    return redirect()->route('app.settings.laboratory')->with('success', 'Lab Test Added !');
  }

  public function update()
  {
  }

  public function storeCategory(Request $request)
  {
    $category = LabCategory::create($request->all());
    // dd($request->all());
    return redirect()->route('app.settings.laboratory')->with('success', 'Lab Test Category Added !');
  }

  public function UpdateCategory()
  {
  }

  public function storeTemplate(Request $request)
  {
    $template = LabTemplate::create($request->all());
    return redirect()->route('app.settings.laboratory')->with('success', 'Lab Test Template Added !');
  }

  public function updateTemplate()
  {
  }

  public function deleteCategory()
  {
  }

  public function deleteTemplate()
  {
  }
}
