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
    return view('welcome');
});

Route::get('/Homes', function () {
    return view('Home', [
        'title' => 'Home'
    ]);
});

Route::get('/Menu', function () {
    return view('Menu', [
        'title' => 'Menu'
    ]);
});

Route::get('/About', function () {
    return view('About', [
        'title' => 'About'
    ]);
});