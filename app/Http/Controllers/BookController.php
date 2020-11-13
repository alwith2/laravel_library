<?php


namespace App\Http\Controllers;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     //crud
    public function  index()
    {
        //show json of books
        $books = Book::all();
        return $books->toArray();
    }

    public function create()
    {
        //show a view

        Book::factory()->create();
    }

    public function read()
    {
        //see single book
        $book = Book::find(1);
    }

   
    
}