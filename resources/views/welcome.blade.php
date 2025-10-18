<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            background-color: #ffe6e6;
            background-image: radial-gradient(at 42% 82%, #c5fff8 0%, transparent 60%), radial-gradient(at 77% 13%, #96efff 0%, transparent 50%), radial-gradient(at 81% 27%, #5fbdff 0%, transparent 40%), radial-gradient(at 16% 62%, #7b66ff 0%, transparent 30%);
        }
    </style>
  </head>
  <body class="min-h-screen">

    <div class="relative z-10 text-center flex flex-col items-center justify-center min-h-screen space-y-6"
         x-data="{ show: false }"
         x-init="setTimeout(() => show = true, 200)">

      <!-- Website Title -->
      <div class="bg-white/30 px-4 py-2 rounded-full text-blue-900 text-4xl font-extrabold backdrop-blur-sm shadow-lg"
           x-cloak
           x-show="show"
           x-transition:enter="transition ease-out duration-1000"
           x-transition:enter-start="opacity-0 scale-90"
           x-transition:enter-end="opacity-100 scale-100">
        Book Review
      </div>

      <!-- Short Description -->
      <p class="text-blue-950 text-lg max-w-md bg-white/20 px-4 py-2 rounded-xl backdrop-blur-sm shadow-md"
         x-cloak
         x-show="show"
         x-transition:enter="transition ease-out duration-1000 delay-200"
         x-transition:enter-start="opacity-0 translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0">
        Discover, share, and explore book reviews from readers all around the world. 📚✨
      </p>

      <!-- Buttons -->
      <div class="flex space-x-4"
           x-cloak
           x-show="show"
           x-transition:enter="transition ease-out duration-1000 delay-400"
           x-transition:enter-start="opacity-0 scale-95"
           x-transition:enter-end="opacity-100 scale-100">
        <a href ="{{ route('login') }}" class="flex items-center gap-2 px-6 py-2 rounded-2xl bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-semibold shadow-lg hover:scale-105 transition">
          <span>🔑</span> Login
      </a>
        <a href ="{{ route ('books.index') }}" class="flex items-center gap-2 px-6 py-2 rounded-2xl bg-gradient-to-r from-pink-400 to-red-500 text-white font-semibold shadow-lg hover:scale-105 transition">
          <span>📖</span> Explore Books
      </a>
      </div>

    </div>
  </body>
</html>
