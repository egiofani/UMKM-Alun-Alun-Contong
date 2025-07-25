<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\User\Home;
use App\Livewire\User\UmkmList;
use App\Livewire\User\ProdukList;
use App\Livewire\User\UmkmDetail;
use App\Livewire\User\AboutUs;
use Illuminate\Support\Facades\Route;

use App\Livewire\Admin\UmkmIndex;
use App\Livewire\Admin\UmkmForm;
use App\Livewire\Admin\ProdukIndex;
use App\Livewire\Admin\ProdukForm;
use App\Livewire\Admin\KategoriIndex;
use App\Livewire\Admin\KategoriForm;



// DASHBOARD & SETTINGS (auth user)
Route::middleware(['auth'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::redirect('settings', 'settings/profile');
    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

// Halaman depan (frontend)
Route::get('/', Home::class)->name('home');
Route::get('/listumkm', UmkmList::class)->name('user.umkm');
Route::get('/listproduk', ProdukList::class)->name('user.produk');
Route::get('/detailumkm/{id}', UmkmDetail::class)->name('user.detailumkm');
Route::get('/aboutus', AboutUs::class)->name('user.aboutus');

// Jika akses /admin langsung, arahkan ke login jika belum login
Route::middleware('auth')->get('/admin', function () {
    return redirect()->route('admin.umkm');
});

// Admin area (hanya untuk yang sudah login)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('umkm', UmkmIndex::class)->name('admin.umkm');
    Route::get('umkm/create', UmkmForm::class)->name('umkm.create');
    Route::get('umkm/{umkm}/edit', UmkmForm::class)->name('umkm.edit');

    Route::get('produk', ProdukIndex::class)->name('admin.produk');
    Route::get('produk/create', ProdukForm::class)->name('produk.create');
    Route::get('produk/{id}/edit', ProdukForm::class)->name('produk.edit');

    Route::get('kategori', KategoriIndex::class)->name('admin.kategori');
    Route::get('kategori/create', KategoriForm::class)->name('kategori.create');
    Route::get('kategori/{id}/edit', KategoriForm::class)->name('kategori.edit');
});



require __DIR__.'/auth.php';
