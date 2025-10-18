<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-zinc-950 min-h-screen flex items-center justify-center">
    <div class="mx-auto max-w-md min-w-[490px] px-4 py-6 sm:px-6 lg:px-8">
        <div class="bg-neutral-800/30 p-8 rounded-md shadow-lg shadow-black/50">
           {{ $slot }}
        </div>
    </div>
</body>
</html>