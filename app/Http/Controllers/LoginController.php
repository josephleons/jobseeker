<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index(){
        return view('verify.login');
    }
    public function login(Request $request){
        
        $valid = $request->validate([
            'email'=>'required',
            'password'=>'required',
           
        ]);
       
        if(Auth::attempt($valid)){
            $request->session()->regenerate();
                return redirect()->intended('/dashboard');       
        }else{
            return back()->withErrors(
                ['email'=>'The provide credential do not match our records']
            );
        }
        
       
    }
}
