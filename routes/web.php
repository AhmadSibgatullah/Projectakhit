<?php

use App\Http\Livewire\Pages\Admin;
use App\Http\Livewire\Pages\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\HomeComponent;
use App\Http\Livewire\Pages\LoginComponent;
use App\Http\Livewire\Pages\PemesananBarangComponent;
use App\Http\Livewire\Pages\LogoutComponent;
use App\Http\Livewire\Pages\SignupComponent;
use App\Http\Controllers\pages\MenejemenToko\PemesananBarang;
use App\Http\Livewire\Pages\Expendition\Create;
use App\Http\Livewire\Pages\ExpenditionComponent;
use App\Http\Livewire\Pages\ControlPanelComponent;
use App\Http\Livewire\Pages\PemesananBarang\CreateComponent;
use App\Http\Livewire\Pages\PemesananBarang\UpdateComponent;
use App\Http\Controllers\pages\MenejemenToko\expenditioncreate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::middleware(['guest'])->group(function () {
    Route::get("/login", LoginComponent::class)->name("login");
});

Route::middleware(['auth'])->group(function () {
    Route::get("/", HomeComponent::class)->name("dashboard");
    Route::get("/signup", SignupComponent::class)->name("signup");

    Route::prefix('user')->name("user.")->group(function () {
        Route::prefix('admin')->name("admin.")->group(function () {
            Route::get("", Admin::class)->name("index");
        });
        Route::prefix('member')->name("member.")->group(function () {
            Route::get("", Member::class)->name("index");
        });
    });

    Route::prefix('MenejemenToko')->name("MenejemenToko.")->group(function () {
        Route::prefix('controlpanel')->name("controlpanel.")->group(function () {
            Route::get("", ControlPanelComponent::class)->name("index");
            Route::get("/create", CreateComponent::class)->name("create");
            Route::post("/store", [ControlPanel::class, 'store'])->name("store");
        });
        Route::prefix('PemesananBarang')->name("PemesananBarang.")->group(function () {
            Route::get("", PemesananBarangComponent::class)->name("index");
            Route::get("/create", CreateComponent::class)->name("create");
            Route::post("/store", [PemesananBarang::class, 'store'])->name("store");
            Route::get("/{PemesananBarangId}/update", UpdateComponent::class)->name("update");
            Route::delete("/{PemesananBarangId}/delete", [PemesananBarang::class, 'destroy'])->name("destroy");
        });
        Route::prefix('expendition')->name("expendition.")->group(function () {
            Route::get("", ExpenditionComponent::class)->name("index");
            Route::get("/create", Create::class)->name("create");
            Route::post("/store", [expenditioncreate::class, 'store'])->name("store");
        });
    });
});
