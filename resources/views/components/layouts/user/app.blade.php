<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Beranda' }}</title>
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
    .slide-in-up,
    .slide-in-left,
    .slide-in-right,
    .zoom-in,
    .fade-in {
        opacity: 0;
        transition: all 1.5s ease-out;
    }

    .slide-in-up {
        transform: translateY(30px);
    }

    .slide-in-left {
        transform: translateX(100px);
    }

    .slide-in-right {
        transform: translateX(-100px);
    }

    .zoom-in {
        transform: scale(0.8);
    }

    .fade-in {
        transform: scale(2);
    }

    .visible {
        opacity: 1;
        transform: none;
    }
    .scrollbar-hide::-webkit-scrollbar {
    display: none;
    }
    .scrollbar-hide {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
</style>
</head>
<body class="bg-[#f0f9ff] text-gray-800 min-h-screen max-w-screen">

    {{ $slot }}

    @livewireScripts

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const sections = document.querySelectorAll('.slide-in-up, .fade-in');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target); // animasi hanya sekali
                }
            });
        }, {
            threshold: 0.1
        });

        sections.forEach(section => {
            observer.observe(section);
        });
    });
</script>

</body>
</html>
