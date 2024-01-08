<?php

use App\Http\Controllers\ComicController;
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

Route::get('/', function () {
    $content = config('bluebar.content');
    return view('home', compact('content'));
})->name('home');

Route::get('/movie', function () {
    $product = config('comics.comic');
    $content = config('bluebar.content');
    return view('pages.movie', compact('product', 'content'));
})->name('movie');

// Route::get('/comics', function () {
//     $product = config('comics.comic');
//     $content = config('bluebar.content');
//     return view('comics.index', compact('product', 'content'));
// })->name('comics.index');

// Route::get('/comics/{id}', function ($id) {
//     $product = config('comics.comic');
//     $content = config('bluebar.content');
//     if ($id >= 0 && $id < count($product)) {
//         $product = $product[$id];
//         return view('comics.show', compact('product', 'content'));
//     } else {
//         abort(404);
//     }
// })->name('comics.show');
Route::resource('comics', ComicController::class);
