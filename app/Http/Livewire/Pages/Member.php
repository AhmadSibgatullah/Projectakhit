<?php

namespace App\Http\Livewire\Pages;

use App\Models\User;
use Livewire\Component;

class Member extends Component
{
    public function render()
    {
        $showUser = User::query()->latest()->get();
        return view('livewire.pages.member', [
            'showUser' => $showUser
        ])->layout("app.app");
    }
}
