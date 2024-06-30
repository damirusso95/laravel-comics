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


// rotta / risponde con vista home
Route::get('/', function () {
    return view('home');
});

// rotta /home risponde con vista home
Route::get('/home', function () {

// array associativo
    // $data = [
    //      "msg0" => "sto",
    //      "msg1" => "eseguendo",
    //      "msg2" => "un test"


    // ];
    $data = config("store");

    return view('home', $data);
});
