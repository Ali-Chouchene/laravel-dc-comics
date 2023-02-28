<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $links = config('navbar');
    $f_card = config('cards');
    $socials = config('socials');

    $data = ['cards' => $f_card, 'links' => $links, 'socials' => $socials];

    return view('home', $data);
})->name('home');



Route::get('/characters', function () {
    $links = config('navbar');
    $f_card = config('cards');
    $socials = config('socials');

    $data = ['cards' => $f_card, 'links' => $links, 'socials' => $socials];
    return view('characters', $data);
})->name('characters');



Route::get('/movies', function () {
    $links = config('navbar');
    $f_card = config('cards');
    $socials = config('socials');

    $data = ['cards' => $f_card, 'links' => $links, 'socials' => $socials];
    return view('movies', $data);
})->name('movies');



Route::get('/comics', function () {
    $links = config('navbar');
    $f_card = config('cards');
    $socials = config('socials');
    $comics = config('comics');

    $data = ['cards' => $f_card, 'links' => $links, 'socials' => $socials, 'comics' => $comics];
    return view('comics', $data);
})->name('comics');



Route::get('/tv', function () {
    $links = config('navbar');
    $f_card = config('cards');
    $socials = config('socials');

    $data = ['cards' => $f_card, 'links' => $links, 'socials' => $socials];
    return view('tv', $data);
})->name('tv');



Route::get('/games', function () {
    $links = config('navbar');
    $f_card = config('cards');
    $socials = config('socials');

    $data = ['cards' => $f_card, 'links' => $links, 'socials' => $socials];
    return view('games', $data);
})->name('games');



Route::get('/collectibles', function () {
    $links = config('navbar');
    $f_card = config('cards');
    $socials = config('socials');

    $data = ['cards' => $f_card, 'links' => $links, 'socials' => $socials];
    return view('collectibles', $data);
})->name('collectibles');



Route::get('/videos', function () {
    $links = config('navbar');
    $f_card = config('cards');
    $socials = config('socials');

    $data = ['cards' => $f_card, 'links' => $links, 'socials' => $socials];
    return view('videos', $data);
})->name('videos');



Route::get('/fans', function () {
    $links = config('navbar');
    $f_card = config('cards');
    $socials = config('socials');

    $data = ['cards' => $f_card, 'links' => $links, 'socials' => $socials];
    return view('fans', $data);
})->name('fans');



Route::get('/news', function () {
    $links = config('navbar');
    $f_card = config('cards');
    $socials = config('socials');

    $data = ['cards' => $f_card, 'links' => $links, 'socials' => $socials];
    return view('news', $data);
})->name('news');



Route::get('/shop', function () {
    $links = config('navbar');
    $f_card = config('cards');
    $socials = config('socials');

    $data = ['cards' => $f_card, 'links' => $links, 'socials' => $socials];
    return view('shop', $data);
})->name('shop');
