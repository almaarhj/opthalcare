<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class BloodPressureChart
{
  protected $chart;

  public function __construct(LarapexChart $chart)
  {
    $this->chart = $chart;
  }

  public function build(): \ArielMejiaDev\LarapexCharts\AreaChart
  {
    return $this->chart->areaChart()
      ->setTitle('Sales during 2021.')
      ->addData('Physical sales', [40,])
      ->addData('Digital sales', [70])
      ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
  }
}
