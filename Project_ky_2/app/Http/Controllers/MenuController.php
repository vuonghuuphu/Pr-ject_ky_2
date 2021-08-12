<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function index(){
        $list = DB::table('new')
        ->where('deleted', 0)
        ->paginate(8);
        $list_delete = DB::table('new')
        ->where('deleted', 1)
        ->get();
        return view('menu.index')->with([
                'count' => 1,
                'count1' => 1,
                'list_delete' => $list_delete,
                'list' => $list
            ]);
    }

    public function create()
    {
        return view('menu.add');
    }

    public function store(Request $request)
     {   
        $id = $request->id;
        $title = $request->name;
        $thumbnail = $request->thumbnail;
        $demo = $request->demo;
        $content = $request->content;
        if ($id != 0) {
        $date = $request->d;   
        DB::table('new')
        ->where('id',$id)
        ->update([
            'title'=>$title,
            'thumbnail'=>$thumbnail,
            'demo'=>$demo,
            'content'=>$content,
            'deleted'=>0,
            'created_at'=> $date,
            'updated_at' => date('Y-m-d H:i:s')
        ]);  
        }else{
        DB::table('new')->insert([
            'title'=>$title,
            'thumbnail'=>$thumbnail,
            'demo'=>$demo,
            'content'=>$content,
            'deleted'=>0,
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);   
    }

        return redirect()->route('menus.index');   
    }

    public function edit(Request $request){
        $id = 0;
        $title = $thumbnail = $demo = $content = $created_at = "";
        if (isset($id) && $request->id >0) {
            $id = $request->id;
            $ca = DB::table('new')->where('id', $id)->get();
            if ($ca != null && count($ca)>0) {
                $title = $ca[0]->title;
                $thumbnail = $ca[0]->thumbnail;
                $demo = $ca[0]->demo;
                $content = $ca[0]->content;
                $created_at = $ca[0]->created_at;
            }
        }
        return view('menu.add')->with([
            'id' => $id,
            'title' => $title,
            'thumbnail' => $thumbnail,
            'demo' => $demo,
            'content' => $content,
            'created_at' => $created_at
        ]); 
    }

    public function delete(Request $request){
        $id = $request->id;
        $title = $thumbnail = $demo = $content = $created_at = "";
        $ca = DB::table('new')->where('id', $id)->get();
                $title = $ca[0]->title;
                $thumbnail = $ca[0]->thumbnail;
                $demo = $ca[0]->demo;
                $content = $ca[0]->content;
                $created_at = $ca[0]->created_at;
        DB::table('new')
        ->where('id',$id)
        ->update([
            'title'=>$title,
            'thumbnail'=>$thumbnail,
            'demo'=>$demo,
            'content'=>$content,
            'deleted'=>1,
            'created_at'=> $created_at,
            'updated_at' => date('Y-m-d H:i:s')
        ]);  
        return redirect()->route('menus.index'); 
    }
        public function khoiphuc(Request $request){
                $id = $request->id;
        $title = $thumbnail = $demo = $content = $created_at = "";
        $ca = DB::table('new')->where('id', $id)->get();
                $title = $ca[0]->title;
                $thumbnail = $ca[0]->thumbnail;
                $demo = $ca[0]->demo;
                $content = $ca[0]->content;
                $created_at = $ca[0]->created_at;
        DB::table('new')
        ->where('id',$id)
        ->update([
            'title'=>$title,
            'thumbnail'=>$thumbnail,
            'demo'=>$demo,
            'content'=>$content,
            'deleted'=>0,
            'created_at'=> $created_at,
            'updated_at' => date('Y-m-d H:i:s')
        ]);  
        return redirect()->route('menus.index'); 
    }

    public function delete_ht(Request $request){
        $id = $request->id;
        DB::table('new')
        ->where('id',$id)
        ->delete();
        return redirect()->route('menus.index');   
    }

}
