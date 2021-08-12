<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Controller_sanpham extends Controller
{
   public function homepage(Request $request) {
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
    $list_spnb = DB::table('product')
    ->leftJoin('like', 'product.id', '=', 'like.id_products')
    ->select('product.*', 'like.id_user as like_user')
    ->orderBy('product.luotthich', 'DESC')
    ->take(8)->get();
    $list_danhmuc = DB::table('category')->where('category.deleted', 0)->get();
    $list_new = DB::table('product')->orderBy('product.id', 'DESC')->where('product.deleted', 0)->paginate(6);
    $list_like = DB::table('product')->orderBy('product.luotthich', 'DESC')->where('product.deleted', 0)->paginate(6);
    $list_buy = DB::table('product')->orderBy('product.luotmua', 'DESC')->where('product.deleted', 0)->paginate(6);
    $list_news = DB::table('new')->orderBy('new.created_at', 'DESC')->paginate(3);
    
    if (isset($user)) {
            return view('homepage.homepage')->with([
                'list_news'=>$list_news,
                'list_like'=>$list_like,
                'list_buy'=>$list_buy,
                'list_new' => $list_new, 
                'list_danhmuc' => $list_danhmuc,
                'list_spnb'  => $list_spnb,
                'count' => 1,
                'user' => $user,
                'count1' => 1,
                'count3' => 1,
                'count4' => 1,
                'count5' => 1,
                'count6' => 1,
                't' => $t,
                'l' => $l
            ]);  }
            else{
              return view('homepage.homepage')->with([
                'list_news'=>$list_news,
                'list_like'=>$list_like,
                'list_buy'=>$list_buy,
                'list_new' => $list_new, 
                'list_danhmuc' => $list_danhmuc,
                'list_spnb'  => $list_spnb,
                'count' => 1,
                'user' => "",
                'count1' => 1,
                'count3' => 1,
                'count4' => 1,
                'count5' => 1,
                'count6' => 1,
                't' => $t,
                'l' => $l
            ]);  
            }

}
     public function like(Request $request){
        $idsp = $request->id;
        $user = auth()->user()->id;
        DB::table('like')->insert([
            'id_user'=>$user,
            'id_products'=>$idsp
        ]);  
         return redirect()->route('home'); 
     }
          public function like1(Request $request){
        $idsp = $request->id;
        $list = DB::table('product')->where('id', $idsp)->get();
        $id = $list[0]->category_id;
        $user = auth()->user()->id;
        DB::table('like')->insert([
            'id_user'=>$user,
            'id_products'=>$idsp
        ]);  
         return redirect()->route('product',['id' => $id]); 
     }
          public function like2(Request $request){
        $idsp = $request->id;
        $list = DB::table('product')->where('id', $idsp)->get();
        $id = $list[0]->id;
        $user = auth()->user()->id;
        DB::table('like')->insert([
            'id_user'=>$user,
            'id_products'=>$idsp
        ]);  
         return redirect()->route('det',['id' => $id]); 
     }
}
