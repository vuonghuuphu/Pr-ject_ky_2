<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class BillController extends Controller
{
    //
     public function index(Request $request){
        $s = $request->s; 
        $t = 0;
        if (isset($s)) {
        $t = $s;
        $list1 = DB::table('order_detail')->where('order_detail.order_id',$s)->paginate(18);   
        }else{
        $list1 = DB::table('order')->paginate(18);
        }
        return view('bill.index')->with([
                'list1' => $list1,
                'count'=> 0,
                't' => $t
            ]);    
    }

    public function create()
    {
        return view('bill.add');
    }

    public function store()
    {   
        
    }

    public function edit(){

    }

    public function delete(){

    }
}
