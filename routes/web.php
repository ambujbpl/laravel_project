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
Route::get('/pizzas', [PizzaController::class, 'index']);
Route::get('/pizzas/create', [PizzaController::class, 'create']);
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);
Route::post('/pizzas', [PizzaController::class, 'store']);
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy']);
// Route::get('/blog/{id}', function ($id) {
//   echo '$id '.$id;
//   return view('welcome',['$id' => $id]);
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
