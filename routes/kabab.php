<?php

use Illuminate\Support\Facades\Route;

// Add controller
use App\Http\Controllers\KababController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
  In Laravel 8+, they've changed the way how you get to the Controllers from the Routes. Here is the correct syntax: 

*/

Route::get('/harshuj', [KababController::class, 'harshuj']->name('kabab.harshuj'));

// kabab routes
Route::get('/kababs', [KababController::class, 'index'])->name('kabab.index')->middleware('auth');
Route::get('/kabab/create', [KababController::class, 'create'])->name('kabab.create');
Route::get('/kabab/{id}', [KababController::class, 'show'])->name('kabab.show')->middleware('auth');
Route::post('/kabab', [KababController::class, 'store'])->name('kabab.store');
Route::delete('/kabab/{id}', [KababController::class, 'destroy'])->name('kabab.destroy')->middleware('auth');