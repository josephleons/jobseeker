<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allocate;
use App\Models\Employee;
use App\Models\Company;
use App\Models\User;
use App\Models\Applicant;

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
                if(auth()->user()) {
                $applicant_id=auth()->user()->id;
                $applicants =Applicant::find($applicant_id);
                return view('allocate.allocateList')->with('allocations',$applicants->allocations);
             }else{
                 abort('404');
             }
           
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
            'gender'=>'required',
            'middlename'=>'required',
            'allocateTo'=>'required',
          
       ]);

       $allocate =new Allocate;
       $allocate->gender=$request->input('gender');
       $allocate->allocateTo=$request->input('allocateTo');
       $allocate->middlename=$request->input('middlename');
       $allocate->user_id=auth()->user()->id;
       $allocate->save();
       return redirect('/allocate')->with('success' ,'Employee Allocated success');
    
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
         $employees = Employee::find($id);
         return view('allocate.edit')->with('employees',$employees);
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
        $this->validate($request,[
             'gender'=>'required',
             'middlename'=>'required',
             'allocateTo'=>'required',
           
        ]);

        $allocate =Allocate::find($id);
        $allocate->gender=$request->input('gender');
        $allocate->allocateTo=$request->input('allocateTo');
        $allocate->middlename=$request->input('middlename');
        $allocate->save();
        return redirect('/allocate')->with('success' ,'Employee Allocated success');
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
