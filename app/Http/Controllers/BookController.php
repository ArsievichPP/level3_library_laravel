<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{

    public function index()
    {
        $books = DB::table('books')
            ->Join('book_author', 'book_id', '=', 'books.id')
            ->Join('authors', 'authors.id', '=', 'author_id')
            ->select('books.id', 'books.name as name', DB::raw("group_concat(authors.name separator ', ')  as 'author'"), 'year', 'description', 'deleted_at', 'views', 'clicks', 'image')
            ->groupBy('id')
            ->paginate(12);

        return view('main/books', ['books' => $books]);
    }

    public function show($book_id)
    {
        DB::table('books')->where('books.id', '=', $book_id)->increment('views');

        $book = DB::table('books')
            ->where('books.id', '=', $book_id)
            ->leftJoin('book_author', 'book_id', '=', 'books.id')
            ->leftJoin('authors', 'authors.id', '=', 'author_id')
            ->select('books.id as id', 'books.name as name', DB::raw("group_concat(authors.name separator ', ')  as 'author'"), 'year', 'description', 'deleted_at', 'views', 'clicks', 'image')
            ->groupBy('id')
            ->get();
        return view('main/book', ['book' => $book[0]]);
    }

    public function update($book_id)
    {
        DB::table('books')->where('books.id', '=', $book_id)->increment('clicks');
    }

    public function search(Request $request){
        $searchQuery = $request->search;
        $books = DB::table('books')
            ->where('books.name', 'like', "%$searchQuery%")
            ->leftJoin('book_author', 'book_id', '=', 'books.id')
            ->leftJoin('authors', 'authors.id', '=', 'author_id')
            ->select('books.id as id', 'books.name as name', DB::raw("group_concat(authors.name separator ', ')  as 'author'"), 'year', 'description', 'deleted_at', 'views', 'clicks', 'image')
            ->groupBy('id')
            ->get();
//        if($books->isEmpty())
//            $books = null;

//        $books = Book::query()
//            ->select('books.id as id', 'books.name as name', DB::raw("group_concat(authors.name separator ', ')  as 'author'"), 'year', 'description', 'deleted_at', 'views', 'clicks', 'image')
//            ->leftJoin('book_author', 'book_id', '=', 'books.id')
//            ->leftJoin('authors', 'authors.id', '=', 'author_id')
//            ->where('books.name', 'like', "%$searchQuery%")
//            ->groupBy('id')
//            ->get();

        return view('main/search', ['books' => $books]);
    }
}
