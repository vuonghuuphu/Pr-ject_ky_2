<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    //
    public function index(){
        $list = DB::table('product')
        ->where('deleted', 0)
        ->get();

        $list_delete = DB::table('product')
        ->where('deleted', 1)
        ->get();
        return view('product.index')
        ->with([
                'list' => $list,
                'list_delete' => $list_delete,
                'count' => 1,
                'count1' => 1
            ]);
    }

    public function create()
    {
        return view('product.add');
    }

    public function store(Request $request)
    {   
        $id = $request->id;
        $name = $request->name;
        $img = $request->img;
        $price = $request->price;
        $id_ca = $request->id_ca;
        $like = $request->like;
        $buy = $request->buy;
        $pricesale = $request->pricesale;
        $content = $request->content;
        $sale = $request->sale;
        if ($id != 0) {
        $date = $request->d;   
        DB::table('product')
        ->where('id',$id)
        ->update([
            'name'=>$name,
            'price'=>$price,
            'thumbnail'=>$img,
            'category_id'=>$id_ca,
            'luotthich'=>$like,
            'luotmua'=>$buy,
            'sale'=>$sale,
            'giasale'=>$pricesale,
            'content'=>$content,
            'deleted'=>0,
            'created_at'=> $date,
            'updated_at' => date('Y-m-d H:i:s')
        ]);    
        }else{
        DB::table('product')->insert([
            'name'=>$name,
            'price'=>$price,
            'thumbnail'=>$img,
            'category_id'=>$id_ca,
            'luotthich'=>$like,
            'luotmua'=>$buy,
            'sale'=>$sale,
            'giasale'=>$pricesale,
            'content'=>$content,
            'deleted'=>0,
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);   
    }

        return redirect()->route('products.index');   
    }

    public function edit(Request $request){
        $id = 0;
        $name = $price = $img = $id_ca = $like = $buy = $sale = $pricesale = $content = $created_at = "";
        if (isset($id) && $request->id >0) {
            $id = $request->id;
            $ca = DB::table('product')->where('id', $id)->get();
            if ($ca != null && count($ca)>0) {
                $name = $ca[0]->name;
                $img = $ca[0]->thumbnail;
                $price = $ca[0]->price;
                $id_ca = $ca[0]->category_id;
                $like = $ca[0]->luotthich;
                $buy = $ca[0]->luotmua;
                $sale = $ca[0]->sale;
                $pricesale = $ca[0]->giasale;
                $content = $ca[0]->content;
                $created_at = $ca[0]->created_at;
            }
        }
        return view('product.add')->with([
            'id' => $id,
            'name' => $name,
            'img' => $img,
            'price' => $price,
            'id_ca' => $id_ca,
            'like' => $like,
            'buy' => $buy,
            'sale' => $sale,
            'pricesale' => $pricesale,
            'content' => $content,
            'created_at' => $created_at
        ]); 
    }

    public function delete(Request $request){
        $id = $request->id;
        $name = $img = $created_at = $updated_at = "";
        $ca = DB::table('product')->where('id', $id)->get();
                $name = $ca[0]->name;
                $img = $ca[0]->thumbnail;
                $price = $ca[0]->price;
                $id_ca = $ca[0]->category_id;
                $like = $ca[0]->luotthich;
                $buy = $ca[0]->luotmua;
                $sale = $ca[0]->sale;
                $pricesale = $ca[0]->giasale;
                $content = $ca[0]->content;
                $created_at = $ca[0]->created_at;
                $updated_at = $ca[0]->updated_at;
        DB::table('product')
        ->where('id',$id)
        ->update([
            'name'=>$name,
            'price'=>$price,
            'thumbnail'=>$img,
            'category_id'=>$id_ca,
            'luotthich'=>$like,
            'luotmua'=>$buy,
            'sale'=>$sale,
            'giasale'=>$pricesale,
            'content'=>$content,
            'deleted'=>1,
            'created_at'=> $created_at,
            'updated_at' => $updated_at
        ]); 
        return redirect()->route('products.index'); 
    }
            public function khoiphuc(Request $request){
                $id = $request->id;
        $name = $img = $created_at = $updated_at = "";
        $ca = DB::table('product')->where('id', $id)->get();
                $name = $ca[0]->name;
                $img = $ca[0]->thumbnail;
                $price = $ca[0]->price;
                $id_ca = $ca[0]->category_id;
                $like = $ca[0]->luotthich;
                $buy = $ca[0]->luotmua;
                $sale = $ca[0]->sale;
                $pricesale = $ca[0]->giasale;
                $content = $ca[0]->content;
                $created_at = $ca[0]->created_at;
                $updated_at = $ca[0]->updated_at;
        DB::table('product')
        ->where('id',$id)
        ->update([
            'name'=>$name,
            'price'=>$price,
            'thumbnail'=>$img,
            'category_id'=>$id_ca,
            'luotthich'=>$like,
            'luotmua'=>$buy,
            'sale'=>$sale,
            'giasale'=>$pricesale,
            'content'=>$content,
            'deleted'=>0,
            'created_at'=> $created_at,
            'updated_at' => $updated_at
        ]); 
        return redirect()->route('products.index'); 
    }

            public function delete_ht(Request $request){
        $id = $request->id;
        DB::table('product')
        ->where('id',$id)
        ->delete();
        return redirect()->route('products.index');   
    }
}
