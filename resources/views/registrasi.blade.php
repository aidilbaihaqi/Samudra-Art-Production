<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registrasi Penonton Pertunjukan Harmoni Kata</title>
  <link rel="icon" href="{{ asset('assets/img/samudra.jpg') }}">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: "Barlow", serif;
      font-optical-sizing: auto;
      font-weight: <weight>;
      font-style: normal;
    }
    .headline {
      font-family: "Playfair Display", serif;
      font-optical-sizing: auto;
      font-weight: 700;
      font-style: normal;
    }
  </style>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <div class="container mx-auto">
    <div class="flex flex-col md:flex-row w-12/12 bg-white mx-auto shadow-lg overflow-hidden">
        <!-- Image Section, only visible on desktop -->
        <div class="hidden md:block md:w-5/12">
            <img src="{{ asset('assets/img/poster.jpg') }}" alt="Left Image">
        </div>         
        
        <!-- Form Section -->
        <div class="w-full md:w-1/2 py-7 px-5">
            <form class="" action="{{ route('registrasi.store') }}" method="POST">
              @csrf
                <div class="space-y-12">
                    <div class="border-gray-900/10 pb-12">
                        <h2 class="text-2xl font-bold headline">Registrasi Penonton Pertunjukan Harmoni Kata: Alih Wahana Sastra Melayu Klasik ke Laman Kreativitas Musik</h2>

                        {{-- Kuota Kursi --}}
                        <div class="bg-gray-700 p-2 my-2 flex rounded-lg shadow-lg max-w-md">
                            <p class="font-bold text-gray-100 mb-2 mr-2">Kursi Penonton : <span class="text-blue-200 font-semibold">224</span></p>
                            <p class="font-bold text-gray-100">Jumlah kursi tersisa: <span class="text-red-400 font-semibold">{{ $sisakursi }}</span></p>
                        </div> 
                    
                        <div class="mt-3 grid grid-cols-1 gap-x-2 gap-y-2 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama Lengkap</label>
                                <div class="mt-2">
                                    <input type="text" name="nama" id="nama" autocomplete="given-name" class="block w-full text-sm rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Masukkan nama anda">
                                    @error('nama')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="sm:col-span-4">
                                <label for="alamat_domisili" class="block text-sm font-medium leading-6 text-gray-900">Alamat Domisili</label>
                                <div class="mt-2">
                                    <input type="text" name="alamat_domisili" id="alamat_domisili" autocomplete="given-name" class="block w-full text-sm rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Tempat tinggal anda sekarang">
                                    @error('alamat_domisili')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="sm:col-span-4">
                                <label for="no_whatsapp" class="block text-sm font-medium leading-6 text-gray-900">Nomor Whatsapp</label>
                                <div class="mt-2">
                                    <input type="text" name="no_whatsapp" id="no_whatsapp" autocomplete="given-name" class="block w-full text-sm rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="628xxxxxxxxx">
                                    @error('no_whatsapp')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="sm:col-span-4">
                                <div class="mt-2">
                                    <a href="#" id="openModal" class="rounded-md bg-gray-700 text-white px-3 py-2 text-sm font-semibold shadow-sm hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500">Pilih Kursi</a>
                                    @error('no_kursi')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- Modal -->
                                <div id="seatModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
                                    <div class="bg-white p-6 rounded-lg w-full max-w-3xl h-3/4 overflow-auto">
                                        <h2 class="text-2xl font-bold mb-4">Pilih Kursi Anda</h2>

                                        <!-- Input hidden untuk menyimpan kursi yang dipilih -->
                                        <input type="hidden" name="no_kursi" id="selectedSeat" value="">
                                        
                                        <!-- Scrollable container for seat layout -->
                                        <div class="overflow-x-auto overflow-y-auto max-h-[400px]">
                                            <!-- Layout Teater -->
                                            <div class="flex justify-between min-w-[800px]"> <!-- Set minimum width to allow horizontal scrolling -->
                                                <!-- Bagian Kiri (A1 sampai N8) -->
                                                <div class="grid grid-cols-8 gap-2">
                                                    <button {{ $nokursi->contains('A1') ? 'disabled' : '' }} data-seat="A1" type="button" class="seat {{ $nokursi->contains('A1') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A1</button>
                                                    <button {{ $nokursi->contains('A2') ? 'disabled' : '' }} data-seat="A2" type="button" class="seat {{ $nokursi->contains('A2') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A2</button>
                                                    <button {{ $nokursi->contains('A3') ? 'disabled' : '' }} data-seat="A3" type="button" class="seat {{ $nokursi->contains('A3') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A3</button>
                                                    <button {{ $nokursi->contains('A4') ? 'disabled' : '' }} data-seat="A4" type="button" class="seat {{ $nokursi->contains('A4') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A4</button>
                                                    <button {{ $nokursi->contains('A5') ? 'disabled' : '' }} data-seat="A5" type="button" class="seat {{ $nokursi->contains('A5') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A5</button>
                                                    <button {{ $nokursi->contains('A6') ? 'disabled' : '' }} data-seat="A6" type="button" class="seat {{ $nokursi->contains('A6') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A6</button>
                                                    <button {{ $nokursi->contains('A7') ? 'disabled' : '' }} data-seat="A7" type="button" class="seat {{ $nokursi->contains('A7') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A7</button>
                                                    <button {{ $nokursi->contains('A8') ? 'disabled' : '' }} data-seat="A8" type="button" class="seat {{ $nokursi->contains('A8') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A8</button>

                                                    <!-- Baris berikutnya -->
                                                    <!-- Baris berikutnya -->
                                                <button {{ $nokursi->contains('B1') ? 'disabled' : '' }} data-seat="B1" type="button" class="seat {{ $nokursi->contains('B1') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B1</button>
                                                <button {{ $nokursi->contains('B2') ? 'disabled' : '' }} data-seat="B2" type="button" class="seat {{ $nokursi->contains('B2') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B2</button>
                                                <button {{ $nokursi->contains('B3') ? 'disabled' : '' }} data-seat="B3" type="button" class="seat {{ $nokursi->contains('B3') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B3</button>
                                                <button {{ $nokursi->contains('B4') ? 'disabled' : '' }} data-seat="B4" type="button" class="seat {{ $nokursi->contains('B4') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B4</button>
                                                <button {{ $nokursi->contains('B5') ? 'disabled' : '' }} data-seat="B5" type="button" class="seat {{ $nokursi->contains('B5') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B5</button>
                                                <button {{ $nokursi->contains('B6') ? 'disabled' : '' }} data-seat="B6" type="button" class="seat {{ $nokursi->contains('B6') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B6</button>
                                                <button {{ $nokursi->contains('B7') ? 'disabled' : '' }} data-seat="B7" type="button" class="seat {{ $nokursi->contains('B7') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B7</button>
                                                <button {{ $nokursi->contains('B8') ? 'disabled' : '' }} data-seat="B8" type="button" class="seat {{ $nokursi->contains('B8') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B8</button>

                                                <button {{ $nokursi->contains('C1') ? 'disabled' : '' }} data-seat="C1" type="button" class="seat {{ $nokursi->contains('C1') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C1</button>
                                                <button {{ $nokursi->contains('C2') ? 'disabled' : '' }} data-seat="C2" type="button" class="seat {{ $nokursi->contains('C2') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C2</button>
                                                <button {{ $nokursi->contains('C3') ? 'disabled' : '' }} data-seat="C3" type="button" class="seat {{ $nokursi->contains('C3') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C3</button>
                                                <button {{ $nokursi->contains('C4') ? 'disabled' : '' }} data-seat="C4" type="button" class="seat {{ $nokursi->contains('C4') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C4</button>
                                                <button {{ $nokursi->contains('C5') ? 'disabled' : '' }} data-seat="C5" type="button" class="seat {{ $nokursi->contains('C5') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C5</button>
                                                <button {{ $nokursi->contains('C6') ? 'disabled' : '' }} data-seat="C6" type="button" class="seat {{ $nokursi->contains('C6') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C6</button>
                                                <button {{ $nokursi->contains('C7') ? 'disabled' : '' }} data-seat="C7" type="button" class="seat {{ $nokursi->contains('C7') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C7</button>
                                                <button {{ $nokursi->contains('C8') ? 'disabled' : '' }} data-seat="C8" type="button" class="seat {{ $nokursi->contains('C8') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C8</button>

                                                <button {{ $nokursi->contains('D1') ? 'disabled' : '' }} data-seat="D1" type="button" class="seat {{ $nokursi->contains('D1') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D1</button>
                                                <button {{ $nokursi->contains('D2') ? 'disabled' : '' }} data-seat="D2" type="button" class="seat {{ $nokursi->contains('D2') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D2</button>
                                                <button {{ $nokursi->contains('D3') ? 'disabled' : '' }} data-seat="D3" type="button" class="seat {{ $nokursi->contains('D3') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D3</button>
                                                <button {{ $nokursi->contains('D4') ? 'disabled' : '' }} data-seat="D4" type="button" class="seat {{ $nokursi->contains('D4') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D4</button>
                                                <button {{ $nokursi->contains('D5') ? 'disabled' : '' }} data-seat="D5" type="button" class="seat {{ $nokursi->contains('D5') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D5</button>
                                                <button {{ $nokursi->contains('D6') ? 'disabled' : '' }} data-seat="D6" type="button" class="seat {{ $nokursi->contains('D6') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D6</button>
                                                <button {{ $nokursi->contains('D7') ? 'disabled' : '' }} data-seat="D7" type="button" class="seat {{ $nokursi->contains('D7') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D7</button>
                                                <button {{ $nokursi->contains('D8') ? 'disabled' : '' }} data-seat="D8" type="button" class="seat {{ $nokursi->contains('D8') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D8</button>

                                                <button {{ $nokursi->contains('E1') ? 'disabled' : '' }} data-seat="E1" type="button" class="seat {{ $nokursi->contains('E1') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E1</button>
                                                <button {{ $nokursi->contains('E2') ? 'disabled' : '' }} data-seat="E2" type="button" class="seat {{ $nokursi->contains('E2') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E2</button>
                                                <button {{ $nokursi->contains('E3') ? 'disabled' : '' }} data-seat="E3" type="button" class="seat {{ $nokursi->contains('E3') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E3</button>
                                                <button {{ $nokursi->contains('E4') ? 'disabled' : '' }} data-seat="E4" type="button" class="seat {{ $nokursi->contains('E4') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E4</button>
                                                <button {{ $nokursi->contains('E5') ? 'disabled' : '' }} data-seat="E5" type="button" class="seat {{ $nokursi->contains('E5') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E5</button>
                                                <button {{ $nokursi->contains('E6') ? 'disabled' : '' }} data-seat="E6" type="button" class="seat {{ $nokursi->contains('E6') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E6</button>
                                                <button {{ $nokursi->contains('E7') ? 'disabled' : '' }} data-seat="E7" type="button" class="seat {{ $nokursi->contains('E7') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E7</button>
                                                <button {{ $nokursi->contains('E8') ? 'disabled' : '' }} data-seat="E8" type="button" class="seat {{ $nokursi->contains('E8') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E8</button>

                                                <button {{ $nokursi->contains('F1') ? 'disabled' : '' }} data-seat="F1" type="button" class="seat {{ $nokursi->contains('F1') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F1</button>
                                                <button {{ $nokursi->contains('F2') ? 'disabled' : '' }} data-seat="F2" type="button" class="seat {{ $nokursi->contains('F2') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F2</button>
                                                <button {{ $nokursi->contains('F3') ? 'disabled' : '' }} data-seat="F3" type="button" class="seat {{ $nokursi->contains('F3') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F3</button>
                                                <button {{ $nokursi->contains('F4') ? 'disabled' : '' }} data-seat="F4" type="button" class="seat {{ $nokursi->contains('F4') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F4</button>
                                                <button {{ $nokursi->contains('F5') ? 'disabled' : '' }} data-seat="F5" type="button" class="seat {{ $nokursi->contains('F5') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F5</button>
                                                <button {{ $nokursi->contains('F6') ? 'disabled' : '' }} data-seat="F6" type="button" class="seat {{ $nokursi->contains('F6') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F6</button>
                                                <button {{ $nokursi->contains('F7') ? 'disabled' : '' }} data-seat="F7" type="button" class="seat {{ $nokursi->contains('F7') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F7</button>
                                                <button {{ $nokursi->contains('F8') ? 'disabled' : '' }} data-seat="F8" type="button" class="seat {{ $nokursi->contains('F8') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F8</button>

                                                <button data-seat="G1" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G1</button>
                                                <button data-seat="G2" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G2</button>
                                                <button data-seat="G3" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G3</button>
                                                <button data-seat="G4" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G4</button>
                                                <button data-seat="G5" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G5</button>
                                                <button data-seat="G6" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G6</button>
                                                <button data-seat="G7" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G7</button>
                                                <button data-seat="G8" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G8</button>

                                                <button data-seat="H1" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H1</button>
                                                <button data-seat="H2" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H2</button>
                                                <button data-seat="H3" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H3</button>
                                                <button data-seat="H4" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H4</button>
                                                <button data-seat="H5" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H5</button>
                                                <button data-seat="H6" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H6</button>
                                                <button data-seat="H7" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H7</button>
                                                <button data-seat="H8" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H8</button>

                                                <button {{ $nokursi->contains('I1') ? 'disabled' : '' }} data-seat="I1" type="button" class="seat {{ $nokursi->contains('I1') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I1</button>
                                                <button {{ $nokursi->contains('I2') ? 'disabled' : '' }} data-seat="I2" type="button" class="seat {{ $nokursi->contains('I2') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I2</button>
                                                <button {{ $nokursi->contains('I3') ? 'disabled' : '' }} data-seat="I3" type="button" class="seat {{ $nokursi->contains('I3') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I3</button>
                                                <button {{ $nokursi->contains('I4') ? 'disabled' : '' }} data-seat="I4" type="button" class="seat {{ $nokursi->contains('I4') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I4</button>
                                                <button {{ $nokursi->contains('I5') ? 'disabled' : '' }} data-seat="I5" type="button" class="seat {{ $nokursi->contains('I5') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I5</button>
                                                <button {{ $nokursi->contains('I6') ? 'disabled' : '' }} data-seat="I6" type="button" class="seat {{ $nokursi->contains('I6') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I6</button>
                                                <button {{ $nokursi->contains('I7') ? 'disabled' : '' }} data-seat="I7" type="button" class="seat {{ $nokursi->contains('I7') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I7</button>
                                                <button {{ $nokursi->contains('I8') ? 'disabled' : '' }} data-seat="I8" type="button" class="seat {{ $nokursi->contains('I8') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I8</button>

                                                <button {{ $nokursi->contains('J1') ? 'disabled' : '' }} data-seat="J1" type="button" class="seat {{ $nokursi->contains('J1') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J1</button>
                                                <button {{ $nokursi->contains('J2') ? 'disabled' : '' }} data-seat="J2" type="button" class="seat {{ $nokursi->contains('J2') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J2</button>
                                                <button {{ $nokursi->contains('J3') ? 'disabled' : '' }} data-seat="J3" type="button" class="seat {{ $nokursi->contains('J3') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J3</button>
                                                <button {{ $nokursi->contains('J4') ? 'disabled' : '' }} data-seat="J4" type="button" class="seat {{ $nokursi->contains('J4') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J4</button>
                                                <button {{ $nokursi->contains('J5') ? 'disabled' : '' }} data-seat="J5" type="button" class="seat {{ $nokursi->contains('J5') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J5</button>
                                                <button {{ $nokursi->contains('J6') ? 'disabled' : '' }} data-seat="J6" type="button" class="seat {{ $nokursi->contains('J6') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J6</button>
                                                <button {{ $nokursi->contains('J7') ? 'disabled' : '' }} data-seat="J7" type="button" class="seat {{ $nokursi->contains('J7') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J7</button>
                                                <button {{ $nokursi->contains('J8') ? 'disabled' : '' }} data-seat="J8" type="button" class="seat {{ $nokursi->contains('J8') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J8</button>

                                                <button {{ $nokursi->contains('K1') ? 'disabled' : '' }} data-seat="K1" type="button" class="seat {{ $nokursi->contains('K1') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K1</button>
                                                <button {{ $nokursi->contains('K2') ? 'disabled' : '' }} data-seat="K2" type="button" class="seat {{ $nokursi->contains('K2') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K2</button>
                                                <button {{ $nokursi->contains('K3') ? 'disabled' : '' }} data-seat="K3" type="button" class="seat {{ $nokursi->contains('K3') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K3</button>
                                                <button {{ $nokursi->contains('K4') ? 'disabled' : '' }} data-seat="K4" type="button" class="seat {{ $nokursi->contains('K4') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K4</button>
                                                <button {{ $nokursi->contains('K5') ? 'disabled' : '' }} data-seat="K5" type="button" class="seat {{ $nokursi->contains('K5') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K5</button>
                                                <button {{ $nokursi->contains('K6') ? 'disabled' : '' }} data-seat="K6" type="button" class="seat {{ $nokursi->contains('K6') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K6</button>
                                                <button {{ $nokursi->contains('K7') ? 'disabled' : '' }} data-seat="K7" type="button" class="seat {{ $nokursi->contains('K7') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K7</button>
                                                <button {{ $nokursi->contains('K8') ? 'disabled' : '' }} data-seat="K8" type="button" class="seat {{ $nokursi->contains('K8') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K8</button>

                                                <button {{ $nokursi->contains('L1') ? 'disabled' : '' }} data-seat="L1" type="button" class="seat {{ $nokursi->contains('L1') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L1</button>
                                                <button {{ $nokursi->contains('L2') ? 'disabled' : '' }} data-seat="L2" type="button" class="seat {{ $nokursi->contains('L2') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L2</button>
                                                <button {{ $nokursi->contains('L3') ? 'disabled' : '' }} data-seat="L3" type="button" class="seat {{ $nokursi->contains('L3') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L3</button>
                                                <button {{ $nokursi->contains('L4') ? 'disabled' : '' }} data-seat="L4" type="button" class="seat {{ $nokursi->contains('L4') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L4</button>
                                                <button {{ $nokursi->contains('L5') ? 'disabled' : '' }} data-seat="L5" type="button" class="seat {{ $nokursi->contains('L5') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L5</button>
                                                <button {{ $nokursi->contains('L6') ? 'disabled' : '' }} data-seat="L6" type="button" class="seat {{ $nokursi->contains('L6') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L6</button>
                                                <button {{ $nokursi->contains('L7') ? 'disabled' : '' }} data-seat="L7" type="button" class="seat {{ $nokursi->contains('L7') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L7</button>
                                                <button {{ $nokursi->contains('L8') ? 'disabled' : '' }} data-seat="L8" type="button" class="seat {{ $nokursi->contains('L8') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L8</button>

                                                <button {{ $nokursi->contains('M1') ? 'disabled' : '' }} data-seat="M1" type="button" class="seat {{ $nokursi->contains('M1') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M1</button>
                                                <button {{ $nokursi->contains('M2') ? 'disabled' : '' }} data-seat="M2" type="button" class="seat {{ $nokursi->contains('M2') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M2</button>
                                                <button {{ $nokursi->contains('M3') ? 'disabled' : '' }} data-seat="M3" type="button" class="seat {{ $nokursi->contains('M3') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M3</button>
                                                <button {{ $nokursi->contains('M4') ? 'disabled' : '' }} data-seat="M4" type="button" class="seat {{ $nokursi->contains('M4') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M4</button>
                                                <button {{ $nokursi->contains('M5') ? 'disabled' : '' }} data-seat="M5" type="button" class="seat {{ $nokursi->contains('M5') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M5</button>
                                                <button {{ $nokursi->contains('M6') ? 'disabled' : '' }} data-seat="M6" type="button" class="seat {{ $nokursi->contains('M6') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M6</button>
                                                <button {{ $nokursi->contains('M7') ? 'disabled' : '' }} data-seat="M7" type="button" class="seat {{ $nokursi->contains('M7') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M7</button>
                                                <button {{ $nokursi->contains('M8') ? 'disabled' : '' }} data-seat="M8" type="button" class="seat {{ $nokursi->contains('M8') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M8</button>

                                                <button {{ $nokursi->contains('N1') ? 'disabled' : '' }} data-seat="N1" type="button" class="seat {{ $nokursi->contains('N1') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N1</button>
                                                <button {{ $nokursi->contains('N2') ? 'disabled' : '' }} data-seat="N2" type="button" class="seat {{ $nokursi->contains('N2') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N2</button>
                                                <button {{ $nokursi->contains('N3') ? 'disabled' : '' }} data-seat="N3" type="button" class="seat {{ $nokursi->contains('N3') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N3</button>
                                                <button {{ $nokursi->contains('N4') ? 'disabled' : '' }} data-seat="N4" type="button" class="seat {{ $nokursi->contains('N4') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N4</button>
                                                <button {{ $nokursi->contains('N5') ? 'disabled' : '' }} data-seat="N5" type="button" class="seat {{ $nokursi->contains('N5') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N5</button>
                                                <button {{ $nokursi->contains('N6') ? 'disabled' : '' }} data-seat="N6" type="button" class="seat {{ $nokursi->contains('N6') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N6</button>
                                                <button {{ $nokursi->contains('N7') ? 'disabled' : '' }} data-seat="N7" type="button" class="seat {{ $nokursi->contains('N7') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N7</button>
                                                <button {{ $nokursi->contains('N8') ? 'disabled' : '' }} data-seat="N8" type="button" class="seat {{ $nokursi->contains('N8') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N8</button>

                                                </div>

                                                <!-- Bagian Kanan (A9 sampai N16) -->
                                                <div class="grid grid-cols-8 gap-2">
                                                    <button {{ $nokursi->contains('A9') ? 'disabled' : '' }} data-seat="A9" type="button" class="seat {{ $nokursi->contains('A9') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A9</button>
                                                    <button {{ $nokursi->contains('A10') ? 'disabled' : '' }} data-seat="A10" type="button" class="seat {{ $nokursi->contains('A10') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A10</button>
                                                    <button {{ $nokursi->contains('A11') ? 'disabled' : '' }} data-seat="A11" type="button" class="seat {{ $nokursi->contains('A11') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A11</button>
                                                    <button {{ $nokursi->contains('A12') ? 'disabled' : '' }} data-seat="A12" type="button" class="seat {{ $nokursi->contains('A12') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A12</button>
                                                    <button {{ $nokursi->contains('A13') ? 'disabled' : '' }} data-seat="A13" type="button" class="seat {{ $nokursi->contains('A13') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A13</button>
                                                    <button {{ $nokursi->contains('A14') ? 'disabled' : '' }} data-seat="A14" type="button" class="seat {{ $nokursi->contains('A14') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A14</button>
                                                    <button {{ $nokursi->contains('A15') ? 'disabled' : '' }} data-seat="A15" type="button" class="seat {{ $nokursi->contains('A15') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A15</button>
                                                    <button {{ $nokursi->contains('A16') ? 'disabled' : '' }} data-seat="A16" type="button" class="seat {{ $nokursi->contains('A16') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A16</button>

                                                    <!-- Baris berikutnya -->
                                                <button {{ $nokursi->contains('B9') ? 'disabled' : '' }} data-seat="B9" type="button" class="seat {{ $nokursi->contains('B9') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B9</button>
                                                <button {{ $nokursi->contains('B10') ? 'disabled' : '' }} data-seat="B10" type="button" class="seat {{ $nokursi->contains('B10') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B10</button>
                                                <button {{ $nokursi->contains('B11') ? 'disabled' : '' }} data-seat="B11" type="button" class="seat {{ $nokursi->contains('B11') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B11</button>
                                                <button {{ $nokursi->contains('B12') ? 'disabled' : '' }} data-seat="B12" type="button" class="seat {{ $nokursi->contains('B12') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B12</button>
                                                <button {{ $nokursi->contains('B13') ? 'disabled' : '' }} data-seat="B13" type="button" class="seat {{ $nokursi->contains('B13') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B13</button>
                                                <button {{ $nokursi->contains('B14') ? 'disabled' : '' }} data-seat="B14" type="button" class="seat {{ $nokursi->contains('B14') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B14</button>
                                                <button {{ $nokursi->contains('B15') ? 'disabled' : '' }} data-seat="B15" type="button" class="seat {{ $nokursi->contains('B15') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B15</button>
                                                <button {{ $nokursi->contains('B16') ? 'disabled' : '' }} data-seat="B16" type="button" class="seat {{ $nokursi->contains('B16') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B16</button>

                                                <button {{ $nokursi->contains('C9') ? 'disabled' : '' }} data-seat="C9" type="button" class="seat {{ $nokursi->contains('C9') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C9</button>
                                                <button {{ $nokursi->contains('C10') ? 'disabled' : '' }} data-seat="C10" type="button" class="seat {{ $nokursi->contains('C10') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C10</button>
                                                <button {{ $nokursi->contains('C11') ? 'disabled' : '' }} data-seat="C11" type="button" class="seat {{ $nokursi->contains('C11') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C11</button>
                                                <button {{ $nokursi->contains('C12') ? 'disabled' : '' }} data-seat="C12" type="button" class="seat {{ $nokursi->contains('C12') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C12</button>
                                                <button {{ $nokursi->contains('C13') ? 'disabled' : '' }} data-seat="C13" type="button" class="seat {{ $nokursi->contains('C13') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C13</button>
                                                <button {{ $nokursi->contains('C14') ? 'disabled' : '' }} data-seat="C14" type="button" class="seat {{ $nokursi->contains('C14') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C14</button>
                                                <button {{ $nokursi->contains('C15') ? 'disabled' : '' }} data-seat="C15" type="button" class="seat {{ $nokursi->contains('C15') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C15</button>
                                                <button {{ $nokursi->contains('C16') ? 'disabled' : '' }} data-seat="C16" type="button" class="seat {{ $nokursi->contains('C16') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C16</button>

                                                <button {{ $nokursi->contains('D9') ? 'disabled' : '' }} data-seat="D9" type="button" class="seat {{ $nokursi->contains('D9') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D9</button>
                                                <button {{ $nokursi->contains('D10') ? 'disabled' : '' }} data-seat="D10" type="button" class="seat {{ $nokursi->contains('D10') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D10</button>
                                                <button {{ $nokursi->contains('D11') ? 'disabled' : '' }} data-seat="D11" type="button" class="seat {{ $nokursi->contains('D11') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D11</button>
                                                <button {{ $nokursi->contains('D12') ? 'disabled' : '' }} data-seat="D12" type="button" class="seat {{ $nokursi->contains('D12') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D12</button>
                                                <button {{ $nokursi->contains('D13') ? 'disabled' : '' }} data-seat="D13" type="button" class="seat {{ $nokursi->contains('D13') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D13</button>
                                                <button {{ $nokursi->contains('D14') ? 'disabled' : '' }} data-seat="D14" type="button" class="seat {{ $nokursi->contains('D14') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D14</button>
                                                <button {{ $nokursi->contains('D15') ? 'disabled' : '' }} data-seat="D15" type="button" class="seat {{ $nokursi->contains('D15') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D15</button>
                                                <button {{ $nokursi->contains('D16') ? 'disabled' : '' }} data-seat="D16" type="button" class="seat {{ $nokursi->contains('D16') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D16</button>

                                                <button {{ $nokursi->contains('E9') ? 'disabled' : '' }} data-seat="E9" type="button" class="seat {{ $nokursi->contains('E9') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E9</button>
                                                <button {{ $nokursi->contains('E10') ? 'disabled' : '' }} data-seat="E10" type="button" class="seat {{ $nokursi->contains('E10') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E10</button>
                                                <button {{ $nokursi->contains('E11') ? 'disabled' : '' }} data-seat="E11" type="button" class="seat {{ $nokursi->contains('E11') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E11</button>
                                                <button {{ $nokursi->contains('E12') ? 'disabled' : '' }} data-seat="E12" type="button" class="seat {{ $nokursi->contains('E12') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E12</button>
                                                <button {{ $nokursi->contains('E13') ? 'disabled' : '' }} data-seat="E13" type="button" class="seat {{ $nokursi->contains('E13') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E13</button>
                                                <button {{ $nokursi->contains('E14') ? 'disabled' : '' }} data-seat="E14" type="button" class="seat {{ $nokursi->contains('E14') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E14</button>
                                                <button {{ $nokursi->contains('E15') ? 'disabled' : '' }} data-seat="E15" type="button" class="seat {{ $nokursi->contains('E15') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E15</button>
                                                <button {{ $nokursi->contains('E16') ? 'disabled' : '' }} data-seat="E16" type="button" class="seat {{ $nokursi->contains('E16') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E16</button>

                                                <button {{ $nokursi->contains('F9') ? 'disabled' : '' }} data-seat="F9" type="button" class="seat {{ $nokursi->contains('F9') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F9</button>
                                                <button {{ $nokursi->contains('F10') ? 'disabled' : '' }} data-seat="F10" type="button" class="seat {{ $nokursi->contains('F10') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F10</button>
                                                <button {{ $nokursi->contains('F11') ? 'disabled' : '' }} data-seat="F11" type="button" class="seat {{ $nokursi->contains('F11') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F11</button>
                                                <button {{ $nokursi->contains('F12') ? 'disabled' : '' }} data-seat="F12" type="button" class="seat {{ $nokursi->contains('F12') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F12</button>
                                                <button {{ $nokursi->contains('F13') ? 'disabled' : '' }} data-seat="F13" type="button" class="seat {{ $nokursi->contains('F13') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F13</button>
                                                <button {{ $nokursi->contains('F14') ? 'disabled' : '' }} data-seat="F14" type="button" class="seat {{ $nokursi->contains('F14') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F14</button>
                                                <button {{ $nokursi->contains('F15') ? 'disabled' : '' }} data-seat="F15" type="button" class="seat {{ $nokursi->contains('F15') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F15</button>
                                                <button {{ $nokursi->contains('F16') ? 'disabled' : '' }} data-seat="F16" type="button" class="seat {{ $nokursi->contains('F16') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F16</button>

                                                <button {{ $nokursi->contains('G9') ? 'disabled' : '' }} data-seat="G9" type="button" class="seat {{ $nokursi->contains('G9') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G9</button>
                                                <button {{ $nokursi->contains('G10') ? 'disabled' : '' }} data-seat="G10" type="button" class="seat {{ $nokursi->contains('G10') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G10</button>
                                                <button {{ $nokursi->contains('G11') ? 'disabled' : '' }} data-seat="G11" type="button" class="seat {{ $nokursi->contains('G11') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G11</button>
                                                <button {{ $nokursi->contains('G12') ? 'disabled' : '' }} data-seat="G12" type="button" class="seat {{ $nokursi->contains('G12') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G12</button>
                                                <button {{ $nokursi->contains('G13') ? 'disabled' : '' }} data-seat="G13" type="button" class="seat {{ $nokursi->contains('G13') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G13</button>
                                                <button {{ $nokursi->contains('G14') ? 'disabled' : '' }} data-seat="G14" type="button" class="seat {{ $nokursi->contains('G14') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G14</button>
                                                <button {{ $nokursi->contains('G15') ? 'disabled' : '' }} data-seat="G15" type="button" class="seat {{ $nokursi->contains('G15') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G15</button>
                                                <button {{ $nokursi->contains('G16') ? 'disabled' : '' }} data-seat="G16" type="button" class="seat {{ $nokursi->contains('G16') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G16</button>

                                                <button data-seat="H9" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H9</button>
                                                <button data-seat="H10" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H10</button>
                                                <button data-seat="H11" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H11</button>
                                                <button data-seat="H12" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H12</button>
                                                <button data-seat="H13" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H13</button>
                                                <button data-seat="H14" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H14</button>
                                                <button data-seat="H15" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H15</button>
                                                <button data-seat="H16" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H16</button>

                                                <button {{ $nokursi->contains('I9') ? 'disabled' : '' }} data-seat="I9" type="button" class="seat {{ $nokursi->contains('I9') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I9</button>
                                                <button {{ $nokursi->contains('I10') ? 'disabled' : '' }} data-seat="I10" type="button" class="seat {{ $nokursi->contains('I10') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I10</button>
                                                <button {{ $nokursi->contains('I11') ? 'disabled' : '' }} data-seat="I11" type="button" class="seat {{ $nokursi->contains('I11') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I11</button>
                                                <button {{ $nokursi->contains('I12') ? 'disabled' : '' }} data-seat="I12" type="button" class="seat {{ $nokursi->contains('I12') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I12</button>
                                                <button {{ $nokursi->contains('I13') ? 'disabled' : '' }} data-seat="I13" type="button" class="seat {{ $nokursi->contains('I13') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I13</button>
                                                <button {{ $nokursi->contains('I14') ? 'disabled' : '' }} data-seat="I14" type="button" class="seat {{ $nokursi->contains('I14') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I14</button>
                                                <button {{ $nokursi->contains('I15') ? 'disabled' : '' }} data-seat="I15" type="button" class="seat {{ $nokursi->contains('I15') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I15</button>
                                                <button {{ $nokursi->contains('I16') ? 'disabled' : '' }} data-seat="I16" type="button" class="seat {{ $nokursi->contains('I16') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I16</button>

                                                <button {{ $nokursi->contains('J9') ? 'disabled' : '' }} data-seat="J9" type="button" class="seat {{ $nokursi->contains('J9') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J9</button>
                                                <button {{ $nokursi->contains('J10') ? 'disabled' : '' }} data-seat="J10" type="button" class="seat {{ $nokursi->contains('J10') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J10</button>
                                                <button {{ $nokursi->contains('J11') ? 'disabled' : '' }} data-seat="J11" type="button" class="seat {{ $nokursi->contains('J11') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J11</button>
                                                <button {{ $nokursi->contains('J12') ? 'disabled' : '' }} data-seat="J12" type="button" class="seat {{ $nokursi->contains('J12') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J12</button>
                                                <button {{ $nokursi->contains('J13') ? 'disabled' : '' }} data-seat="J13" type="button" class="seat {{ $nokursi->contains('J13') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J13</button>
                                                <button {{ $nokursi->contains('J14') ? 'disabled' : '' }} data-seat="J14" type="button" class="seat {{ $nokursi->contains('J14') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J14</button>
                                                <button {{ $nokursi->contains('J15') ? 'disabled' : '' }} data-seat="J15" type="button" class="seat {{ $nokursi->contains('J15') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J15</button>
                                                <button {{ $nokursi->contains('J16') ? 'disabled' : '' }} data-seat="J16" type="button" class="seat {{ $nokursi->contains('J16') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J16</button>

                                                <button {{ $nokursi->contains('K9') ? 'disabled' : '' }} data-seat="K9" type="button" class="seat {{ $nokursi->contains('K9') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K9</button>
                                                <button {{ $nokursi->contains('K10') ? 'disabled' : '' }} data-seat="K10" type="button" class="seat {{ $nokursi->contains('K10') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K10</button>
                                                <button {{ $nokursi->contains('K11') ? 'disabled' : '' }} data-seat="K11" type="button" class="seat {{ $nokursi->contains('K11') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K11</button>
                                                <button {{ $nokursi->contains('K12') ? 'disabled' : '' }} data-seat="K12" type="button" class="seat {{ $nokursi->contains('K12') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K12</button>
                                                <button {{ $nokursi->contains('K13') ? 'disabled' : '' }} data-seat="K13" type="button" class="seat {{ $nokursi->contains('K13') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K13</button>
                                                <button {{ $nokursi->contains('K14') ? 'disabled' : '' }} data-seat="K14" type="button" class="seat {{ $nokursi->contains('K14') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K14</button>
                                                <button {{ $nokursi->contains('K15') ? 'disabled' : '' }} data-seat="K15" type="button" class="seat {{ $nokursi->contains('K15') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K15</button>
                                                <button {{ $nokursi->contains('K16') ? 'disabled' : '' }} data-seat="K16" type="button" class="seat {{ $nokursi->contains('K16') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K16</button>

                                                <button {{ $nokursi->contains('L9') ? 'disabled' : '' }} data-seat="L9" type="button" class="seat {{ $nokursi->contains('L9') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L9</button>
                                                <button {{ $nokursi->contains('L10') ? 'disabled' : '' }} data-seat="L10" type="button" class="seat {{ $nokursi->contains('L10') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L10</button>
                                                <button {{ $nokursi->contains('L11') ? 'disabled' : '' }} data-seat="L11" type="button" class="seat {{ $nokursi->contains('L11') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L11</button>
                                                <button {{ $nokursi->contains('L12') ? 'disabled' : '' }} data-seat="L12" type="button" class="seat {{ $nokursi->contains('L12') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L12</button>
                                                <button {{ $nokursi->contains('L13') ? 'disabled' : '' }} data-seat="L13" type="button" class="seat {{ $nokursi->contains('L13') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L13</button>
                                                <button {{ $nokursi->contains('L14') ? 'disabled' : '' }} data-seat="L14" type="button" class="seat {{ $nokursi->contains('L14') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L14</button>
                                                <button {{ $nokursi->contains('L15') ? 'disabled' : '' }} data-seat="L15" type="button" class="seat {{ $nokursi->contains('L15') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L15</button>
                                                <button {{ $nokursi->contains('L16') ? 'disabled' : '' }} data-seat="L16" type="button" class="seat {{ $nokursi->contains('L16') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L16</button>

                                                <button {{ $nokursi->contains('M9') ? 'disabled' : '' }} data-seat="M9" type="button" class="seat {{ $nokursi->contains('M9') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M9</button>
                                                <button {{ $nokursi->contains('M10') ? 'disabled' : '' }} data-seat="M10" type="button" class="seat {{ $nokursi->contains('M10') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M10</button>
                                                <button {{ $nokursi->contains('M11') ? 'disabled' : '' }} data-seat="M11" type="button" class="seat {{ $nokursi->contains('M11') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M11</button>
                                                <button {{ $nokursi->contains('M12') ? 'disabled' : '' }} data-seat="M12" type="button" class="seat {{ $nokursi->contains('M12') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M12</button>
                                                <button {{ $nokursi->contains('M13') ? 'disabled' : '' }} data-seat="M13" type="button" class="seat {{ $nokursi->contains('M13') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M13</button>
                                                <button {{ $nokursi->contains('M14') ? 'disabled' : '' }} data-seat="M14" type="button" class="seat {{ $nokursi->contains('M14') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M14</button>
                                                <button {{ $nokursi->contains('M15') ? 'disabled' : '' }} data-seat="M15" type="button" class="seat {{ $nokursi->contains('M15') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M15</button>
                                                <button {{ $nokursi->contains('M16') ? 'disabled' : '' }} data-seat="M16" type="button" class="seat {{ $nokursi->contains('M16') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M16</button>

                                                <button {{ $nokursi->contains('N9') ? 'disabled' : '' }} data-seat="N9" type="button" class="seat {{ $nokursi->contains('N9') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N9</button>
                                                <button {{ $nokursi->contains('N10') ? 'disabled' : '' }} data-seat="N10" type="button" class="seat {{ $nokursi->contains('N10') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N10</button>
                                                <button {{ $nokursi->contains('N11') ? 'disabled' : '' }} data-seat="N11" type="button" class="seat {{ $nokursi->contains('N11') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N11</button>
                                                <button {{ $nokursi->contains('N12') ? 'disabled' : '' }} data-seat="N12" type="button" class="seat {{ $nokursi->contains('N12') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N12</button>
                                                <button {{ $nokursi->contains('N13') ? 'disabled' : '' }} data-seat="N13" type="button" class="seat {{ $nokursi->contains('N13') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N13</button>
                                                <button {{ $nokursi->contains('N14') ? 'disabled' : '' }} data-seat="N14" type="button" class="seat {{ $nokursi->contains('N14') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N14</button>
                                                <button {{ $nokursi->contains('N15') ? 'disabled' : '' }} data-seat="N15" type="button" class="seat {{ $nokursi->contains('N15') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N15</button>
                                                <button {{ $nokursi->contains('N16') ? 'disabled' : '' }} data-seat="N16" type="button" class="seat {{ $nokursi->contains('N16') ? 'bg-red-500' : 'bg-yellow-400' }} w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N16</button>

                                                <!-- Tambah baris C sampai N sesuai pola -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4 flex justify-end space-x-4">
                                            <a id="closeModal" class="bg-gray-800 cursor-pointer text-white px-4 py-2 rounded">Pilih</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="mt-2 sm:col-span-6">
                                <div class="flex items-center">
                                    <input type="checkbox" class="rounded-md border-gray-300 text-blue-600 focus:ring-blue-500" id="checkbox1" name="checkbox1">
                                    <label for="checkbox1" class="ml-2 text-gray-700 text-sm">Dengan mengisi form ini, anda telah setuju untuk memberikan data anda kepada kami sebagai pendataan informasi penonton</label>
                                </div>
                            </div>
                            <div class="mt-2 sm:col-span-6">
                                <div class="flex items-center">
                                    <input type="checkbox" class="rounded-md border-gray-300 text-blue-600 focus:ring-blue-500" id="checkbox2" name="checkbox2">
                                    <label for="checkbox2" class="ml-2 text-gray-700 text-sm">Dengan mengisi form ini, anda telah setuju untuk hadir tepat waktu sesuai dengan jadwal yang diberikan</label>
                                </div>
                            </div>
                            <div class="mt-2 sm:col-span-6">
                                <div class="flex items-center justify-start space-x-4">
                                    <button type="submit" class="rounded-md bg-gray-700 text-white px-3 py-2 text-sm font-semibold shadow-sm hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500" id="submitBtn" disabled>Pesan</button>
                                    <button type="reset" class="text-sm outline-yellow-500 font-semibold leading-6 text-gray-900">Clear</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Success -->
@if(session('success'))
    <div id="successModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-md mx-auto">
            <h2 class="text-2xl font-bold mb-4">Success</h2>
            <p class="font-bold mb-4">Pesanan anda telah berhasil! Klik tombol di bawah untuk mengunduh tiket sebagai syarat untuk masuk ke ruangan teater</p>
            <a class="rounded-md bg-gray-700 text-white px-3 py-2 text-sm font-semibold shadow-sm hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500" href="{{ route('invoice.download', $audience) }}">Download Tiket</a>
            {{-- <button type="button" id="closeModalN" class="mt-6 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">Close</button> --}}
        </div>
    </div>

    <script>
        document.getElementById('closeModalN').addEventListener('click', function() {
            document.getElementById('successModal').style.display = 'none';
        });
    </script>
@endif

{{-- Modal Pilih Kursi --}}
<script>
    // Buka modal
    document.getElementById('openModal').addEventListener('click', function() {
        document.getElementById('seatModal').classList.remove('hidden');
    });

    // Tutup modal
    document.getElementById('closeModal').addEventListener('click', function() {
        document.getElementById('seatModal').classList.add('hidden');
    });

    // Fungsi untuk memilih kursi dan set value
    let selectedSeat = null;
    const seatInput = document.getElementById('selectedSeat');
    
    document.querySelectorAll('.seat').forEach(function(seat) {
        seat.addEventListener('click', function() {
            if (selectedSeat) {
                selectedSeat.classList.remove('bg-green-500');
                selectedSeat.classList.add('bg-yellow-400');
            }
            selectedSeat = seat;
            selectedSeat.classList.remove('bg-yellow-400');
            selectedSeat.classList.add('bg-green-500');
            
            // Set value of selected seat in hidden input
            seatInput.value = seat.getAttribute('data-seat');
        });
    });

</script>

<script>
    const checkbox1 = document.getElementById('checkbox1');
    const checkbox2 = document.getElementById('checkbox2');
    const submitBtn = document.getElementById('submitBtn');

    checkbox1.addEventListener('change', () => {
        checkButtonState();
    });

    checkbox2.addEventListener('change', () => {
        checkButtonState();
    });

    function checkButtonState() {
        if (checkbox1.checked && checkbox2.checked) {
            submitBtn.disabled = false;
        } else {
            submitBtn.disabled = true;
        }
    }
</script>
</html>