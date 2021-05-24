<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $books = DB::table('books')
            ->Join('book_author', 'book_id', '=', 'books.id')
            ->Join('authors', 'authors.id', '=', 'author_id')
            ->select('books.id', 'books.name as name', DB::raw("group_concat(authors.name separator ', ')  as 'author'"), 'year', 'description', 'deleted_at', 'views', 'clicks', 'image')
            ->groupBy('id')
            ->simplePaginate(6);

        return view('admin/admin', ['books' => $books]);
    }

    public function destroy($book_id){
        Book::query()->where('books.id', '=', "$book_id")->delete();
        redirect('/admin');
    }

    public function create(Request $request){

    }

    public function login(Request $request){

    }

    public function logout(){

    }

}
