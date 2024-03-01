<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;
use app\Models\Pizza;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//middleware  dont open page if you not login 
Route::get('/pizzas',[PizzaController::class ,'index'])->name('pizzas.index')->middleware('auth');
Route::post('/pizzas',[PizzaController::class,'store'])->name('pizzas.store');
Route::get('/pizzas/create',[PizzaController::class ,'create'])->name('pizzas.create');
Route::get('/pizzas/{id}',[PizzaController::class ,'show'])->name('pizzas.show'); 
Route::delete('/pizzas/{id}',[PizzaController::class, 'delete'])->name('pizzas.delete')->middleware('auth');


// reonve Route register in wensite and url
Auth::routes([
    'register'=>true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
