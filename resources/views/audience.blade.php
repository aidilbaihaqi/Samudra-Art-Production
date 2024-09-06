<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Data Audience') }}
      </h2>
  </x-slot>

  <div class="overflow-x-auto">
    <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700">
        <thead class="bg-gray-200 dark:bg-gray-700 text-gray-600 dark:text-gray-300 uppercase text-sm leading-normal">
            <tr>
                <th class="py-3 px-6 text-left">ID</th>
                <th class="py-3 px-6 text-left">Nama</th>
                <th class="py-3 px-6 text-left">Alamat</th>
                <th class="py-3 px-6 text-center">No Kursi</th>
                <th class="py-3 px-6 text-center">No Tiket</th>
                <th class="py-3 px-6 text-center">Status Kehadiran</th>
                <th class="py-3 px-6 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 dark:text-gray-200 text-sm font-light">
            
          @foreach ($data as $d)
          <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
              <td class="py-3 px-6 text-left">{{ $loop->iteration }}</td>
              <td class="py-3 px-6 text-left">{{ $d->nama }}</td>
              <td class="py-3 px-6 text-left">{{ $d->alamat_domisili }}</td>
              <td class="py-3 px-6 text-left">{{ $d->no_kursi }}</td>
              <td class="py-3 px-6 text-left">{{ $d->no_tiket }}</td>
              <td class="py-3 px-6 text-left">
                <button class="{{ $d->status_kehadiran ? 'bg-blue-500 dark:bg-blue-600 hover:bg-blue-700 dark:hover:bg-blue-500' : 'bg-red-500 dark:bg-red-600 hover:bg-red-700 dark:hover:bg-red-500' }} text-white py-1 px-3 rounded ">{{ $d->status_kehadiran ? 'Hadir' : 'Tidak Hadir' }}</button>
              </td>
              <td class="py-3 px-6 text-center">
                  <button class="bg-blue-500 dark:bg-blue-600 text-white py-1 px-3 rounded hover:bg-blue-700 dark:hover:bg-blue-500">Edit</button>
              </td>
          </tr>
          @endforeach

        </tbody>
    </table>
</div>
</x-app-layout>
