<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/submit', function () {
    return view('submit');
});

Route::post('/submit', function (Request $request) {


    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255'
    ]);

    $link = new Link();
    $link->title = $data['title'];
    $link->url = $data['url'];
    $link->description  = $data['description'];
    $link->save();

    return redirect('/');
});
