<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
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
  public function pizzas() {
    // $pizzas = Pizza::all();  
    // $pizzas = Pizza::orderBy('name', 'asc')->get();
    $pizzas = Pizza::where('type', 'Long Pizza')->get();
    // $pizzas = Pizza::latest()->get();      

    return view('pizzas', [
      'pizzas' => $pizzas,
    ]);
  }
}
