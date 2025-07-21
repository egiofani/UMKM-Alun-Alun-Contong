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
use App\Livewire\Admin\UmkmForm;
use App\Livewire\Admin\ProdukIndex;
use App\Livewire\Admin\ProdukForm;
use App\Livewire\Admin\KategoriIndex;
use App\Livewire\Admin\KategoriForm;

Route::middleware(['auth'])->prefix('admin')->group(function () {
    //UMKM
    Route::get('umkm', UmkmIndex::class)->name('admin.umkm');
    Route::get('/umkm/create', UmkmForm::class)->name('umkm.create');
    Route::get('/umkm/{umkm}/edit', UmkmForm::class)->name('umkm.edit');

    //Produk
    Route::get('produk', ProdukIndex::class)->name('admin.produk');
    Route::get('/produk/create', ProdukForm::class)->name('produk.create');
    Route::get('/produk/{id}/edit', ProdukForm::class)->name('produk.edit');
    //Kategori
    Route::get('kategori', KategoriIndex::class)->name('admin.kategori');
    Route::get('/kategori/create', KategoriForm::class)->name('kategori.create');
    Route::get('kategori/{id}/edit', KategoriForm::class)->name('kategori.edit');

});



require __DIR__.'/auth.php';
