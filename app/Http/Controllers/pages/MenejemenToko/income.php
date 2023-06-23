<?php

namespace App\Http\Controllers\pages\MenejemenToko;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\PemesananBarang as ModelsPemesananBarang;
use App\Models\User;

class PemesananBarang extends Controller
{
    // public function index()
    // {
    //     $allCategories = CategoriesBooks::latest()->get();
    //     return view("pages.categories.index")->with('allCategories', $allCategories);
    // }
    // public function create()
    // {
    //     return view("livewire.pages.PemesananBarang.create-component");
    // }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'account' => 'required',
            'description' => 'required'
        ], [
            'name.required' => 'name cannot be blank',
            'amount.required' => 'amount cannot be blank',
            'account.required' => 'account cannot be blank',
            'description.required' => 'description cannot be blank',
        ]);
        $data = [
            'name' => $request->name,
            'amount' => $request->amount,
            'account' => $request->account,
            'description' => $request->description
        ];
        ModelsPemesananBarang::create($data);
        return redirect()->route('MenejemenToko.PemesananBarang.index')->with('success', 'added data successfully');
    }
    public function show(Request $request, string $PemesananBarangId)
    {
    }

    public function edit(string $PemesananBarangId)
    {
        $data = ModelsPemesananBarang::where('name', $PemesananBarangId)->first();
        $showUser = User::where('name', $PemesananBarangId)->first();
        return view("livewire.pages.PemesananBarang.edit", ['showUser' => $showUser, 'data' => $data]);
    }

    public function update(Request $request, string $PemesananBarangId)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'account' => 'required',
            'description' => 'required'
        ], [
            'name.required' => 'name cannot be blank',
            'amount.required' => 'amount cannot be blank',
            'account.required' => 'account cannot be blank',
            'description.required' => 'description cannot be blank',
        ]);
        $data = [
            'name' => $request->name,
            'amount' => $request->amount,
            'account' => $request->account,
            'description' => $request->description
        ];
        ModelsPemesananBarang::where('id', $PemesananBarangId)->update($data);
        return redirect()->to('perpus/categories')->with('success', 'Update data successfully');
    }
    public function destroy($PemesananBarangId)
    {
        ModelsPemesananBarang::where('id', $PemesananBarangId)->delete();
        return redirect()->route('MenejemenToko.PemesananBarang.index')->with('success', 'The data has been successfully deleted');
    }
}
