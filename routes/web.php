<?php

use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Route::get('/coba', function () {
    return view('coba');
})->name('coba');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/style', function () {
    return view('style');
})->name('style');

Route::get('/recommen', function () {
    return view('recommen');
})->name('recommen');

Route::get('/resrecommen', function () {
    return view('resrecommen');
})->name('resrecommen');

Route::get('/upload', function () {
    return view('upload');
})->name('upload');

Auth::routes();

Route::get('/wardrobe', function () {
    return view('wardrobe');
})->name('wardrobe');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
