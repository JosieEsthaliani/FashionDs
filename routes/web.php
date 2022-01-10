<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;

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

Route::get('/resbeach', function () {
    return view('resbeach');
})->name('resbeach');

Route::get('/ressport', function () {
    return view('ressport');
})->name('ressport');

Route::get('/rescasual', function () {
    return view('rescasual');
})->name('rescasual');

Route::get('/resformal', function () {
    return view('resformal');
})->name('resformal');



Route::get('image-upload-preview', [ImageUploadController::class, 'index']);
Route::post('upload-image', [ImageUploadController::class, 'store']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');