<?php

namespace App\Http\Livewire\Pages\PemesananBarang;

use App\Models\User;

use App\Models\PemesananBarang;
use Livewire\Component;

class CreateComponent extends Component
{

    public function render()
    {
        $showUser = User::query()->latest()->get();
        return view('livewire.pages.PemesananBarang.create-component', [
            'showUser' => $showUser
        ])->layout("app.app");
    }
}
