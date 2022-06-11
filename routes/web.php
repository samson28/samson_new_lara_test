<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TableController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/profile', [ProfileController::class, 'index'])
                ->middleware('auth')
                ->name('profile');

Route::get('/table', [TableController::class, 'index'])
                ->middleware('auth')
                ->name('table');

Route::post('/update', [ProfileController::class, 'update'])
                ->middleware('auth')
                ->name('update');

Route::post('/update2', [ProfileController::class, 'update2'])
                ->middleware('auth')
                ->name('update2');



require __DIR__.'/auth.php';
