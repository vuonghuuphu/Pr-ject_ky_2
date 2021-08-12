<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Controller_cart extends Controller
{
    public function delete (Request $request) {
        $id = $request->id;
        DB::table('cart')
        ->where('id',$id)
        ->delete();
        return redirect()->route('cart');
    }
     public function dlike (Request $request) {
        $id = $request->id;
        DB::table('like')
        ->where('id',$id)
        ->delete();
        return redirect()->route('plike');
    }
    public function adc (Request $request) {
        $id = $request->id;
        $name = $thumbnail = $price = "";
        $user = auth()->user();
        $list = DB::table('product')
        ->where('id', $id)
        ->get();
        $name = $list[0]->name;
        $thumbnail = $list[0]->thumbnail;
        $price = $list[0]->price;
         DB::table('cart')->insert([
            'name'=>$name,
            'price'=>$price,
            'thumbnail'=>$thumbnail,
            'user_id'=>$user->id,
            'soluong' => 1
        ]);   
 $list_cart = DB::table('cart')->where('cart.user_id',$user->id )->get();
        for ($i=0; $i < count($list_cart) ; $i++) { 
               $t = $i+1;
        }
        $l = 0;
        $list_like = DB::table('like')->where('like.id_user',$user->id )->get();
        for ($i=0; $i < count($list_like) ; $i++) { 
               $l = $i+1;
               
        }
        
        if (isset($id)) {
         return redirect()->route('det',['id' => $id]);
               }  
         
    }
}
