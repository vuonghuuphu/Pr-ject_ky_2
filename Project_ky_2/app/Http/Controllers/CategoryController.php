<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;


class CategoryController extends Controller
{
    //
    

    public function index()
    {
        $list = DB::table('category')
        ->where('deleted', 0)
        ->get();

        $list_delete = DB::table('category')
        ->where('deleted', 1)
        ->get();

        return view('category.index')->with([
                'list' => $list,
                'list_delete' => $list_delete,
                'count' => 1,
                'count1' => 1
            ]);
    }

    public function create()
    {
        return view('category.add');
    }

    public function store(Request $request)
    {   
        $id = $request->id;
        $name = $request->n;
        $img = $request->i;
        if ($id != 0) {
        $date = $request->d;   
        DB::table('category')
        ->where('id',$id)
        ->update([
            'name'=>$name,
            'img'=>$img,
            'deleted'=>0,
            'created_at'=> $date,
            'updated_at' => date('Y-m-d H:i:s')
        ]);    
        }else{
        DB::table('category')->insert([
            'name'=>$name,
            'img'=>$img,
            'deleted'=>0,
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);   
    }

        return redirect()->route('categories.index');
    }

    public function edit(Request $request){
        $id = 0;
        $name = $img = $created_at = "";
        if (isset($id) && $request->id >0) {
            $id = $request->id;
            $ca = DB::table('category')->where('id', $id)->get();
            if ($ca != null && count($ca)>0) {
                $name = $ca[0]->name;
                $img = $ca[0]->img;
                $created_at = $ca[0]->created_at;
            }
        }
        return view('category.add')->with([
            'id' => $id,
            'name' => $name,
            'img' => $img,
            'created_at' => $created_at
        ]);
    }

    public function delete(Request $request){
        $id = $request->id;
        $name = $img = $created_at = $updated_at = "";
        $ca = DB::table('category')->where('id', $id)->get();
                $name = $ca[0]->name;
                $img = $ca[0]->img;
                $created_at = $ca[0]->created_at;
                $updated_at = $ca[0]->updated_at;
                $deleted = 1;
        DB::table('category')
        ->where('id',$id)
        ->update([
            'name'=>$name,
            'img'=>$img,
            'deleted'=>$deleted,
            'created_at'=> $created_at,
            'updated_at' => $updated_at
        ]); 
        return redirect()->route('categories.index');   
    }

        public function khoiphuc(Request $request){
        $id = $request->id;
        $name = $img = $created_at = $updated_at = "";
        $ca = DB::table('category')->where('id', $id)->get();
                $name = $ca[0]->name;
                $img = $ca[0]->img;
                $created_at = $ca[0]->created_at;
                $updated_at = $ca[0]->updated_at;
                $deleted = 0;
        DB::table('category')
        ->where('id',$id)
        ->update([
            'name'=>$name,
            'img'=>$img,
            'deleted'=>$deleted,
            'created_at'=> $created_at,
            'updated_at' => $updated_at
        ]); 
        return redirect()->route('categories.index');   
    }

            public function delete_ht(Request $request){
        $id = $request->id;
        DB::table('category')
        ->where('id',$id)
        ->delete();
        return redirect()->route('categories.index');   
    }
}