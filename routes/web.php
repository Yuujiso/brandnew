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

Route::get('/index', function () {
    return view('index');
});

Route::get('/reg', function () {
    return view('reg');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/p0', function () {
    return view('p0');
});

Route::get('/p1', function () {
    return view('p1');
});

Route::get('/p2', function () {
    return view('p2');
});

Route::get('/p3', function () {
    return view('p3');
});

Route::get('/p4', function () {
    return view('p4');
});

Route::get('/p5', function () {
    return view('p5');
});

Route::get('/p6', function () {
    return view('p6');
});

Route::get('/p7', function () {
    return view('p7');
});

Route::get('/p8', function () {
    return view('p8');
});

Route::get('/p9', function () {
    return view('p9');
});

Route::get('/p10', function () {
    return view('p10');
});

Route::get('/p11', function () {
    return view('p11');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
