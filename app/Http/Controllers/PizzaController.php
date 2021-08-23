<?php

namespace App\Http\Controllers;
use App\Models\Pizza;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PizzaController extends Controller
{
    function index(){
        return view('index');
    }
    function pizzas() {
        $pizzas = Pizza::all();
        return view('pizzas',['pizzas'=>$pizzas]);
    }

    function insert(Request $req){
        $validation = $req->validate([
            'username'=>'required',
            'pizza_name'=>'required',
            'topping'=>'required',
            'sauce'=>'required',
            'price'=>'required'
        ]);

        if($validation){
            $pizza = new Pizza();
            $pizza->username = $req->username;
            $pizza->pizza_name = $req->pizza_name;
            $pizza->topping = $req->topping;
            $pizza->sauce = $req->sauce;
            $pizza->price = $req->price;
            $pizza->save();
            return back()->with("success","Thank You For Your Order!");
        }else{
            return back()->withErrors($validation);
        }
    }

    function delete($id){
        $delete = Pizza::find($id);
        $delete->delete();

        return back()->with("delete","Order is deleted");
    }

    function edit($id){
        $pizza = Pizza::find($id);

        return view('edit',["pizza"=>$pizza]);
    }

    function update($id, Request $req){
        $pizza = Pizza::find($id);
        $pizza->username = $req->username;
        $pizza->pizza_name = $req->pizza_name;
        $pizza->topping = $req->topping;
        $pizza->sauce = $req->sauce;
        $pizza->price = $req->price;
        $pizza->update();
        return redirect()->route('pizzas')->with("update","Order is updated");
    }

    function logout(){
        Auth::logout();
        return redirect()->route('login'); 
    }
}
