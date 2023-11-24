<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of books.
     */
    public function getBooks()
    {
        return Book::all();
    }

    /**
     * Store a newly created book in storage.
     */
    public function addBook(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'release_date' => 'required'
        ]);
        $this->authorize('addBook',Book::class);
        return Book::create($request->all());
    }

    /**
     * Display the specified book.
     */
    public function getBook(string $id)
    {
        return Book::findOrFail($id);
    }
}
