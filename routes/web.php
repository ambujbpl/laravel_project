<?php

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

Route::get('/harshuj', function () {
  $data = [
    'name' => 'Harshuj',
    'role' => 'Full Stack Software Developer',
    'location' => 'Indore',
    'experience' => 5
  ];

  $name = request('by');
  return view('harshuj' , $data);
});

Route::get('/blog/{id}', function ($id) {
  echo '$id '.$id;
  return view('welcome',['$id' => $id]);
});