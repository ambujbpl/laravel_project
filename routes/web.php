<?php

use Illuminate\Support\Facades\Route;

// Add controller
use App\Http\Controllers\PizzaController;
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

Route::get('/', function () {
  return view('welcome');
});

// pizza routes
Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create', [PizzaController::class, 'create'])->name('pizzas.create');
Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show')->middleware('auth');
Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store');
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');
// Route::get('/blog/{id}', function ($id) {
//   echo '$id '.$id;
//   return view('welcome',['$id' => $id]);
// });
// Auth::routes();


// Route::get('/harshuj', [KababController::class, 'harshuj']->name('kabab.harshuj'));

// // kabab routes
Route::get('/kababs', [KababController::class, 'index'])->name('kababs.index')->middleware('auth');
Route::get('/kababs/create', [KababController::class, 'create'])->name('kababs.create');
Route::get('/kababs/{id}', [KababController::class, 'show'])->name('kababs.show')->middleware('auth');
Route::post('/kababs', [KababController::class, 'store'])->name('kababs.store');
Route::delete('/kababs/{id}', [KababController::class, 'destroy'])->name('kababs.destroy')->middleware('auth');


Auth::routes([
  // 'register' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
