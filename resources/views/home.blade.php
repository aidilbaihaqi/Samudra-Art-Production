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
          <p class="mt-2 text-gray-400">Laman pendaftaran akan segera dibuka! Update terus info dari kami melalui instagram <a href="https://www.instagram.com/samudraartproduction/" class="underline underline-offset-8">@samudraartproduction</a></p>
      </div>

      <!-- Coming Soon Text -->
      <div class="mt-8">
          <span class="bg-gradient-to-r from-green-400 via-blue-500 to-purple-600 text-transparent bg-clip-text text-4xl font-bold animate-pulse">Coming Soon</span>
      </div>
  </div>
</body>
</body>
</html>