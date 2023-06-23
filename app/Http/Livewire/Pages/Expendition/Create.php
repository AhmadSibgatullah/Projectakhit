<?php

namespace App\Http\Livewire\Pages\Expendition;

use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        $showUser = User::query()->latest()->get();
        return view('livewire.pages.expendition.create', [
            'showUser' => $showUser
        ])->layout("app.app");
    }
}
