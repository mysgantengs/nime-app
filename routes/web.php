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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/Homes', function () {
    return view('Home', [
        'title' => 'Home',
       
        // 'content' => 'lor'
    ]);
});



Route::get('/Menu', function () {

    return view('Menu', [
        'title' => 'Menu',
        "MenuLists" => datas::alls()
    ]);
});

// Route::redirect('/', 'URI', 301);

Route::get('/About', function () {
    return view('About', [
        'title' => 'About',
        'titleII' => 'Y4KUZ4 STR4WS',
        'img' => '7296650.jpg',
        'content' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque expedita repellendus, non eos reiciendis voluptatum labore totam consequatur, nemo eius hic corporis! Quod optio ad excepturi, voluptates perspiciatis ab beatae!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptatibus repellat illum hic, dolor enim magnam neque consectetur delectus veniam totam esse nihil impedit quos perferendis quibusdam sapiente, laboriosam iure?'
    ]);
});

Route::get('/viewrenders/{$slugs}', function ($slugs) {
    
});

// Route::get('/CrazyGirls', function () {
//     return view('core_descriptions.CrazyGrils');    
// });

// Route::get('/CrazyGirls', function () {
//     return view('core_descriptions.Endixy');    
// });

// Route::get('/CrazyGirls', function () {
//     return view('core_descriptions.gambar1');    
// });

// Route::get('/CrazyGirls', function () {
//     return view('core_descriptions.gambar2');    
// });

// Route::get('/CrazyGirls', function () {
//     return view('core_descriptions.Spiderman');    
// });

// Route::get('/CrazyGirls', function () {
//     return view('core_descriptions.Shadowshot');    
// });