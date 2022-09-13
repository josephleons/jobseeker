<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
class RegisterController extends Controller
{
    public function index(){
        return view('verify.register');
    }

    public function register(Request $request){
        // self register
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required|max:20',
            'email'=>'required|email|unique:users',
            'username'=>'required|unique:users|max:8',
            'password'=>'required|min:8|same:confirmPassword'
                            
        ]);
        DB::beginTransaction();
        try{
            // create to users table
            $auto_role="Normal user";
            $user = new User;
            $user->name=$request->input('name');
            $user->phone=$request->input('phone');
            $user->email=$request->input('email');
            $user->username=$request->input('username');
            $user->password=Hash::make($request->input('password'));
            // $user->status=$statu;
            $user->save();

            $role = new Role;
            $role->name=$auto_role;
            $role->user_id=$user->id;
            $role->save(); 
            
            DB::commit();
            // DB::table('users')->insert($user);
            return redirect('/login')->with('success','User Account Created :)','success');
        }catch(Exception $e){
            DB::rollback();
            return redirect('/register')->route('Fail Register Account');
        }
       
      }
}
