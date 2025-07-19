<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

use App\Livewire\Admin\UmkmIndex;
use App\Livewire\Admin\ProdukIndex;
use App\Livewire\Admin\KategoriIndex;

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('umkm', UmkmIndex::class)->name('admin.umkm');
    Route::get('produk', ProdukIndex::class)->name('admin.produk');
    Route::get('kategori', KategoriIndex::class)->name('admin.kategori');
});



require __DIR__.'/auth.php';
