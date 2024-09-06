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
                            <p class="font-bold text-gray-100">Jumlah kursi tersisa: <span class="text-red-400 font-semibold">224</span></p>
                        </div> 
                    
                        <div class="mt-3 grid grid-cols-1 gap-x-2 gap-y-2 sm:grid-cols-6">
                            <div class="sm:col-span-4">
                                <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama Lengkap</label>
                                <div class="mt-2">
                                    <input type="text" name="nama" id="nama" autocomplete="given-name" class="block w-full text-sm rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-4">
                                <label for="alamat_domisili" class="block text-sm font-medium leading-6 text-gray-900">Alamat Domisili</label>
                                <div class="mt-2">
                                    <input type="text" name="alamat_domisili" id="alamat_domisili" autocomplete="given-name" class="block w-full text-sm rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-4">
                                <label for="no_whatsapp" class="block text-sm font-medium leading-6 text-gray-900">Nomor Telepon</label>
                                <div class="mt-2">
                                    <input type="text" name="no_whatsapp" id="no_whatsapp" autocomplete="given-name" class="block w-full text-sm rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-4">
                                <div class="mt-2">
                                    <a href="#" id="openModal" class="rounded-md bg-gray-700 text-white px-3 py-2 text-sm font-semibold shadow-sm hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500">Pilih Kursi</a>
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
                                                    <button data-seat="A1" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A1</button>
                                                    <button data-seat="A2" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A2</button>
                                                    <button data-seat="A3" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A3</button>
                                                    <button data-seat="A4" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A4</button>
                                                    <button data-seat="A5" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A5</button>
                                                    <button data-seat="A6" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A6</button>
                                                    <button data-seat="A7" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A7</button>
                                                    <button data-seat="A8" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A8</button>

                                                    <!-- Baris berikutnya -->
                                                    <!-- Baris berikutnya -->
                                                <button data-seat="B1" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B1</button>
                                                <button data-seat="B2" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B2</button>
                                                <button data-seat="B3" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B3</button>
                                                <button data-seat="B4" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B4</button>
                                                <button data-seat="B5" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B5</button>
                                                <button data-seat="B6" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B6</button>
                                                <button data-seat="B7" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B7</button>
                                                <button data-seat="B8" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B8</button>

                                                <button data-seat="C1" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C1</button>
                                                <button data-seat="C2" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C2</button>
                                                <button data-seat="C3" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C3</button>
                                                <button data-seat="C4" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C4</button>
                                                <button data-seat="C5" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C5</button>
                                                <button data-seat="C6" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C6</button>
                                                <button data-seat="C7" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C7</button>
                                                <button data-seat="C8" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C8</button>

                                                <button data-seat="D1" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D1</button>
                                                <button data-seat="D2" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D2</button>
                                                <button data-seat="D3" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D3</button>
                                                <button data-seat="D4" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D4</button>
                                                <button data-seat="D5" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D5</button>
                                                <button data-seat="D6" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D6</button>
                                                <button data-seat="D7" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D7</button>
                                                <button data-seat="D8" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D8</button>

                                                <button data-seat="E1" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E1</button>
                                                <button data-seat="E2" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E2</button>
                                                <button data-seat="E3" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E3</button>
                                                <button data-seat="E4" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E4</button>
                                                <button data-seat="E5" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E5</button>
                                                <button data-seat="E6" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E6</button>
                                                <button data-seat="E7" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E7</button>
                                                <button data-seat="E8" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E8</button>

                                                <button data-seat="F1" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F1</button>
                                                <button data-seat="F2" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F2</button>
                                                <button data-seat="F3" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F3</button>
                                                <button data-seat="F4" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F4</button>
                                                <button data-seat="F5" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F5</button>
                                                <button data-seat="F6" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F6</button>
                                                <button data-seat="F7" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F7</button>
                                                <button data-seat="F8" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F8</button>

                                                <button data-seat="G1" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G1</button>
                                                <button data-seat="G2" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G2</button>
                                                <button data-seat="G3" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G3</button>
                                                <button data-seat="G4" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G4</button>
                                                <button data-seat="G5" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G5</button>
                                                <button data-seat="G6" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G6</button>
                                                <button data-seat="G7" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G7</button>
                                                <button data-seat="G8" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G8</button>

                                                <button data-seat="H1" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H1</button>
                                                <button data-seat="H2" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H2</button>
                                                <button data-seat="H3" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H3</button>
                                                <button data-seat="H4" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H4</button>
                                                <button data-seat="H5" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H5</button>
                                                <button data-seat="H6" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H6</button>
                                                <button data-seat="H7" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H7</button>
                                                <button data-seat="H8" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H8</button>

                                                <button data-seat="I1" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I1</button>
                                                <button data-seat="I2" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I2</button>
                                                <button data-seat="I3" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I3</button>
                                                <button data-seat="I4" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I4</button>
                                                <button data-seat="I5" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I5</button>
                                                <button data-seat="I6" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I6</button>
                                                <button data-seat="I7" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I7</button>
                                                <button data-seat="I8" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I8</button>

                                                <button data-seat="J1" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J1</button>
                                                <button data-seat="J2" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J2</button>
                                                <button data-seat="J3" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J3</button>
                                                <button data-seat="J4" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J4</button>
                                                <button data-seat="J5" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J5</button>
                                                <button data-seat="J6" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J6</button>
                                                <button data-seat="J7" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J7</button>
                                                <button data-seat="J8" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J8</button>

                                                <button data-seat="K1" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K1</button>
                                                <button data-seat="K2" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K2</button>
                                                <button data-seat="K3" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K3</button>
                                                <button data-seat="K4" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K4</button>
                                                <button data-seat="K5" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K5</button>
                                                <button data-seat="K6" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K6</button>
                                                <button data-seat="K7" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K7</button>
                                                <button data-seat="K8" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K8</button>

                                                <button data-seat="L1" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L1</button>
                                                <button data-seat="L2" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L2</button>
                                                <button data-seat="L3" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L3</button>
                                                <button data-seat="L4" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L4</button>
                                                <button data-seat="L5" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L5</button>
                                                <button data-seat="L6" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L6</button>
                                                <button data-seat="L7" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L7</button>
                                                <button data-seat="L8" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L8</button>

                                                <button data-seat="M1" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M1</button>
                                                <button data-seat="M2" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M2</button>
                                                <button data-seat="M3" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M3</button>
                                                <button data-seat="M4" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M4</button>
                                                <button data-seat="M5" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M5</button>
                                                <button data-seat="M6" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M6</button>
                                                <button data-seat="M7" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M7</button>
                                                <button data-seat="M8" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M8</button>

                                                <button data-seat="N1" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N1</button>
                                                <button data-seat="N2" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N2</button>
                                                <button data-seat="N3" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N3</button>
                                                <button data-seat="N4" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N4</button>
                                                <button data-seat="N5" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N5</button>
                                                <button data-seat="N6" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N6</button>
                                                <button data-seat="N7" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N7</button>
                                                <button data-seat="N8" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N8</button>

                                                </div>

                                                <!-- Bagian Kanan (A9 sampai N16) -->
                                                <div class="grid grid-cols-8 gap-2">
                                                    <button data-seat="A9" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A9</button>
                                                    <button data-seat="A10" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A10</button>
                                                    <button data-seat="A11" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A11</button>
                                                    <button data-seat="A12" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A12</button>
                                                    <button data-seat="A13" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A13</button>
                                                    <button data-seat="A14" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A14</button>
                                                    <button data-seat="A15" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A15</button>
                                                    <button data-seat="A16" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">A16</button>

                                                    <!-- Baris berikutnya -->
                                                <button data-seat="B9" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B9</button>
                                                <button data-seat="B10" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B10</button>
                                                <button data-seat="B11" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B11</button>
                                                <button data-seat="B12" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B12</button>
                                                <button data-seat="B13" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B13</button>
                                                <button data-seat="B14" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B14</button>
                                                <button data-seat="B15" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B15</button>
                                                <button data-seat="B16" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">B16</button>

                                                <button data-seat="C9" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C9</button>
                                                <button data-seat="C10" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C10</button>
                                                <button data-seat="C11" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C11</button>
                                                <button data-seat="C12" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C12</button>
                                                <button data-seat="C13" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C13</button>
                                                <button data-seat="C14" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C14</button>
                                                <button data-seat="C15" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C15</button>
                                                <button data-seat="C16" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">C16</button>

                                                <button data-seat="D9" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D9</button>
                                                <button data-seat="D10" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D10</button>
                                                <button data-seat="D11" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D11</button>
                                                <button data-seat="D12" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D12</button>
                                                <button data-seat="D13" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D13</button>
                                                <button data-seat="D14" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D14</button>
                                                <button data-seat="D15" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D15</button>
                                                <button data-seat="D16" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">D16</button>

                                                <button data-seat="E9" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E9</button>
                                                <button data-seat="E10" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E10</button>
                                                <button data-seat="E11" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E11</button>
                                                <button data-seat="E12" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E12</button>
                                                <button data-seat="E13" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E13</button>
                                                <button data-seat="E14" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E14</button>
                                                <button data-seat="E15" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E15</button>
                                                <button data-seat="E16" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">E16</button>

                                                <button data-seat="F9" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F9</button>
                                                <button data-seat="F10" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F10</button>
                                                <button data-seat="F11" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F11</button>
                                                <button data-seat="F12" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F12</button>
                                                <button data-seat="F13" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F13</button>
                                                <button data-seat="F14" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F14</button>
                                                <button data-seat="F15" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F15</button>
                                                <button data-seat="F16" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">F16</button>

                                                <button data-seat="G9" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G9</button>
                                                <button data-seat="G10" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G10</button>
                                                <button data-seat="G11" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G11</button>
                                                <button data-seat="G12" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G12</button>
                                                <button data-seat="G13" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G13</button>
                                                <button data-seat="G14" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G14</button>
                                                <button data-seat="G15" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G15</button>
                                                <button data-seat="G16" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">G16</button>

                                                <button data-seat="H9" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H9</button>
                                                <button data-seat="H10" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H10</button>
                                                <button data-seat="H11" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H11</button>
                                                <button data-seat="H12" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H12</button>
                                                <button data-seat="H13" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H13</button>
                                                <button data-seat="H14" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H14</button>
                                                <button data-seat="H15" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H15</button>
                                                <button data-seat="H16" type="button" disabled class="seat bg-gray-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">H16</button>

                                                <button data-seat="I9" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I9</button>
                                                <button data-seat="I10" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I10</button>
                                                <button data-seat="I11" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I11</button>
                                                <button data-seat="I12" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I12</button>
                                                <button data-seat="I13" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I13</button>
                                                <button data-seat="I14" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I14</button>
                                                <button data-seat="I15" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I15</button>
                                                <button data-seat="I16" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">I16</button>

                                                <button data-seat="J9" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J9</button>
                                                <button data-seat="J10" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J10</button>
                                                <button data-seat="J11" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J11</button>
                                                <button data-seat="J12" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J12</button>
                                                <button data-seat="J13" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J13</button>
                                                <button data-seat="J14" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J14</button>
                                                <button data-seat="J15" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J15</button>
                                                <button data-seat="J16" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">J16</button>

                                                <button data-seat="K9" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K9</button>
                                                <button data-seat="K10" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K10</button>
                                                <button data-seat="K11" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K11</button>
                                                <button data-seat="K12" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K12</button>
                                                <button data-seat="K13" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K13</button>
                                                <button data-seat="K14" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K14</button>
                                                <button data-seat="K15" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K15</button>
                                                <button data-seat="K16" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">K16</button>

                                                <button data-seat="L9" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L9</button>
                                                <button data-seat="L10" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L10</button>
                                                <button data-seat="L11" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L11</button>
                                                <button data-seat="L12" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L12</button>
                                                <button data-seat="L13" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L13</button>
                                                <button data-seat="L14" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L14</button>
                                                <button data-seat="L15" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L15</button>
                                                <button data-seat="L16" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">L16</button>

                                                <button data-seat="M9" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M9</button>
                                                <button data-seat="M10" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M10</button>
                                                <button data-seat="M11" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M11</button>
                                                <button data-seat="M12" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M12</button>
                                                <button data-seat="M13" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M13</button>
                                                <button data-seat="M14" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M14</button>
                                                <button data-seat="M15" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M15</button>
                                                <button data-seat="M16" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">M16</button>

                                                <button data-seat="N9" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N9</button>
                                                <button data-seat="N10" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N10</button>
                                                <button data-seat="N11" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N11</button>
                                                <button data-seat="N12" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N12</button>
                                                <button data-seat="N13" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N13</button>
                                                <button data-seat="N14" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N14</button>
                                                <button data-seat="N15" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N15</button>
                                                <button data-seat="N16" type="button" class="seat bg-yellow-400 w-10 h-10 flex justify-center items-center rounded text-sm font-bold">N16</button>

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
                                    <input type="checkbox" class="rounded-md border-gray-300 text-blue-600 focus:ring-blue-500" id="checkbox-1">
                                    <label for="checkbox-1" class="ml-2 text-gray-700 text-sm">Dengan mengisi form ini, anda telah setuju untuk memberikan data anda kepada kami sebagai pendataan informasi penonton</label>
                                </div>
                            </div>
                            <div class="mt-2 sm:col-span-6">
                                <div class="flex items-center">
                                    <input type="checkbox" class="rounded-md border-gray-300 text-blue-600 focus:ring-blue-500" id="checkbox-1">
                                    <label for="checkbox-1" class="ml-2 text-gray-700 text-sm">Dengan mengisi form ini, anda telah setuju untuk hadir tepat waktu sesuai dengan jadwal yang diberikan</label>
                                </div>
                            </div>
                            <div class="mt-2 sm:col-span-6">
                                <div class="flex items-center justify-start space-x-4">
                                    <button type="submit" class="rounded-md bg-gray-700 text-white px-3 py-2 text-sm font-semibold shadow-sm hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500">Pesan</button>
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
            <p class="font-bold">{{ session('success') }}</p>
            <button type="button" id="closeModalN" class="mt-6 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">Close</button>
        </div>
    </div>

    <script>
        document.getElementById('closeModalN').addEventListener('click', function() {
            document.getElementById('successModal').style.display = 'none';
        });
    </script>
@endif

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

</html>