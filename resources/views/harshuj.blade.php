@extends('layouts.layout')

@section('content')
<div class="container">
  Wellcome to {{ $name }}<br>
  my role is : {{ $role }}<br>
  and current location is : {{ $location }}<br>

  @if($experience > 4)
    <p>You are Senior Developer</p>
  @elseif($experience < 2)
    <p>You are Junior Developer</p>
  @else
    <p>You are Software Developer</p>
  @endif

  @unless($location == 'Bhopal')
    <p>You are not in Bhopal</p>
  @endunless

  @php
    $rate = 100;
    echo 'the rate of success is '.$rate. ' %.';
  @endphp

  @for($i=0; $i < 10; $i++)
    <p>count is :- {{ $i }}</p><br>
  @endfor

  <img src='./images/image.png' alt="test image">
</div>
@endsection