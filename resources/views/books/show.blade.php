<x-layout :title="$book->title">
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-white/40 backdrop-blur-sm p-8 rounded-2xl gap-4 mb-4 shadow-lg">
                <h3 class="text-gray-900 text-lg">Description:</h3>
                <h3 class="text-gray-800 text-sm">{{ $book->description }}</h3>
                <div class="mt-1">
                    <p class="text-gray-600 text-sm">{{ $book->user->name . ' - ' . $book->created_at->format('M d, Y') }}</p>
                </div>

                <div class="mt-4">
                    @if (session('create'))
                        <div>
                            <p class="text-green-600 font-semibold border-2 border-green-400 px-3 py-1 rounded-md bg-green-100">
                                {{ session('create') }}
                            </p>
                        </div>
                    @elseif (session('delete'))
                        <div>
                            <p class="text-red-600 font-semibold border-2 border-red-400 px-3 py-1 rounded-md bg-red-100">
                                {{ session('delete') }}
                            </p>
                        </div>
                    @endif
                </div>

                {{-- add review --}}
                @auth()
                <div class="mt-8 bg-white/30 backdrop-blur-sm p-4 rounded-md shadow-md">
                    <h3 class="text-gray-900 text-lg mb-2">Add a Review</h3>
                    <form action="{{ route('reviews.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                        <label for="content" class="text-gray-900 text-sm mb-1 block">Your Review:</label>
                        <input type="text" name="content" id="content"
                            class="{{ $errors->has('content') ? 'outline-red-600' : 'outline-gray-300' }} block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-indigo-600 sm:text-sm/6">
                        @error('content')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <div class="flex justify-end mt-4">
                            <button type="submit"
                                class="bg-indigo-600 text-white px-3 py-1.5 rounded-md hover:bg-indigo-500 text-sm">Add</button>
                        </div>
                    </form>
                </div>
                @endauth

                {{-- display reviews --}}

                @forelse ($book->reviews as $reviews)
                    <div class="mt-8 bg-white/30 backdrop-blur-sm p-4 rounded-md shadow-md grid grid-cols-6 gap-4 items-center">
                        <div class="col-span-5">
                        <h3 class="text-gray-900">{{ $reviews->content }}</h3>
                        <p class="text-gray-600 text-sm">{{ $reviews->user->name }}</p>
                        </div>
                        @auth 
                        @if(auth()->user()->role == 'admin')
                        <div class="col-span-1 text-right">
                        <form action="{{ route('reviews.destroy', $reviews->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this review?');">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                            <input type="submit" class="text-red-600" value="Delete">
                        </form>
                    </div>
                    @endif
                    @endauth
                    </div>
                @empty
                    <div class="mt-8 bg-white/30 backdrop-blur-sm p-4 rounded-md shadow-md">
                        <h3 class="text-gray-900">No reviews yet!</h3>
                    </div>
                @endforelse
            </div>
        </div>
    </main>
</x-layout>
