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
    $database = config('comics');
    return view('home')->with('comics',$database);
})->name('home');

Route::get('/single/{id}', function ($id) {
    $comics = config('comics');
    $dateTime = date_create($comics[$id]['sale_date']);
    $date = date_format($dateTime, "M d Y");
    return view('single')->with('comic',$comics[$id])->with('date',$date);
})->name('details');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');
