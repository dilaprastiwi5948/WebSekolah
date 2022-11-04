<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;

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

Route::get('/home', [SekolahController::class, 'index']);
Route::get('/extra', [SekolahController::class, 'extra']);
Route::get('/contact', [SekolahController::class, 'contact']);
Route::get('/profile', [SekolahController::class, 'profile']);
Route::get('/galeri', [SekolahController::class, 'galeri']);

