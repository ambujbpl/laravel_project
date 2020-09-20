@extends('layouts.layout')

@section('content')
<!-- <div class="wrapper pizza-details">
  <h1>Order for {{ $pizza->name }}</h1>
  <p class="type">Type - {{ $pizza->type }}</p>
  <p class="base">Base - {{ $pizza->base }}</p>
</div>
<a href="/pizzas" class="back"><- Back to all pizzas</a> -->

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">                    
            <div class="wrapper pizza-details">
            <h1>Order for {{ $pizza->name }}</h1>
            <p class="type">Type - {{ $pizza->type }}</p>
            <p class="base">Base - {{ $pizza->base }}</p>
            </div>
            <a href="/pizzas" class="back"><- Back to all pizzas</a>
        </div>
    </div>
</div>
@endsection