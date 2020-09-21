@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
  <h1>Kabab Orders</h1>
  @foreach($kababs as $kabab)
    <div class="pizza-item">
      <img src="/img/pizza.png" alt="pizza icon">
      <h4><a href="{{ route('kababs.show', $kabab->id) }}">{{ $kabab->name }}</a></h4>
    </div>
  @endforeach

</div>

@endsection