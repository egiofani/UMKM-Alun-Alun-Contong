<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Beranda' }}</title>
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> -->
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
    .slide-in-up,
    .slide-in-left,
    .slide-in-right,
    .zoom-in,
    .fade-in {
        opacity: 0;
        transition: all 0.8s ease-out;
    }

    .slide-in-up {
        transform: translateY(40px);
    }

    .slide-in-left {
        transform: translateX(40px);
    }

    .slide-in-right {
        transform: translateX(-40px);
    }

    .zoom-in {
        transform: scale(0.9);
    }

    .fade-in {
        transform: scale(1.5);
    }

    .visible {
        opacity: 1 !important;
        transform: none !important;
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
    function applyAnimations(scope = document) {
        console.log("🌀 applyAnimations called");

        const elements = scope.querySelectorAll('.slide-in-up, .slide-in-left, .slide-in-right, .zoom-in, .fade-in');

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    el.classList.add('visible');
                    observer.unobserve(el); // Stop observing once it's visible
                }
            });
        }, {
            threshold: 0.1, // elemen muncul minimal 10%
        });

        elements.forEach((el, i) => {
            el.classList.remove('visible');
            el.style.transitionDelay = `${i * 40}ms`;
            observer.observe(el);
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        applyAnimations();
    });

    document.addEventListener('livewire:load', () => {
        Livewire.hook('message.processed', (message, component) => {
            const el = component.el;
            setTimeout(() => {
                applyAnimations(el);
            }, 50);
        });
    });

    // Tambahan pengawasan mutasi untuk fallback
    const fallbackObserver = new MutationObserver(() => {
        applyAnimations();
    });

    fallbackObserver.observe(document.querySelector('body'), {
        childList: true,
        subtree: true,
    });
</script>



</body>
</html>
