<?php

use App\Http\Controllers\RegisterControlller;
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
Route::get('/Menus', [\App\Http\Controllers\ViewController::class, 'ViewRender']);
//Route::get('/Menus', [\App\Http\Controllers\ViewController::class, 'ViewRender']);
Route::get('/register', [\App\Http\Controllers\RegisterControlller::class, 'ViewRegister']);
Route::post('/register', [\App\Http\Controllers\RegisterControlller::class, 'Registers']);
Route::get('/login', [\App\Http\Controllers\LoginControlller::class, 'ViewLogin']);
Route::post('/login', [\App\Http\Controllers\LoginControlller::class, 'Logins']);
