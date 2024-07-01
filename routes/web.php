<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Qui puoi registrare le rotte web per la tua applicazione. Queste
| rotte vengono caricate dal RouteServiceProvider e tutte saranno
| assegnate al gruppo "web" middleware. Fai qualcosa di fantastico!
|
*/

// rotta / risponde con vista home
Route::get('/', function () {
    return view('home');
})->name("home");

// rotta /home risponde con vista home
Route::get('/home', function () {
    return view('home');
});

// rotta /about risponde con vista about
Route::get('/about', function () {
    $data = config("store");
    return view('about', ['comics' => $data]);
})->name("about");

// rotta /comics risponde con vista comics
Route::get('/comics', function () {
    $data = config("store");
    return view('comics', ['comics' => $data]);
})->name("comics");
