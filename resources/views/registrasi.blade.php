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
                                    <a href="#" id="openModalLink" class="rounded-md bg-gray-700 text-white px-3 py-2 text-sm font-semibold shadow-sm hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500">Pilih Kursi</a>
                                </div>
                            </div>
                            <div class="mt-2 sm:col-span-6">
                                <div class="flex items-center">
                                    <input type="checkbox" class="rounded-md border-gray-300 text-blue-600 focus:ring-blue-500" id="checkbox-1">
                                    <label for="checkbox-1" class="ml-2 text-gray-700 text-sm">Dengan mengisi form ini, anda telah setuju untuk memberikan data anda kepada kami sekaligus sebagai pendataan jumlah penonton</label>
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
                                    <button type="submit" class="rounded-md bg-gray-700 text-white px-3 py-2 text-sm font-semibold shadow-sm hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-500">Daftar</button>
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
            <button id="closeModal" class="mt-6 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">Close</button>
        </div>
    </div>

    <script>
        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('successModal').style.display = 'none';
        });
    </script>
@endif

<!-- Modal Background (Initially Hidden) -->
<div id="seatModal" class="fixed inset-0 bg-gray-600 bg-opacity-75 flex justify-center items-center hidden">
  <!-- Modal Content -->
  <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-5xl md:w-3/4 lg:w-2/3 xl:w-1/2">
    <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Pilih Kursi Teater</h2>
    
    <!-- Seat Layout -->
    <div class="grid grid-cols-8 sm:grid-cols-10 md:grid-cols-12 lg:grid-cols-16 gap-2 justify-center mb-4">
      <!-- Repeat seats for each row and add specific classes for seat status -->
      <!-- A1-A8 -->
      <button class="w-8 h-8 bg-yellow-500 hover:bg-green-400 rounded">A1</button>
      <button class="w-8 h-8 bg-yellow-500 hover:bg-green-400 rounded">A2</button>
      <button class="w-8 h-8 bg-yellow-500 hover:bg-green-400 rounded">A3</button>
      <button class="w-8 h-8 bg-yellow-500 hover:bg-green-400 rounded">A4</button>
      <button class="w-8 h-8 bg-yellow-500 hover:bg-green-400 rounded">A5</button>
      <button class="w-8 h-8 bg-yellow-500 hover:bg-green-400 rounded">A6</button>
      <button class="w-8 h-8 bg-yellow-500 hover:bg-green-400 rounded">A7</button>
      <button class="w-8 h-8 bg-yellow-500 hover:bg-green-400 rounded">A8</button>
      <!-- Continue A row -->
      <!-- Repeat this logic for other rows -->
    </div>
    
    <div class="grid grid-cols-8 sm:grid-cols-10 md:grid-cols-12 lg:grid-cols-16 gap-2 justify-center mb-4">
        <button class="w-8 h-8 bg-yellow-500 hover:bg-green-400 rounded">A9</button>
        <button class="w-8 h-8 bg-yellow-500 hover:bg-green-400 rounded">A10</button>
        <button class="w-8 h-8 bg-yellow-500 hover:bg-green-400 rounded">A11</button>
        <button class="w-8 h-8 bg-yellow-500 hover:bg-green-400 rounded">A12</button>
        <button class="w-8 h-8 bg-yellow-500 hover:bg-green-400 rounded">A13</button>
        <button class="w-8 h-8 bg-yellow-500 hover:bg-green-400 rounded">A14</button>
        <button class="w-8 h-8 bg-yellow-500 hover:bg-green-400 rounded">A15</button>
        <button class="w-8 h-8 bg-yellow-500 hover:bg-green-400 rounded">A16</button>
    </div>

    <!-- Example: G row has selected seats (red) -->
    <div class="grid grid-cols-8 sm:grid-cols-10 md:grid-cols-12 lg:grid-cols-16 gap-2 justify-center mb-4">
      <!-- G1-G8 (Red selected seats) -->
      <button class="w-8 h-8 bg-red-500 rounded"></button>
      <button class="w-8 h-8 bg-red-500 rounded"></button>
      <button class="w-8 h-8 bg-red-500 rounded"></button>
      <!-- Continue to complete G row as per image -->
    </div>

    <!-- More rows (J, K, L, M, N) follow similar structure -->
    
    <!-- Close Button -->
    <div class="mt-4 text-right">
      <button id="closeModalBtn" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-400">Tutup</button>
    </div>
  </div>
</div>

<script>
  const openModalLink = document.getElementById('openModalLink');
  const closeModalBtn = document.getElementById('closeModalBtn');
  const seatModal = document.getElementById('seatModal');

  // Function to open modal
  openModalLink.addEventListener('click', function(event) {
    event.preventDefault();
    seatModal.classList.remove('hidden');
  });

  // Function to close modal
  closeModalBtn.addEventListener('click', function() {
    seatModal.classList.add('hidden');
  });

  // Seat selection logic
  const seats = document.querySelectorAll('button:not(#closeModalBtn)');
  
  seats.forEach(seat => {
    seat.addEventListener('click', function() {
      // Toggle between selected and available
      if (this.classList.contains('bg-yellow-500')) {
        this.classList.remove('bg-yellow-500');
        this.classList.add('bg-red-500');
      } else if (this.classList.contains('bg-red-500')) {
        this.classList.remove('bg-red-500');
        this.classList.add('bg-yellow-500');
      }
    });
  });
</script>
</html>