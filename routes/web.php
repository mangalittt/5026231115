<?php

use Illuminate\Support\Facades\Route;
//import java.io;


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



//System.out.println("hello world");
Route::get('/', function () {
    return view('welcome');
});


Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('satu', function () {
	return view('pertama');
});

Route::get('layout', function () {
	return view('tugaslayout');
});

Route::get('tugascss', function () {
	return view('tugascss');
});

Route::get('template1', function () {
	return view('template1');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('contactform', function () {
	return view('contactform');
});

Route::get('validasi1', function () {
	return view('validasi1');
});

Route::get('ets', function () {
	return view('index');
});

Route::get('frontend', function () {
	return view('frontend');
});
