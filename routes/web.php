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
        'title' => 'Home',
        // 'content' => 'lor'
    ]);
});

Route::get('/Menu', function () {

    $conten = [
        'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat blanditiis autem harum vel dolores tempora ea dolorum voluptates? Illo expedita perferendis odit ducimus sequi cupiditate quibusdam iste culpa tempore, numquam quaerat iusto vitae, laudantium voluptatum ea soluta eos delectus ad voluptates nam. Autem aliquid sequi perspiciatis cumque facilis incidunt eveniet? Officia expedita ratione quasi quidem eum non numquam perspiciatis ad error? Quae voluptate distinctio et veniam nostrum explicabo ea inventore! Odio, molestias voluptates! Est quas ducimus rerum, odio harum voluptatem reprehenderit praesentium temporibus eius nisi, nam, quae non quia doloribus'
    ];

    return view('Menu', [
        'title' => 'Menu',
        'content' => $conten

    ]);
});

Route::get('/About', function () {
    return view('About', [
        'title' => 'About'
    ]);
});