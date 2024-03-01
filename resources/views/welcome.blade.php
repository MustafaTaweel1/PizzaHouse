
        @extends('Layouts.app')
        @section('content')
                    <div class="center" >
                        <img  class="image-index " src="http://127.0.0.1:8000/storage/pizza house.png" alt="" >
                    </div>
                    <div class=" center ">
                        <div class="container-text work-title-header  ">
                            <span class="text first-text ">Hi ,  </span>
                            <span class="text sec-text "></span>
                        </div>
                        </div>
                        <div class="btn-hub center ">
                            <button class="ml-20">
                                <a href="{{route('pizzas.create')}}" class="text-center ">Create Order </a>
                            </button>
                            <button class="mr-20">
                                <a href="{{route('pizzas.index')}}" class="text-center ">Order List </a>
                            </button>
                        </div>

        @endsection


        @section('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const text = document.querySelector('.sec-text');
                const phrases = ["Welcome to Pizza House", "Welcome to Website", "Good Time"];
                let index = 0;
    
                const textLoad = () => {
                    text.textContent = phrases[index];
                    index = (index + 1) % phrases.length;
                    setTimeout(textLoad, 4000);
                }
    
                textLoad();
            });
        </script>
    @endsection