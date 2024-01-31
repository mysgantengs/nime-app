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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/Homes', function () {
    return view('Home', [
        'title' => 'Home',
        'img' => '7296650.jpg',
         'content' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque expedita repellendus, non eos reiciendis voluptatum labore totam consequatur, nemo eius hic corporis! Quod optio ad excepturi, voluptates perspiciatis ab beatae!'
        // 'content' => 'lor'
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