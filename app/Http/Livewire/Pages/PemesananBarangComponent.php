<?php

namespace App\Http\Livewire\Pages;

use App\Models\PemesananBarang;
use Livewire\Component;

class PemesananBarangComponent extends Component
{
    public function destroy($PemesananBarangId)
    {
        $findPemesananBarang = PemesananBarang::find($PemesananBarangId);
        $findPemesananBarang->delete();
        session()->flash('message', 'Category ' . $findPemesananBarang->name . ' successfully deleted!');
        return redirect()->back();
    }
    public function render()
    {
        $showPemesananBarang = PemesananBarang::query()->latest()->get();
        return view('livewire.pages.pemesananbarang-component', [
            'showPemesananBarang' => $showPemesananBarang
        ])->layout("app.app");
    }
}
