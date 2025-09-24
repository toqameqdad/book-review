<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Explore Books</title>
    <style>
        body {
            background-color: #ffe6e6;
            background-image:  radial-gradient(at 42% 82%, #c5fff8 0%, transparent 60%), radial-gradient(at 77% 13%, #96efff 0%, transparent 50%), radial-gradient(at 81% 27%, #5fbdff 0%, transparent 40%), radial-gradient(at 16% 62%, #7b66ff 0%, transparent 30%);
        }
    </style>
</head>
<body class="min-h-screen text-blue-900">

    <!-- Navbar -->
    <nav class="bg-white/30 backdrop-blur-sm shadow-md">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <x-nav-link href="{{ route ('books.index') }}" :active="request()->routeIs('books.index')" >Books</x-nav-link>
                            <x-nav-link href="{{ route ('reviews.index') }}" :active="request()->routeIs('reviews.index')" >My Reviews</x-nav-link>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <a href="" class="text-white bg-gradient-to-r from-blue-500 to-indigo-600 px-3 py-2 rounded-lg text-sm font-medium shadow-lg hover:scale-105 transition">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="relative bg-white/20 backdrop-blur-sm shadow-inner py-6 mb-6">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight">{{$title }}</h1>
        </div>
    </header>
{{ $slot }}
    </div>
    </body>
</html>