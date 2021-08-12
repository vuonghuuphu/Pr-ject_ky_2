<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Controller_productdetails extends Controller
{
    public function d(Request $request) {
       $s = $request->s; 
        $user = auth()->user(); 
        $t = 0;
        if (isset($user)) {
           $list_cart = DB::table('cart')->where('cart.user_id',$user->id )->get();
        
        for ($i=0; $i < count($list_cart) ; $i++) { 
               $t = $i+1;
               
        } 
        }
        
        $l = 0;
        if (isset($user)) {
          $list_like = DB::table('like')->where('like.id_user',$user->id )->get();
        for ($i=0; $i < count($list_like) ; $i++) { 
               $l = $i+1;
               
        }  
        }
 
        $list_danhmuc = DB::table('category')->get();
        $id = $request->id;
        
        if (isset($id)) {
           $list1 = DB::table('product')->where('product.id',$id)
->leftJoin('like', 'product.id', '=', 'like.id_products')
    ->select('product.*', 'like.id_user as like_user')
    ->orderBy('product.luotthich', 'DESC')
           ->get();
            foreach ($list1 as $key => $value) {
            $caid = $value->category_id; }
             $list_spk = DB::table('product')
            ->leftJoin('like', 'product.id', '=', 'like.id_products')
            ->select('product.*', 'like.id_user as like_user')
            ->orderBy('product.luotthich', 'DESC')
             ->where('product.category_id',$caid)->take(8)->get();
             
             if (isset($user)) {
             return view('homepage.productdetail')->with([
                'list_danhmuc' => $list_danhmuc,
                'list1' => $list1,
                'user' => $user,
                'l' => $l,
                't' => $t,
                'list_spk' => $list_spk
            ]);    
              } else{
              return view('homepage.productdetail')->with([
                'list_danhmuc' => $list_danhmuc,
                'list1' => $list1,
                'user' => "",
                't' => $t,
                'l' => $l,
                'list_spk' => $list_spk
            ]);  
              }
               }  

    }

    
}
