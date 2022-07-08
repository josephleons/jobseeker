<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    retriev using DB query bulder
        $applicants = DB::select('select * from applicants');
        return view('applicant.index',['applicants'=>$applicants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('applicant.create');
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
            'firstname'=>'required',
            'middlename'=>'required',
            'lastname'=>'required',
            'username'=>'required',
            'password'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'physical'=>'required',
            'photo'=>'image|nullable|max:1990',
            'attachment'=>'image|nullable|max:1990"',
           
                      
        ]);
        // create posty
         $applicants = new Applicant;
         $applicants->index=$request->input('index');
         $applicants->firstname=$request->input('firstname');
         $applicants->middlename=$request->input('middlename');
         $applicants->lastname=$request->input('lastname');
         $applicants->email=$request->input('email');
         $applicants->mobile=$request->input('mobile');
         $applicants->physical=$request->input('physical');
         $applicants->username=$request->input('username');
         $applicants->password=Hash::make($request->input('password'));
         $applicants->photo=$request->input('photo');
         $applicants->attachment=$request->input('attachment');
         $applicants->save();

        return redirect('/applicant')->with('success','New records is added');
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
        //
    }
}
