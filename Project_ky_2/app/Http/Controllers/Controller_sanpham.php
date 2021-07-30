<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Controller_sanpham extends Controller
{
   public function homepage(Request $request) {
    $list_spnb = DB::table('product')->orderBy('product.id', 'DESC')->where('product.deleted', 0)->paginate(8);
    $list_danhmuc = DB::table('category')->where('category.deleted', 0)->get();
    $list_new = DB::table('product')->orderBy('product.id', 'DESC')->where('product.deleted', 0)->paginate(6);
    $list_like = DB::table('product')->orderBy('product.luotthich', 'DESC')->where('product.deleted', 0)->paginate(6);
    $list_buy = DB::table('product')->orderBy('product.luotmua', 'DESC')->where('product.deleted', 0)->paginate(6);
    $list_news = DB::table('new')->orderBy('new.created_at', 'DESC')->paginate(3);
    $s = $request->s;
    if (isset($s)) {
            $list = DB::table('product')->where('product.name','like', '%'.$s.'%')->paginate(12);
            $list_spnb = DB::table('product')->where('product.sale','>', 1)->orwhere('product.deleted', 0)->paginate(6);
            $list_danhmuc = DB::table('category')->where('category.deleted', 0)->get();
            $list_new = DB::table('product')->orderBy('product.created_at', 'DESC')->where('product.deleted', 0)->paginate(6);
            return view('homepage.Product')->with([
                'list_new' => $list_new, 
                'list_danhmuc' => $list_danhmuc,
                'list_spnb'  => $list_spnb,
                'count' => 1,
                'count1' => 1,
                'c' => 1,
                'list' => $list
            ]);
    }else{
         
    
            return view('homepage.homepage')->with([
                'list_news'=>$list_news,
                'list_like'=>$list_like,
                'list_buy'=>$list_buy,
                'list_new' => $list_new, 
                'list_danhmuc' => $list_danhmuc,
                'list_spnb'  => $list_spnb,
                'count' => 1,
                'count1' => 1,
                'count3' => 1,
                'count4' => 1,
                'count5' => 1,
                'count6' => 1
            ]); } 
    }

}
