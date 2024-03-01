@extends('layouts.app')

@section('content')
<div class="pizza-details">
  <h1 class="index-title">Order for {{ $pizza->name }}</h1>
  <div class="order-table">
    <div class="order-item">
      <p class="">Type</p>
      <p class="type">{{ $pizza->type }}</p>
    </div>
    <div class="order-item">
      <p class="base">Base</p>
      <p class="base">{{ $pizza->base }}</p>
    </div>
    <div class="order-item">
      <p class="total">Total</p>
      <p class="total">{{ $pizza->price }}</p>
    </div>
    <div class="order-item">
      <p class="toppings">Extra toppings:</p>
      <ul>
        @if ($pizza->toppings != " ")
        @foreach($pizza->toppings as $topping)
        <li>{{ $topping }}</li>
        @endforeach
        @endif
        {{-- <h1>{{$pizza->toppings == " "}}</h1> --}}
      </ul>
    </div>


  </div>
  <form action="/pizzas/{{ $pizza->id }}" method="POST" >
    @csrf
    @method('DELETE')
    <button class="btn-complete primary-button ">Complete Order</button>
  </form>
  <a href="{{route('pizzas.index')}}" class="back home-button" ><- Back to all pizzas</a>
</div>
@endsection