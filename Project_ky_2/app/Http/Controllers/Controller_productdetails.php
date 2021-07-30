<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Controller_productdetails extends Controller
{
    public function d(Request $request) {
       $s = $request->s; 
       if (isset($s)) {
            $list = DB::table('product')->where('product.name','like', '%'.$s.'%')->paginate(12);
            $list_spnb = DB::table('product')->where('product.sale','>', 1)->paginate(6);
            $list_danhmuc = DB::table('category')->get();
            $list_new = DB::table('product')->orderBy('product.created_at', 'DESC')->paginate(6);
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
        $list_danhmuc = DB::table('category')->get();
        $id = $request->id;
        
        if (isset($id)) {
           $list1 = DB::table('product')->where('product.id',$id)->paginate(1);
            foreach ($list1 as $key => $value) {
            $caid = $value->category_id; }
             $list_spk = DB::table('product')->where('product.category_id',$caid)->get();
          
             return view('homepage.productdetail')->with([
                'list_danhmuc' => $list_danhmuc,
                'list1' => $list1,
                'list_spk' => $list_spk
            ]);  }  }
    }

    
}
