@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
  <h1>Order for {{ $kabab->name }}</h1>
  <p class="type">Type - {{ $kabab->type }}</p>
  <p class="toppings">Extra ingredients:</p>
  <ul>
    @foreach($kabab->ingredients as $ingredient)
      <li>{{ $ingredient }}</li>
    @endforeach
  </ul>
  <form action="{{ route('kababs.destroy', $kabab->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Complete Order</button>
  </form>
</div>
<a href="{{ route('kababs.index') }}" class="back"><- Back to all kababs</a>
@endsection