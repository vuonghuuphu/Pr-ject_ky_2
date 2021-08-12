<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Product extends Controller
{
       public function sp (Request $request) {

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
    $list_spnb = DB::table('product')->leftJoin('like', 'product.id', '=', 'like.id_products')
    ->select('product.*', 'like.id_user as like_user')
    ->orderBy('product.luotthich', 'DESC')
    ->where('product.sale','>', 1)->get();
    $list_danhmuc = DB::table('category')->get();
    $s = $request->s;
    $id = $request->id;
    $list_new = DB::table('product')->orderBy('product.created_at', 'DESC')->take(8)->get();

    if (isset($s)) {
        $list = DB::table('product')
        ->leftJoin('like', 'product.id', '=', 'like.id_products')
        ->select('product.*', 'like.id_user as like_user')
        ->orderBy('product.luotthich', 'DESC')
        ->where('product.name','like', '%'.$s.'%')->paginate(6);
    }elseif(isset($id)) {
             $list = DB::table('product')
            ->leftJoin('like', 'product.id', '=', 'like.id_products')
            ->select('product.*', 'like.id_user as like_user')
            ->orderBy('product.luotthich', 'DESC')
            ->orwhere('product.category_id',$id)->paginate(6);
    }else{
        $list= DB::table('product')
        ->leftJoin('like', 'product.id', '=', 'like.id_products')
        ->select('product.*', 'like.id_user as like_user')
        ->orderBy('product.luotthich', 'DESC')
        ->where('product.category_id',1)->paginate(6); 
    }
    if (isset($user)) {
            return view('homepage.Product')->with([
                'list_new' => $list_new, 
                'list_danhmuc' => $list_danhmuc,
                'list_spnb'  => $list_spnb,
                'user' => $user,
                'count' => 1,
                'count1' => 1,
                'c' => 1,
                'l' => $l,
                't' => $t,
                'list' => $list
            ]); 
    }
    else{
            return view('homepage.Product')->with([
                'list_new' => $list_new, 
                'list_danhmuc' => $list_danhmuc,
                'list_spnb'  => $list_spnb,
                'user' => "",
                'count' => 1,
                'count1' => 1,
                'l' => $l,
                't' => $t,
                'c' => 1,
                'list' => $list
            ]); 
    }
 
    }
    

}
