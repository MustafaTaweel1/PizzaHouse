@extends('layouts.app')
    @section('content')
<div class="create-pizza">
    <div class="h_flex">
        <div class="input-file">
            <div class="color-effect">New Order</div>
            <form action="/pizzas" method="post" class="form">
                @csrf
                <div class="inputitem">
                    <label for="name"><img width="100" height="100" src="https://img.icons8.com/ios-filled/50/2f27ce/name.png" alt="name"/></label>
                    <input type="text" name="name" id="name" placeholder=" Enter your Name " class="input">
                </div>
                <div class="inputitem">
                    <label for="name"><img width="100" height="100" src="https://img.icons8.com/ios-filled/50/2f27ce/purchase-order.png" alt="purchase-order"/></label>
                    <input type="text" name="price" id="price" placeholder=" Enter total pizza  " class="input">
                </div>
                <div class="type inputitem">
                    <label for="typeticket"><img width="32" height="32" src="https://img.icons8.com/ios-filled/100/2f27ce/pizza.png" alt="pizza"/></label>
                    <select name="type" id="type">
                        <option value="BBQ Chicken">BBQ Chicken</option>
                  <option value="Hawaiian">Hawaiian</option>
                  <option value="Margherita">Margherita</option>
                  <option value="Pepperoni">Pepperoni</option>
                  <option value="Vegetarian Supreme">Vegetarian Supreme</option>
                </select>
            </div>
          <div class="type inputitem">
              <label for="base"><img width="32" height="32" src="https://img.icons8.com/ios-filled/100/2f27ce/pizza.png" alt="pizza"/></label>
              <select name="base" id="base">
                  <option value="Thin Crust">Thin Crust</option>
                  <option value="Hand-Tossed">Hand-Tossed</option>
                  <option value="Thin Crust">Thin Crust</option>
                  <option value="Pan Crust">Pan Crust</option>
                  <option value=" Stuffed Crust ">Stuffed Crust</option>
                </select>
            </div>
            <fieldset class="toppings">
                <label>Extra toppings : </label>
                <div class="fieldset">
                    <span>Mushrooms</span>
                    <input type="checkbox" name="toppings[]" value="mushrooms" class="checkbox" />
                </div>
                <div class="fieldset">
                    <span>Peppers</span>
                    <input type="checkbox" name="toppings[]" value="peppers" class="checkbox" />
                </div>
                <div class="fieldset">
                    <span>Garlic</span>
                    <input type="checkbox" name="toppings[]" value="garlic" class="checkbox" />
                </div>
                <div class="fieldset">
                    <span>Olives</span>
                    <input type="checkbox" name="toppings[]" value="Olives" class="checkbox" />
                </div>
            </fieldset>
            <div class="btnsen">
                <input type="submit" value="Order Pizaa" class="primary-button" />
                <a href="{{route('welcome')}}"  class="home-button" >Home Page</a>
            </div>
        </form>
    </div>
    <div class="page-img"></div>
    </div>
</div>

@endsection
<script>
    function check() {
        let name= document.getElementById('name').value;
        let name= document.getElementById('price').value;
        
    }




</script>