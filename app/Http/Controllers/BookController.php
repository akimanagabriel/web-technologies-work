<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::latest()->get();
        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|alpha_dash',
            'author' => 'required|alpha|min:3',
            'publisher' => 'required|min:3',
            'published_at' => 'required|date',
        ]);

        Book::create([
            'name' => $request->name,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'published_at' => $request->published_at,
        ]);

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required|min:3|alpha_dash',
            'author' => 'required|alpha|min:3',
            'publisher' => 'required|min:3',
            'published_at' => 'required|date',
        ]);

        $book->name = $request->name;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->published_at = $request->published_at;
        $book->save();

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}
