<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\hspcontroller; 

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

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/software', function () {
    return view('software');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/services', function () {
    return view('services');
});


Route::get('hsp/create', [hspcontroller::class, 'create'])->name('hsp.create'); 

Route::post('hsp/guardar', [hspcontroller::class, 'store'])->name('hsp.store'); 
Route::get('hsp/lista', [hspcontroller::class, 'index'])->name('hsp.index'); 