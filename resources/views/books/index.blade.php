<x-layout :title="'Books'">

    <!-- Main Content -->
    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        @if(session('success'))
        <div>
            <p class="bg-green-500/20 border border-green-400/30 text-green-900 px-3 py-1 rounded-md backdrop-blur-sm"> {{ session('success') }}</p>
        </div>
        @elseif(session('update'))
        <div>
            <p class="bg-blue-500/20 border border-blue-400/30 text-blue-900 px-3 py-1 rounded-md backdrop-blur-sm"> {{ session('update') }}</p>
        </div>
        @elseif(session('delete'))
        <div>
            <p class="bg-red-500/20 border border-red-400/30 text-red-900 px-3 py-1 rounded-md backdrop-blur-sm"> {{ session('delete') }}</p>   
        @endif

        @auth
        @if(auth()->user()->role === 'admin'|| auth()->user()->role === 'writer')
        <div class="flex justify-end mb-4">
            <a href="{{ route('books.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md shadow-md hover:bg-indigo-500">Add New Book</a>
        </div>
        @endif
        @endauth

        @forelse($books as $book)
        <div class="grid grid-cols-7 gap-4 bg-white/40 backdrop-blur-sm p-6 rounded-xl shadow-md mb-4">
            <div class="col-span-5">
                <a href="{{ route('books.show', $book->id) }}" class="text-2xl font-bold tracking-tight">{{$book->title}}</a>
                <p class="text-lg font-medium">Author: {{$book->user->name }}</p>
            </div>
            <div class="inline-flex items-center space-x-4 justify-self-end col-span-2">
                @auth()
                @if(auth()->user()->role === 'admin'|| auth()->id() == $book->user->id)
                      <a href="{{ route ('books.edit', $book->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                @endif
                @if(auth()->user()->role === 'admin')
                      <form action="{{ route('books.destroy', $book->id) }}" method="POST"  class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                </form>
                @endif  
                @endauth
            </div>
        </div>
        @empty
        <p class="text-center text-gray-500">No books available.</p>
        @endforelse
        <div class="mt-6">
            {{ $books->links() }}
        </div>
    </main>
</x-layout>

</body>
</html>
