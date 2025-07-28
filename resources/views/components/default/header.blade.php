@php
    $routeName = request()->route()->getName();

    $titles = [
        'dashboard' => 'Dashboard',
        'admin.umkm' => 'UMKM',
        'umkm.edit' => 'Edit UMKM',
        'umkm.create' => 'Tambah UMKM',
        'admin.kategori' => 'Kategori',
        'kategori.edit' => 'Edit Kategori',
        'kategori.create' => 'Tambah Kategori',
        'admin.produk' => 'Produk',
        'produk.edit' => 'Edit Produk',
        'produk.create' => 'Tambah Produk',
    ];

    $pageTitle = $titles[$routeName] ?? 'Halaman';
@endphp

<div class="bg-[#bae6fd] dark:bg-[#1e293b] shadow shadow-lg rounded-xl px-10 py-6 mb-4">
    <h1 class="text-2xl font-bold text-gray-800 dark:text-white">{{ $pageTitle }}</h1>
</div>
