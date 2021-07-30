<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Product extends Controller
{
       public function sp (Request $request) {
    $list_spnb = DB::table('product')->where('product.sale','>', 1)->paginate(6);
    $list_danhmuc = DB::table('category')->get();
    $list_new = DB::table('product')->orderBy('product.created_at', 'DESC')->paginate(8);

    $s = $request->s;
    $id = $request->id;

    if (isset($s)) {
        $list = DB::table('product')->where('product.name','like', '%'.$s.'%')->paginate(12);
    }elseif(isset($id)) {
             $list = DB::table('product')->where('product.category_id',$id)->paginate(12);
    }else{
        $list= DB::table('product')->where('product.category_id',1)->paginate(12); 
    }
    
            return view('homepage.Product')->with([
                'list_new' => $list_new, 
                'list_danhmuc' => $list_danhmuc,
                'list_spnb'  => $list_spnb,
                'count' => 1,
                'count1' => 1,
                'c' => 1,
                'list' => $list
            ]);  
    }
    

}
