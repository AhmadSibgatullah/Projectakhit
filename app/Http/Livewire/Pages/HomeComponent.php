<?php

namespace App\Http\Livewire\Pages;

use App\Models\User;
use Livewire\Component;

class HomeComponent extends Component
{


    public function render()
    {
        return view('livewire.pages.home-component')->layout('app.app');
    }
}
