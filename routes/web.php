<?php

use Illuminate\Support\Facades\Route;

// Add controller
use App\Http\Controllers\PizzaController;

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

// Route::get('/', [PizzaController::class, 'welcome']); //Route::get('/', 'PizzaController@index')-> [old laravel version<8]

Route::get('/harshuj', [PizzaController::class, 'harshuj']); //Route::get('/harshuj', 'PizzaController@harshuj')-> [old laravel version<8]

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
Auth::routes([
  'register' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
