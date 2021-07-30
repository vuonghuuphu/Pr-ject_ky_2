<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    //
     public function index(){
        return view('bill.index');
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
