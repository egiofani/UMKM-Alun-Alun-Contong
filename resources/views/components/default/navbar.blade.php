<nav class="bg-blue-500 text-white px-6 py-4 flex justify-between items-center shadow">
    <!-- Logo -->
    <div class="text-lg font-semibold">
        <span class="font-bold">G</span>ambar logo?
    </div>

    <!-- Navigation Menu -->
    <ul class="flex space-x-6 text-sm">
        <li><a href="/" class="hover:text-gray-200">Home</a></li>
        <li><a href="{{ Route('user.produk') }}" class="hover:text-gray-200">List Produk</a></li>
        <li><a href="{{ Route('user.umkm') }}" class="hover:text-gray-200">List UMKM</a></li>
        <li><a href="{{ route('user.aboutus') }}" class="hover:text-gray-200">About Us</a></li>
    </ul>
</nav>