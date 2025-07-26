<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Beranda' }}</title>
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
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
        transform: scale(1);
    }

    .visible {
        opacity: 1;
        transform: none;
    }
</style>
</head>
<body class="bg-[#ffffff] text-gray-800">

    {{ $slot }}

    @livewireScripts

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const sections = document.querySelectorAll('.slide-in-up');

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
