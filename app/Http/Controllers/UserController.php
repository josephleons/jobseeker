<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Role;
use App\Models\Status;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
      
    }
    
   
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.add_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required|max:20',
            'email'=>'required|email|unique:users',
            'username'=>'required|unique:users|max:8',
            'password'=>'required|min:8|same:confirmPassword',
                      
        ]);
        DB::beginTransaction();
        // create posty
        // $user_id=auth()->user()->id;
        try{
            $auto_role="Client";
            $user = new User;
            $user->name=$request->input('name');
            $user->phone=$request->input('phone');
            $user->email=$request->input('email');
            $user->username=$request->input('username');
            $user->password=Hash::make($request->input('password'));
            $user->save();


            $role = new Role;
            $role->name=$auto_role;
            $role->user_id=$user->id;
            $role->save(); 
            
            DB::commit();
            return redirect('/users')->with('success','User Added ');
           
        }catch(Exception $e){
            DB::rollback();
            return redirect()->back();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
    public function profile(){
        return view('users.profile');
    }

}
