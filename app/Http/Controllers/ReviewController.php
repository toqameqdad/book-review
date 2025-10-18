<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Reviews::where('user_id', auth()->id())->latest()->paginate(5);
        return view('reviews.index', compact('reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|MAX:300'
        ]);

        \App\Models\Reviews::create([
            'content' => $request->content,
            'user_id' => auth()->id(),
            'book_id' => $request->book_id
        ]);

        return redirect()->route('books.show', $request->book_id)->with('success', 'Review added successfully!');
    }

    public function destroy(Request $request, $id)
    {
        $review = Reviews::findOrFail($id);
        $review->delete();
        return redirect()->route('books.show', $request['book_id'])->with('delete', 'Review deleted successfully.');
    }
    

    
}
