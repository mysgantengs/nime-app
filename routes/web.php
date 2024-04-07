<?php

use App\Http\Controllers\MemberDataController;
use App\Http\Controllers\RegisterControlller;
use App\Http\Middleware\MemberMiddleware;
use App\Models\datas;
use Illuminate\Routing\RouteGroup;
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
Route::get('/Menu', [\App\Http\Controllers\ViewController::class, 'Menu'])->middleware('auth');
Route::get('/About', [\App\Http\Controllers\ViewController::class, 'About']);
Route::get('/Menus/{men:cardtitle}', [\App\Http\Controllers\ViewController::class, 'ViewRender']);
Route::get('/dashbord', [\App\Http\Controllers\DashboardController::class, 'viewDashboard'])->middleware('auth');
//Route::get('/Menus', [\App\Http\Controllers\ViewController::class, 'ViewRender']);
Route::controller(\App\Http\Controllers\RegisterControlller::class)->group(function () {
    Route::get('/register', 'ViewRegister')->middleware('guest');
    Route::post('/register', 'Registers');
});
Route::controller(\App\Http\Controllers\LoginControlller::class)->group(function () {
    Route::get('/login', 'ViewLogin')->name('login')->middleware('guest');
    Route::post('/login', 'Logins');
    Route::post('/logout', 'Logout')->middleware('auth');
});

Route::resource('/dashboard/memberdata', \App\Http\Controllers\MemberDataController::class);
