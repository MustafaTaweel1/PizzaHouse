
@extends('layouts.app')
    @section('content')
    <div class=" pizza-index">
      <h1 class="index-title">Pizza Order</h1>
      <div class="pizza-all">
        <table class="pizza-item">
          @if ($pizzas->count() <= 0)
          <h1 class="empty">Don't have Order</h1>
          @else
          <thead class="pizza-item-thead">
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody class="pizza-item-tbody ">
          @foreach ($pizzas as $pizza)
          {{-- <a   href="{{route('pizzas.show',$pizza->id)}}"> test --}}
          <tr class="item">
              <td class="id"> {{$pizza->id}} </td>
              <td class="name"> <a  class="order-button" href="{{route('pizzas.show',$pizza->id)}}"> {{$pizza->name}} </a></td>
              <td class="date">{{date(' H:i/d-m-Y ',strtotime($pizza->created_at))}}</td>
            </tr>
          @endforeach
        </tbody>
            @endif
            <tr>
        </table>
      </div>
    </div>
  @endsection