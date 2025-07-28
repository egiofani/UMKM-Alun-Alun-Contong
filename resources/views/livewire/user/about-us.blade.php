<x-layouts.user.app>
    <div>
        <header class="relative h-96 text-white overflow-hidden">
            <img src="{{ asset('images/kelurahan 1.png') }}" 
                alt="Kantor Kelurahan"
                class="absolute inset-0 w-full h-full object-cover z-0" />

            <div class="absolute inset-0 bg-black opacity-70 z-10"></div>

            <div class="relative z-20 flex justify-between items-center px-8 pt-6">
                <div class="text-white text-lg font-semibold">
                    <img src="{{ asset('images/logo 2.png') }}" alt="Logo Kelurahan"
                    class="w-20 h-auto rounded-full bg-white/50 border border-white/50 overflow-hidden z-0">
                </div>
                <nav class="space-x-6 text-white text-md font-medium">
                    <a href="/" class="hover:underline">Home</a>
                    <a href="{{ route('user.produk') }}" class="hover:underline">List Product</a>
                    <a href="{{ route('user.umkm') }}" class="hover:underline">List UMKM</a>
                    <a href="{{ route('user.aboutus') }}" class="hover:underline">About Us</a>
                </nav>
            </div>

            <div class="slide-in-up px-6 md:px-16 py-10 relative z-20 container mx-auto px-8 mt-32">
                <h1 class="text-3xl md:text-5xl font-extrabold leading-tight">
                    About Us
                </h1>
            </div>
        </header>

        <section class="slide-in-up bg-[linear-gradient(to_bottom,_#bae6fd,_#ffffff)] px-6 md:px-16 py-10" id="tentang">
            <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-10">
                Tentang Kami
            </h2>

            <div class="flex flex-col md:flex-row items-center gap-6">
                <div class="w-full md:w-1/2">
                    <p class="text-gray-800 leading-relaxed text-justify text-base md:text-xl">
                        Kelurahan Alun-Alun Contong adalah bagian dari Kecamatan Bubutan, Kota Surabaya, yang berkomitmen memberikan pelayanan publik yang prima, transparan, dan akuntabel. 
                        Kami melayani administrasi kependudukan, pemberdayaan masyarakat, serta pembangunan sosial dengan mendorong partisipasi aktif warga demi mewujudkan lingkungan yang tertib, aman, dan sejahtera.
                    </p>
                </div>
                <div class="w-full md:w-1/2">
                    <img src="{{ asset('images/kelurahan 2.png') }}" 
                    alt="Kantor Kelurahan"
                    class="w-full h-full rounded-xl">
                </div>
            </div>
        </section>

        <section class="slide-in-up bg-[linear-gradient(to_bottom,_#ffffff,_#bae6fd)] px-6 md:px-16 py-4">
            <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-10">
                Informasi dan Kontak
            </h2>
            <div class="space-y-3 text-xl text-grey-800">
                <div class="flex items-start gap-2">
                    <div class="text-red-600 mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>
                    </svg>
                    </div>
                    <p>Jl. Bubutan V No. 19 (Alun-Alun Contong), Surabaya, Jawa Timur 60174, Indonesia</p>
                </div>

                <div class="flex items-center gap-2">
                    <div class="text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6.62 10.79a15.91 15.91 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.21 11.36 11.36 0 003.55.57 1 1 0 011 1v3.61a1 1 0 01-1 1A17 17 0 013 5a1 1 0 011-1h3.6a1 1 0 011 1 11.36 11.36 0 00.57 3.55 1 1 0 01-.21 1.11l-2.34 2.13z"/>
                    </svg>
                    </div>
                    <p>(031) 5320192</p>
                </div>

                <div class="flex items-center gap-2">
                    <div class="text-pink-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M7 2C4.243 2 2 4.243 2 7v10c0 2.757 2.243 5 5 5h10c2.757 0 5-2.243 5-5V7c0-2.757-2.243-5-5-5H7zm10 2a3 3 0 013 3v10a3 3 0 01-3 3H7a3 3 0 01-3-3V7a3 3 0 013-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-.75a.75.75 0 110 1.5.75.75 0 010-1.5z"/>
                    </svg>
                    </div>
                    <p>@kelurahan_alunaluncontong</p>
                </div>
            </section>
            <section class="slide-in-up bg-[linear-gradient(to_top,_#ffffff,_#bae6fd)] px-6 md:px-16 py-2 mb-4">
                <div class="w-full">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d816.4225436443451!2d112.73555014135945!3d-7.250295659229502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f941a74bee63%3A0xebe929e460f182fb!2sKANTOR%20KELURAHAN%20ALUN%20ALUN%20CONTONG!5e0!3m2!1sid!2sid!4v1753344857366!5m2!1sid!2sid"
                        width="100%"
                        height="500"
                        allowfullscreen=""
                        loading="lazy"
                        style="border:0;"
                        class="rounded-xl shadow-md w-full"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
        </section>

        @include('components.default.footer')
    </div>
</x-layouts.user.app>
