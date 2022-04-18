<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models;
class ProductController extends Controller
{
    //
 public function register(Request $request){
 //For testing purpose, use hard coded data, till we design UI
 //$college = Product::create([
 //'name' => 'Desyibelew Kelkay',
// 'id' => '1672',
 //'Quantity' => '100',
 //'Price' => "1000.00"
return view ('product.register');
 //]);



 }
 public function store(Request $request){
 $product = new product();
 $product ->name =$request ->name;
 $product -> unit =$request->unit;
 $product ->price =$request->price;
 $product ->quality = $request->quantity;
 $is_successed = $product:: Save();
 if ($is_successed)
 echo 'Record Saved Successfully';
 else echo 'Something went wrong try again';
}
}