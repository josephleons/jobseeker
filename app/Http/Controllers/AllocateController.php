<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allocate;
use App\Models\Employee;
use App\Models\Company;
use App\Models\User;

class AllocateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employee::all();
        return view('allocate.allocated')->with('employees',$employees);
    }
        public function allocateList()
        {
            $user_id=auth()->user()->id;
            $user =User::find($user_id);
            return view('allocate.allocateList')->with('allocates',$user->allocates);
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'index'=>'required',
            'fisrtname'=>'required',
            'middlename'=>'required',
            'lastname'=>'required',
            'gender'=>'required',
            'mobile'=>'required',
            'email'=>'required',
            'allocateTo'=>'required',           
        ]);

        // insert data to allocate table(models)
            $allocates->index=$request->input('index');
            $allocates->fisrtname=$request->input('fisrtname');
            $allocates->middlename=$request->input('middlename');
            $allocates->lastname=$request->input('lastname');
            $allocates->gender=$request->input('gender');
            $allocates->mobile =$request->input('mobile');
            $allocates->email=$request->input('email');
            $allocates->allocateTo=$request->input('allocate');
            $allocates->user_id=auth()->user()->id;
            $allocates->save();
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
        $employees =Employee::find($id);
        return view('allocate.show')->with('employees',$employees);
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
        //
    }
    public function companys(){
        $companies = Company::all();
        return view('allocate.show')->withCompanies($companies);
    }
}
