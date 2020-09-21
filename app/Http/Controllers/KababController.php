<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kabab;

class KababController extends Controller
{
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
  
  public function index() {

    // $kababs = Kabab::all();  
    // $kababs = Kabab::orderBy('name', 'desc')->get();
    // $kababs = Kabab::where('type', 'hawaiian')->get();
    $kababs = Kabab::latest()->get();      

    return view('kabab.index', [
      'kababs' => $kababs,
    ]);
  }

  public function show($id) {
    // use the $id variable to query the db for a record
    $kabab = Kabab::findOrFail($id);

    return view('kabab.show', ['kabab' => $kabab]);
  }

  public function create() {
    return view('kabab.create');
  }

  public function store() {

    $kabab = new Kabab();

    $kabab->name = request('name');
    $kabab->type = request('type');
    $kabab->ingredients = request('ingredients');
    error_log($kabab);

    $kabab->save();

    return redirect('/')->with('mssg', 'Thanks for your order!');
  }

  public function destroy($id) {

    $kabab = Kabab::findOrFail($id);
    $kabab->delete();

    return redirect('/kababs');

  }
}
