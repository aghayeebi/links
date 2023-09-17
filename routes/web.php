<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubmitController;
use App\Models\Link;
use Illuminate\Http\Request;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    $links = \App\Models\Link::all();
    return view('welcome', ['links' => $links]);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/submit',[SubmitController::class,'input']);

Route::post('/submit', [SubmitController::class, 'submit']);
