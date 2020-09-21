@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
  <h1>Create a New Kabab</h1>
  <form action="{{ route('kababs.store') }}" method="POST">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>
    <label for="type">Choose type of kabab:</label>
    <select name="type" id="type">
      <option value="adana">Adana</option>
      <option value="tray">Tray</option>
      <option value="eggplant">Eggplant</option>
      <option value="beyti">Beyti</option>
      <option value="bundle">Bundle</option>
      <option value="beyti">Beyti</option>
      <option value="chicken">Chicken</option>
      <option value="seekh">Seekh</option>
    </select>
    <fieldset>
      <label>Extra ingredients:</label>
      <input type="checkbox" name="ingredients[]" value="onion">Onion<br />
      <input type="checkbox" name="ingredients[]" value="spices">Spices<br />
      <input type="checkbox" name="ingredients[]" value="flatbread">Flatbread<br />
      <input type="checkbox" name="ingredients[]" value="potatoes">Potatoes<br />
      <input type="checkbox" name="ingredients[]" value="tomato">Tomato<br />
    </fieldset>
    <input type="submit" value="Order Kabab">
  </form>
</div>
@endsection