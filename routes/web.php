<?php

use App\Http\Controllers\MusicoController;
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

require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    /* Todas estas rutas están dentro del group de middleware auth para que solo sean accesibles 
    si el usuario está logueado */

    Route::view('formu', 'micrud.formu')->name('formu');
    Route::view('inicio', 'micrud.home')->name('home');

    Route::resource('musicos', MusicoController::class)
        ->names('musicos')
        ->parameters(['musicos' => 'musico']);

    Route::fallback(function() {
        return view('/micrud.home');
    });
});
