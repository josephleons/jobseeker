<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('verify.register');
    }
    public function register(Request $request){
        $privilage="1";
        $status="active";
        $this->validate($request,[
            // 'username'=>'required',
            'email'=>'required',
            'password'=>'required'
                      
        ]);
        // create posty
        $user = new User;
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->privilage= $privilage;
        $user->status= $status;
        $user->save();

        return redirect('/login')->with('success','User Account Created');
}
        // return view('verify.register');
}

