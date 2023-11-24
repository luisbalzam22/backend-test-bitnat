<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class BookController extends Controller
{
    /**
     * Display a listing of books.
     */
    public function getBooks(Request $request)
    {
        return QueryBuilder::for(Book::class)->allowedSorts('title', 'author','release_year', 'genre')->get();
    }

    /**
     * Store a newly created book in storage.
     */
    public function addBook(Request $request)
    {
        $this->authorize('addBook', Book::class);

        $request->validate([
            'title' => 'required|string|max:100',
            'release_year' => 'required|digits:4|integer|min:1900|max:',
            'genre' => 'required|string|max:50',
            'author' => 'required|string|min:2',
            'cover_image_url' => 'required|url',
            'description' => 'required|string|max:300'
        ]);

        return Book::create($request->all());
    }

    /**
     * Display the specified book.
     */
    public function getBook(Request $request)
    {
        $this->authorize('getBook', Book::class);

        $book = Book::findOrFail($request->route()->parameter('id'));
        $book->users()->attach([$request->user()->id]);
        return $book;
    }
}
