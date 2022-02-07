<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\MusicoController;
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
    Route::view('inicio', 'micrud.home')->name('home');
    // Route::view('/', 'home')->name('home');

    Route::resource('proyectos', ProjectController::class)
    ->names('projects')
    ->parameters(['proyectos' => 'project']);

    Route::resource('musicos', MusicoController::class)
    ->names('musicos')
    ->parameters(['musicos' => 'musico']);
});
