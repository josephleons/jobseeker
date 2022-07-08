<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
use App\Models\District;
use App\Models\Region;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return interface for store info
        $user_id=auth()->user()->id;
        $user =User::find($user_id);
        return view('employee.myapp')->with('employee',$user->employee);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $this->validate($request,[
            'index'=>'required',
            'firstname'=>'required',
            'middlename'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'physical'=>'required',
            'gender'=>'required',
            'nida'=>'required',
            'region'=>'required',
            'district'=>'required',
            'photo'=>'image|nullable|max:1999',
            'letter'=>'image|nullable|max:1999',
            'other'=>'image|nullable|max:1999',
            
                      
        ]);
        
        // dd($request->all());
        // handle file to upload
        if($request->hasFile('photo')){
            // get filename to upload
            $filenameWithExt =$request->file('photo')->getClientOriginalName();
            // get just filename
            $Filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // GET JUST EXTENT
            $exten =$request->file('photo')->getClientOriginalExtension();

            // fileToSore
            $fileNameToStore = $Filename.'_'.time().'.'.$exten;
            $path=$request->file('photo')->storeAs('logImage', $fileNameToStore);

        }else{
            $fileNameToStore ='noimage.jpeg';
        }
        // letter
        if($request->hasFile('letter')){
            // get filename to upload
            $filenameWithExt =$request->file('letter')->getClientOriginalName();
            // get just filename
            $Filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // GET JUST EXTENT
            $exten =$request->file('letter')->getClientOriginalExtension();

            // fileToSore
            $fileNameToStore = $Filename.'_'.time().'.'.$exten;
            $path=$request->file('letter')->storeAs('logImage', $fileNameToStore);

        }else{
            $fileNameToStore ='noimage.jpeg';
        }
        // other
        if($request->hasFile('other')){
            // get filename to upload
            $filenameWithExt =$request->file('other')->getClientOriginalName();
            // get just filename
            $Filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // GET JUST EXTENT
            $exten =$request->file('other')->getClientOriginalExtension();

            // fileToSore
            $fileNameToStore = $Filename.'_'.time().'.'.$exten;
            $path=$request->file('other')->storeAs('logImage', $fileNameToStore);

        }else{
            $fileNameToStore ='noimage.jpeg';
        }
        // create posty
         $employee = new Employee;
         $employee->index=$request->input('index');
         $employee->firstname=$request->input('firstname');
         $employee->middlename=$request->input('middlename');
         $employee->lastname=$request->input('lastname');
         $employee->email=$request->input('email');
         $employee->mobile=$request->input('mobile');
         $employee->physical=$request->input('physical');
         $employee->gender=$request->input('gender');
         $employee->nida=$request->input('nida');
         $employee->region=$request->input('region');
         $employee->district=$request->input('district');
         $employee->photo=$fileNameToStore;
         $employee->letter=$fileNameToStore;
         $employee->other=$fileNameToStore;
         $employee->user_id=auth()->user()->id;
         $employee->save();

        return redirect('/myapp')->with('success','Congratulation you success submit your application information');
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

    public function profile(){
        return view('employee.profile');
    }

    public function country(){
        $districts = District::all();
        $regions = Region::all();
        return view('employee.create',compact('districts','regions'));
    }

    // public function companys(){
    //     $companies = Company::all();
    //     $employees = Employee::all();
    //     return view('allocate.show',compact( 'companies','employees'));
    // }
   
    // public function usernav(){
    //     $user_id=auth()->user()->id;
    //     $user =User::find($user_id);
    //     return view('inc.usernav')->with('employee',$user->employee);
    // }
}
