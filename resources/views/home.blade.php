<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Harmoni Kata</title>

  {{-- Icon --}}
  <link rel="icon" href="{{ asset('assets/img/samudra.jpg') }}">

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  {{-- Style --}}
  <style>
    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .fade-in {
        animation: fadeIn 1.5s ease-out forwards;
    }
  </style>
</head>
<body class="bg-gray-900 text-white flex items-center justify-center min-h-screen">
  <div class="text-center fade-in">
      <!-- Poster Image -->
      <img src="{{ asset('assets/img/poster.jpg') }}" alt="Poster" class="mx-auto rounded-lg shadow-lg transition-transform h-72 duration-500 hover:scale-105">

      <!-- Explanation -->
      <div class="mt-6 sm:m-3">
          <p class="text-xl font-semibold">Pertunjukan Harmoni Kata : Alih Wahana Sastra Melayu Klasik ke Laman Kreativitas Musik</p>
          <p class="mt-2 text-gray-400">Laman pendaftaran telah dibuka! Segera amankan kursi anda tanpa dipungut biaya</p>
      </div>

      <!-- Coming Soon Text -->
      <div class="mt-8">
        <a href="{{ route('registrasi.index') }}" 
   class="relative inline-block px-6 py-2 text-md font-semibold text-white bg-gradient-to-r from-indigo-500 to-purple-700 rounded-lg shadow-lg transition-all duration-300 hover:from-purple-700 hover:to-indigo-500 hover:shadow-2xl hover:scale-105 focus:outline-none focus:ring-4 focus:ring-indigo-500 focus:ring-opacity-50">
    <span class="absolute inset-0 w-full h-full bg-white opacity-0 rounded-lg transition-opacity duration-300 hover:opacity-10"></span>
    <span class="relative z-10">Pesan Tiket</span>
</a>

     
      </div>
  </div>
</body>
</body>
</html>