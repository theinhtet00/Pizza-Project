<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PizzaController::class,'index'])->name('home');

Route::post('/',[PizzaController::class,'insert'])->name('insert');

Route::get('/pizzas',[PizzaController::class,'pizzas'])->middleware(['auth'])->name('pizzas');

Route::get('/pizzas/{id}',[PizzaController::class,'delete'])->name('delete');

Route::get('/pizzas/edit/{id}',[PizzaController::class,'edit'])->name('edit');

Route::post('/pizzas/update/{id}',[PizzaController::class,'update'])->name('update');

Route::get('/logout',[PizzaController::class,'logout'])->name('logout');

require __DIR__.'/auth.php';
