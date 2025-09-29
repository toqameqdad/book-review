<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->get();
        return view('books.index' , compact('books'));
    }
    public function create()
    {
        return view('books.create');
    }
    public function store(Request $request)
    {
        $book = $request->all();
        // Here you would typically save the book to the database
        $defaultBook = book::create($book);

        return redirect()->route('books.index');
    }
}
