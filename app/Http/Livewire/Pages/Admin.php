<?php

namespace App\Http\Livewire\Pages;

use App\Models\User;
use Livewire\Component;

class Admin extends Component
{
    public function render()
    {
        $showUser = User::query()->latest()->get();
        return view('livewire.pages.admin', [
            'showUser' => $showUser
        ])->layout("app.app");
    }
}
