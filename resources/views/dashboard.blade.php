<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 p-6">
            <!-- Section 1: Jumlah Penonton Belum Hadir (Kursi Regular) -->
            <div class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden md:max-w-2xl mb-6">
              <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 dark:text-indigo-300 font-semibold">Penonton Belum Hadir</div>
                <p class="mt-2 text-gray-600 dark:text-gray-400">Jumlah kursi regular yang belum diisi: <span class="font-bold text-xl">{{ $belumHadir }}</span></p>
              </div>
            </div>
          
            <!-- Section 2: Jumlah Penonton Sudah Hadir (Kursi Regular) -->
            <div class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden md:max-w-2xl mb-6">
              <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-green-500 dark:text-green-300 font-semibold">Penonton Sudah Hadir</div>
                <p class="mt-2 text-gray-600 dark:text-gray-400">Jumlah kursi regular yang sudah diisi: <span class="font-bold text-xl">{{ $sudahHadir }}</span></p>
              </div>
            </div>
          
            <!-- Section 3: Jumlah Kursi VIP -->
            <div class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden md:max-w-2xl">
              <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-yellow-500 dark:text-yellow-300 font-semibold">Kursi VIP</div>
                <p class="mt-2 text-gray-600 dark:text-gray-400">Jumlah kursi VIP tersedia: <span class="font-bold text-xl">{{ $vip }}</span></p>
              </div>
            </div>
          </div>          
    </div>
</x-app-layout>
