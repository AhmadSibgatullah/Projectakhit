<?php

namespace App\Http\Livewire\Pages;

use App\Models\expendition;
use App\Models\PemesananBarang;
use Livewire\Component;

class ControlPanelComponent extends Component
{
    public function render()
    {
        $totalPemesananBarang = PemesananBarang::sum('amount');
        $totalExpendition = expendition::sum('amount');
        $totalRemaining = $totalPemesananBarang - $totalExpendition;
        return view('livewire.pages.control-panel-component', ['totalPemesananBarang' => $totalPemesananBarang, 'totalExpendition' => $totalExpendition, 'totalRemaining' => $totalRemaining])->layout('app.app');
    }
}
