<nav class="bg-[linear-gradient(to_top,_#ffffff,_#0ea5e9)] text-[#075985] px-12 py-4 flex justify-between items-center">
    <!-- Logo -->
    <div class="text-lg font-semibold">
        <span class="font-bold">G</span>ambar logo?
    </div>

    <!-- Navigation Menu -->
    <ul class="flex space-x-6 text-md">
        <li><a href="/" class="{{ Route::currentRouteName() === 'home' ? 'font-bold underline' : 'hover:underline' }}">Home</a></li>
        <li><a href="{{ Route('user.produk') }}" class="{{ Route::currentRouteName() === 'user.produk' ? 'font-bold underline' : 'hover:underline' }}">
            List Produk</a></li>
        <li><a href="{{ Route('user.umkm') }}" class="{{ Route::currentRouteName() === 'user.umkm' ? 'font-bold underline' : 'hover:underline' }}">List UMKM</a></li>
        <li><a href="{{ route('user.aboutus') }}" class="{{ Route::currentRouteName() === 'user.aboutus' ? 'font-bold underline' : 'hover:underline' }}">About Us</a></li>
    </ul>
</nav>