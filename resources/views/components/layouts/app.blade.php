<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main >
        <x-default.header />
        {{ $slot }}

        
    </flux:main>
</x-layouts.app.sidebar>

