<?php

namespace App\Imports;

use App\Models\LabCategory;
use App\Models\Laboratory;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class LabTestImport implements ToCollection
{
  /**
   * @param Collection $collection
   */
  public function collection(Collection $rows)
  {
    foreach ($rows as $row) {
      Laboratory::create([
        'name' => $row[0],
        'category_id' => LabCategory::where('name', $row[1])->first()->id,
        'price' => $row[2]
      ]);
    }
  }
}
