<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
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
    Route::view('micrud.formu', 'micrud.formu')->name('formu');
    // App::setLocale('en');
    Route::view('micrud.home', 'micrud.home', ['nombre' => 'Daniel Maestre'])->name('home');
    // Route::view('/', 'home')->name('home');
    Route::view('micrud.dondeestamos', 'micrud.dondeestamos')->name('dondeestamos');
    Route::view('micrud.quienessomos', 'micrud.quienessomos')->name('quienessomos');
    Route::view('micrud.contacto', 'micrud.contacto')->name('contacto');
    Route::get('micrud.portfolio', [PortfolioController::class, 'index'])->name('portfolio');

    Route::post('micrud.contacto', [ContactoController::class, 'store'])->name('contacto');
});


// Route::apiResource('projects', PortfolioController::class);