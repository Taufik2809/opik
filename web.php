<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/home', function () {
//     return ('Halaman Home');
// });

// Route::get('/about', function () {
//     return ('Halaman About');
// });

// Route::get('/blog', function () {
//     return ('Halaman Blog');
// });

// Route::get('/opik', function (){
//     return ('mentang mentang dimaafin bukannya berubah malah lanjut part 2');
// });

route::get('/belajar', function (){
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

// route::get('/siswa/smkbpi/rpl', function (){
//     echo '<h2 style="text-align: center"><u>Welcome to 11 RPL</u></h2>';
// });

// route::get('/siswa/{taufik}', function ($taufik) {
//     return "Tampilkan data siswa bernama $taufik";
// });

// route::get('/stok_barang/{hp}/{iphone}', function ($hp,$iphone) {
//     return "Cek sisa stok untuk $hp $iphone";
// });

// route::get('/profile', function (){
//     return view('profile');
// });

route::get('/profile', function (){
    return view('profile');
});

