<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\User;

class LoginController extends Controller
{
    public function create()
    {
        
        return view('auth.login');
    }

    public function store(Request $request)
    {
         $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
         
        $validated = $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6|max:30',
        ]);
        

        if (Auth::attempt($arr)) {

            return redirect()->to('home');
        } else {

            dd('tài khoản và mật khẩu chưa chính xác');
        }    
    }
    public function add(){
        return view('auth.add');
    }

    public function post(Request $request){
         
        $validated = $request->validate([
        'name' => 'required|min:6|max:30|alpha',
        'email' => 'required|email',
        'password' => 'required|min:6|max:30',
        'password_cf' =>'required|same:password',
        ]);

        $user = new User();
        $user->name = $request->name; 
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('home');
    }
}
