<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Controllershopcart extends Controller
{
    public function shopc (Request $request) {
        $list_danhmuc = DB::table('category')->get();
        $user = auth()->user();
        $list_cart = DB::table('cart')->where('cart.user_id',$user->id )->get();
        $tong = 0;
        for ($i=0; $i < count($list_cart); $i++) { 
         $price = $list_cart[$i]->price;
        $tong = $tong + $price;   
        }
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
         return view('homepage.shop_cart')->with([
            'l' => $l,
                't' => $t,
                'user' => $user,
                'list_cart' => $list_cart,
                'tong' => $tong,
                'list_danhmuc' => $list_danhmuc
            ]); 
    }



    public function buy (Request $request) {
        $id = $request->id;
        $list_danhmuc = DB::table('category')->get();
        $user = auth()->user();
        $l = 0;
        if (isset($user)) {
          $list_like = DB::table('like')->where('like.id_user',$user->id )->get();
        for ($i=0; $i < count($list_like) ; $i++) { 
               $l = $i+1;
               
        }  
        }
                $t = 0;
        if (isset($user)) {
           $list_cart = DB::table('cart')->where('cart.user_id',$user->id )->get();
        
        for ($i=0; $i < count($list_cart) ; $i++) { 
               $t = $i+1;
               
        } 
        }
        return view('homepage.thanhtoan')->with([
                't' =>$t,
                'l' => $l,
                'user' => $user,
                'list_danhmuc' => $list_danhmuc
            ]); 
    }




        public function tc (Request $request) {
        $id = $request->id;
        $list_danhmuc = DB::table('category')->get();
        $user = auth()->user();
        $l = 0;
        if (isset($user)) {
          $list_like = DB::table('like')->where('like.id_user',$user->id )->get();
        for ($i=0; $i < count($list_like) ; $i++) { 
               $l = $i+1;
               
        }  
        }
                $t = 0;
        if (isset($user)) {
           $list_cart = DB::table('cart')->where('cart.user_id',$user->id )->get();
        
        for ($i=0; $i < count($list_cart) ; $i++) { 
               $t = $i+1;
               
        } 
        }

        $list_cart = DB::table('cart')->where('cart.user_id',$user->id )->get();
        $tong = 0;
        for ($i=0; $i < count($list_cart); $i++) { 
         $price = $list_cart[$i]->price;
        $tong = $tong + $price;   
        }
        $name = $request->n;
        $address = $request->a;
        $sdt = $request->p;
        DB::table('order')->insert([
            'name'=>$name,
            'address'=>$address,
            'sdt'=>$sdt,
            'tong'=>$tong,
            'user_id' => $user->id,
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);   

        $list_buy = DB::table('order')->where('order.user_id',$user->id )->orderBy('order.user_id','DESC')->get();
        $idu = $list_buy[0]->id;
        for ($i=0; $i < count($list_cart); $i++) { 
           DB::table('order_detail')->insert([
            'order_id'=>$idu,
            'name'=>$list_cart[$i]->name,
            'img'=>$list_cart[$i]->thumbnail,
            'soluong'=>$list_cart[$i]->soluong,
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);   
        }
        for ($i=0; $i < count($list_cart); $i++) { 
             $iddel = $list_cart[$i]->id;
        DB::table('cart')
        ->where('id',$iddel)
        ->delete();
        }
        return view('homepage.thanhcong')->with([
                't' =>$t,
                'l' => $l,
                'user' => $user,
                'list_danhmuc' => $list_danhmuc
            ]); 
    }

    public function pagelike (Request $request) {
     $user = auth()->user();   
        $list = DB::table('product')
    ->leftJoin('like', 'product.id', '=', 'like.id_products')
    ->where( 'like.id_user',$user->id)
    ->select('product.*', 'like.id_user as like_user','like.id as like_id')
    ->orderBy('product.luotthich', 'DESC')
    ->take(8)->get();
        $list_danhmuc = DB::table('category')->get();
        
        $l = 0;
        if (isset($user)) {
          $list_like = DB::table('like')->where('like.id_user',$user->id )->get();
        for ($i=0; $i < count($list_like) ; $i++) { 
               $l = $i+1;
               
        }  
        }
                $t = 0;
        if (isset($user)) {
           $list_cart = DB::table('cart')->where('cart.user_id',$user->id )->get();
        
        for ($i=0; $i < count($list_cart) ; $i++) { 
               $t = $i+1;
               
        } 
        }
        
        return view('homepage.like')->with([
                'list'=>$list,
                't' =>$t,
                'l' => $l,
                'user' => $user,
                'list_danhmuc' => $list_danhmuc
            ]); 
    }
}
