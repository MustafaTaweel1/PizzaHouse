<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class PizzaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
   
    public function index(){
        
        //$pizzas =Pizza::all();

        $pizzas =Pizza::OrderBy('id')->get();
        
            return view('pizza.index',[
        
        // use in views|| user in Route        
            'pizzas'=>$pizzas,
             ]);
    }
    public function show($id){
        $pizzas= Pizza::findOrFail($id);

        return view('pizza.show',['pizza'=>$pizzas] );
    }
    public function create(){
        return view('pizza.create');
    }
    public function store(){
// error_log wite in terminal error 
        $Pizza = new Pizza();
        $Pizza->name=request('name');
        $Pizza->base=request('base');
        $Pizza->type =request('type');
        $Pizza->price =request('price');
        if(request('toppings') != null){
            $Pizza->toppings =request('toppings');
        }else{
            $Pizza->toppings=" ";
        }
      

        // error_log($Pizza);
        $Pizza->save();
        return redirect('/')->with('mssg','thanks for your Orders');
    }

    public function delete($id){
    $pizza =Pizza::findOrFail($id);
    $pizza->delete();
    return redirect('pizzas');
    }

}
