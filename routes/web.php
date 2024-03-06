<?php

use App\Models\datas;
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


Route::get('/Homes', [\App\Http\Controllers\ViewController::class, 'Home']);
Route::get('/Menu', [\App\Http\Controllers\ViewController::class, 'Menu']);
Route::get('/About', [\App\Http\Controllers\ViewController::class, 'About']);
Route::get('/Menu/{$men}', [\App\Http\Controllers\ViewController::class, 'ViewRender']);
//Route::get('/Menus', [\App\Http\Controllers\ViewController::class, 'ViewRender']);
Route::get('/logs', function () {
    return view('authethications.Login',[
        'title' => 'Login'
    ]);
});

Route::get('/register', function () {
    return view('authethications.Register',[
        'title' => 'Register'
    ]);
});

