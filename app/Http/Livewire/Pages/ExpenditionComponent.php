<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\expendition;

class ExpenditionComponent extends Component
{
    public function render()
    {
        $showExpendition = expendition::query()->latest()->get();
        return view('livewire.pages.expendition-component', [
            'showExpendition' => $showExpendition
        ])->layout("app.app");
    }
}
