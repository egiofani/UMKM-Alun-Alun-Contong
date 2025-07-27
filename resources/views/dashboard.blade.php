<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl px-4 py-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Jumlah UMKM -->
            <div class="flex items-center justify-center bg-white dark:bg-neutral-800 rounded-xl border border-neutral-200 dark:border-neutral-700 p-6">
                <div class="text-center">
                    <h2 class="text-xl font-semibold text-neutral-800 dark:text-white">Jumlah UMKM</h2>
                    <p class="text-4xl font-bold text-blue-600 mt-2">20</p>
                </div>
            </div>

            <!-- Jumlah Produk -->
            <div class="flex items-center justify-center bg-white dark:bg-neutral-800 rounded-xl border border-neutral-200 dark:border-neutral-700 p-6">
                <div class="text-center">
                    <h2 class="text-xl font-semibold text-neutral-800 dark:text-white">Jumlah Produk</h2>
                    <p class="text-4xl font-bold text-green-600 mt-2">100</p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
