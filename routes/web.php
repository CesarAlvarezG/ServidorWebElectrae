<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\hspcontroller; 
use App\Http\Controllers\Auth\logincontroller; 

use App\Exceptions\Handler; 
use Illuminate\Http\Exception\HttpResponseException;
use Illuminate\Validation\ValidationException;


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



Route::group(['middleware' => 'auth'], function() {   //rutas protegidas por login


    Route::get('hsp/create', [hspcontroller::class, 'create'])->name('hsp.create'); 
    Route::post('hsp/guardar', [hspcontroller::class, 'store'])->name('hsp.store'); 
    Route::get('hsp/lista', [hspcontroller::class, 'index'])->name('hsp.index'); 
    Route::get('hsp/{mediciones}/editar', [hspcontroller::class, 'edit'])->name('hsp.edit'); 
    Route::put('hsp/{mediciones}/actualizar', [hspcontroller::class, 'update'])->name('hsp.update'); 
    Route::get('hsp/{mediciones}/ver', [hspcontroller::class, 'show'])->name('hsp.show'); 
    Route::delete('hsp/{mediciones}/eliminar', [hspcontroller::class, 'destroy'])->name('hsp.destroy'); 

});







//login
Route:: view('login','login') -> name('login')-> middleware('guest');


Route:: post('login', [logincontroller::class, 'login'] );
Route:: post('logout', [logincontroller::class, 'logout'] );

//Route:: view('logout','logout');