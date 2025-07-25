@props(['label' => 'Dropdown', 'items' => []])

<div x-data="{ open: false }" class="relative group">
    <button
        @click="open = !open"
        class="w-40 px-4 py-1 text-sm rounded-full bg-blue-100 text-blue-600 border border-blue-300 flex items-center justify-between">
        {{ $label }}
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 9l-7 7-7-7" />
        </svg>
    </button>
    <ul
        x-show="open"
        @click.away="open = false"
        x-transition
        class="absolute left-0 mt-1 w-40 bg-white shadow-lg border rounded group-hover:block z-20"
        style="display: none">
        @foreach ($items as $item)
            <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">{{ $item }}</li>
        @endforeach
    </ul>
</div>

