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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nilaisaya', function(){
    $nama = "Taufik Hidayat";
    $nilai = 40;
    return view ('datanilai.nilaisiswa',compact('nama', 'nilai'));
});

Route::get('/nilaisiswa', function (){
    $nama = 'Taufik Hidayat';
    $nilai = [80,64,30,76,95];
    return view('datanilai.nilaisaya',compact('nama','nilai'));
});
