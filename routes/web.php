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

Route::get('/', [PizzaController::class, 'index']); //Route::get('/', 'PizzaController@index')-> [old laravel version<8]

Route::get('/harshuj', [PizzaController::class, 'harshuj']); //Route::get('/harshuj', 'PizzaController@harshuj')-> [old laravel version<8]

Route::get('/pizzas', [PizzaController::class, 'pizzas']);
Route::get('/pizza/{id}', [PizzaController::class, 'show']);

// Route::get('/blog/{id}', function ($id) {
//   echo '$id '.$id;
//   return view('welcome',['$id' => $id]);
// });