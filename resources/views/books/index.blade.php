<x-layout :title="'Books'">

    <!-- Main Content -->
    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex justify-end mb-4">
        <a href="{{ route ('books.create') }}" class="text-white bg-gradient-to-r from-pink-400 to-red-500 px-4 py-2 rounded-lg shadow-lg hover:scale-105 transition">Create</a>
    </div>
    @forelse($books as $book)
    <div class="grid grid-cols-7 gap-4 bg-white/40 backdrop-blur-sm p-6 rounded-xl shadow-md">
        <div class="col-span-5">
            <h1 class="text-2xl font-bold tracking-tight">{{$book->title}}</h1>
            <p class="text-lg font-medium">Author: {{$book->author}}</p>
        </div>
        <div class="inline-flex items-center space-x-4 justify-self-end col-span-2">
            <a href="#" class="text-blue-500 hover:underline">Edit</a>
            <a href="#" class="text-red-500 hover:underline">Delete</a>
        </div>
    </div>
    @empty
    <p class="text-center text-gray-500">No books available.</p>
    @endforelse
</main>
</x-layout>


</body>
</html>
