<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Controllernews extends Controller
{
    public function w(Request $request) {
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

        $list_danhmuc = DB::table('category')->where('category.deleted', 0)->get();
        $list_new = DB::table('new')->orderBy('new.created_at', 'DESC')->paginate(8);
        $list_nb = DB::table('new')->orderBy('new.created_at', 'DESC')->paginate(6);
        if (isset($user)) {
           return view('homepage.tintuc')->with([
                'list_danhmuc' => $list_danhmuc,
                'list_new' => $list_new,
                'list_nb' => $list_nb,
                'user' => $user,
                'l' => $l,
                't' => $t,
                'count' => 0
            ]);  
        }else{
         return view('homepage.tintuc')->with([
                'list_danhmuc' => $list_danhmuc,
                'list_new' => $list_new,
                'list_nb' => $list_nb,
                'user' =>"",
                'l' => $l,
                't' => $t,
                'count' => 0
            ]);   
        }
        
    }

    public function dn(Request $request) {
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

        $id = $request->id;
        if (isset($id)) {
          $list_new = DB::table('new')->where('new.id', $id)->get();   
        }
        $list_danhmuc = DB::table('category')->where('category.deleted', 0)->get();
        $list_nb = DB::table('new')->orderBy('new.created_at', 'DESC')->paginate(6);
        if (isset($user)) {
            return view('homepage.tintucdetail')->with([
                'list_danhmuc' => $list_danhmuc,
                'list_new' => $list_new,
                'list_nb' => $list_nb,
                'user' =>$user,
                'l' => $l,
                't' => $t,
                'count' => 0
            ]);
        }else{
            return view('homepage.tintucdetail')->with([
                'list_danhmuc' => $list_danhmuc,
                'list_new' => $list_new,
                'list_nb' => $list_nb,
                'user' =>"",
                'l' => $l,
                't' => $t,
                'count' => 0
            ]);  
        }
        
    }

     public function us(Request $request) {
       $list_danhmuc = DB::table('category')->where('category.deleted', 0)->get();
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
        if (isset($user)) {
        return view('homepage.aboutus')->with([
        'list_danhmuc' => $list_danhmuc,
                'user' =>$user,
                'l' => $l,
                't' => $t,
            ]);     
        }
        else{
            return view('homepage.aboutus')->with([
        'list_danhmuc' => $list_danhmuc,
                'user' =>"",
                'l' => $l,
                't' => $t,
            ]);     
        }
       
     }
}
