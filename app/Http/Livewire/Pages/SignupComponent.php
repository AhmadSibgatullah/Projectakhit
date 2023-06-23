<?php

namespace App\Http\Livewire\Pages;

use App\Models\User;
use Livewire\Component;

class SignupComponent extends Component
{
    public $name;
    public $email;
    public $password;
    protected $rules = [
        'name' => 'required|min:1',
        'email' => 'required|min:1',
        'password' => 'required|min:8|max:20',
    ];

    public function createAccount()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
        session()->flash('message', 'Account successfully created!');
        return redirect(route("user.member.index"));
    }

    public function render()
    {
        return view('livewire.pages.signup-component')->layout('app.app');
    }
}
