<x-layout :title="'My Reviews'">


    <!-- Main Content -->
    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
       @forelse($reviews as $review)
    <div class="grid grid-cols-7 gap-4 bg-white/40 backdrop-blur-sm p-6 rounded-xl shadow-md">
        <div class="col-span-5">
            <h1 class="text-2xl font-bold tracking-tight">{{ $review->content }}</h1>
            <a href="{{ route('books.show', $review->book->id) }}" class="text-lg font-medium">{{$review->book->title }}</a>
        </div>
        @empty
        <h1 class="text-2xl font-bold tracking-tight">No reviews available.</h1>
        @endforelse
        <div class="mt-4">
            {{ $reviews->links() }}
    </div>
    

    </main>
    </x-layout>


</body>
</html>
