<?php

namespace App\Http\Livewire\Pages\PemesananBarang;

use App\Models\User;
use App\Models\PemesananBarang;
use Livewire\Component;

class UpdateComponent extends Component
{
    public $name;
    public $amount;
    public $account;
    public $description;
    public $PemesananBarangId;
    public $findPemesananBarang;
    public function mount($PemesananBarangId)
    {
        $this->findPemesananBarang = PemesananBarang::findOrFail($PemesananBarangId);
        $this->PemesananBarangId = $this->findPemesananBarang->id;
        $this->name = $this->findPemesananBarang->name;
        $this->amount = $this->findPemesananBarang->amount;
        $this->account = $this->findPemesananBarang->account;
        $this->description = $this->findPemesananBarang->description;
    }

    protected $rules = [
        'name' => 'required|min:1',
    ];

    public function updateForm()
    {
        $this->validate();
        $updatePemesananBarang = PemesananBarang::find($this->PemesananBarangId);
        $updatePemesananBarang->update([
            'name' => $this->name,
            'amount' => $this->amount,
            'account' => $this->account,
            'description' => $this->description
        ]);
        session()->flash('message', 'Category successfully updated!');
        return redirect()->route("PemesananBarang");
    }
    public function render()
    {
        $showUser = User::query()->latest()->get();
        return view('livewire.pages.PemesananBarang.update-component', [
            'showUser' => $showUser
        ])->layout("app.app");
    }
}
