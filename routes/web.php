<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [BookController::class, 'index']);
//
//Route::get('/books', [BookController::class, 'index']);

Route::post('/search', [BookController::class, 'search']);
//
//Route::get('/books/{book_id}', [BookController::class, 'show'])
//    ->whereNumber('book_id');
//
//Route::patch('books/{book_id}', [BookController::class, 'update'])
//    ->whereNumber('book_id');

Route::resource('books',BookController::class);

Route::get('/admin', [AdminController::class, 'index']);

Route::delete('/admin/{book_id}', [AdminController::class, 'destroy'])
    ->whereNumber('book_id');

Route::post('/admin/create', [AdminController::class, 'create']);

Route::post('/admin/login', [AdminController::class, 'login']);

Route::get('/admin/logout', [AdminController::class, 'logout']);
