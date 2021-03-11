<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;


class BookController extends Controller
{
    public function create(Request $request)
    {
        $book = new Book;
        $book->name = 'atoman somrajjo';
        $book->price = 40;

        $book->save();

        $author = Author::find([3, 4]);
        $book->authors()->attach($author);

        return 'Success';
    }

    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }
}
