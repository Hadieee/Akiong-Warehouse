<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class KategoriChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $kategori = Kategori::get();
        $data = [
            $kategorie->where('kategori', 'ATK')->count(),
            $kategorie->where('kategori', 'Pakaian')->count(),
        ];
        $label =[
            'ATK',
            'Pakaian',
        ];
        return $this->chart->pieChart()
            ->setTitle('Data Kategori')
            ->setSubtitle(date('Y'))
            ->addData($data)
            ->setLabels($label);
    }
}
