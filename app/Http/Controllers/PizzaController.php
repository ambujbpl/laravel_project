<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
  public function index() {
    return view('welcome');
  }
  public function harshuj() {
    $data = [
      'name' => 'Harshuj',
      'role' => 'Full Stack Software Developer',
      'location' => 'Indore',
      'experience' => 5
    ];
    $name = request('by');
    return view('harshuj' , $data);      
  }
}
