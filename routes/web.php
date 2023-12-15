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
    $title = 'Hello World !';
    return view('home', compact('title'));
})->name('home');

Route::get('/page_1', function () {
    $title = 'Page 1';
    return view('page_1', compact('title'));
})->name('page_1');

Route::get('/page_2', function () {
    $title = 'Page 2';
    return view('page_2', compact('title'));
})->name('page_2');
