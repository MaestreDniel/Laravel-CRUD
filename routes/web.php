<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\App;

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

    Route::view('profile', 'profile')->name('profile');
    Route::view('formu', 'micrud.formu')->name('formu');
    // App::setLocale('en');
    Route::view('inicio', 'micrud.home', ['nombre' => 'Daniel Maestre'])->name('home');
    // Route::view('/', 'home')->name('home');

    Route::view('dondeestamos', 'micrud.dondeestamos')->name('dondeestamos');
    Route::view('quienessomos', 'micrud.quienessomos')->name('quienessomos');
    Route::view('contacto', 'micrud.contacto')->name('contacto');
    Route::post('contacto', [ContactoController::class, 'store'])->name('contacto.store');

    Route::resource('proyectos', ProjectController::class)
    ->names('projects')
    ->parameters(['proyectos' => 'project']);
});
