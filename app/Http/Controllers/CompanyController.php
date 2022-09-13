<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use App\Models\Department;
use App\Models\Address;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         // return all company instance
      $companys = Company::orderBy('name','desc')->get();
        return view('company.index')->with('companys', $companys);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('company.index');
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
            'registration'=>'required|unique:companies',
            'location'=>'required',
            'description'=>'required',
            'logo'=>'image|nullable|max:1999',
            
        ]);
         // handle file upload
         if($request->hasFile('logo')){
            // get filename to upload
            $filenameWithExt =$request->file('logo')->getClientOriginalName();
            // get just filename
            $Filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // GET JUST EXTENT
            $exten =$request->file('logo')->getClientOriginalExtension();

            // fileToSore
            $fileNameToStore = $Filename.'_'.time().'.'.$exten;
            $path=$request->file('logo')->storeAs('logImage', $fileNameToStore);

        }else{
            $fileNameToStore ='noimage.jpeg';
        }

        // register company
        $companys=new Company;
        $companys->name=$request->input('name');
        $companys->registration=$request->input('registration');
        $companys->location=$request->input('location');
        $companys->description=$request->input('description');
        $companys->logo = $fileNameToStore;
        if(auth()->user()){
            $companys->users_id=auth()->user()->id;
        }else{
            abort('404');
        }
        $companys->save();
        return redirect('/company')->with('success','Company Registered');
      
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
        $comp  = Company ::find($id);
        return view('company.index')->with('comp', $comp);
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
        $comp = new Company();
        $result=$comp->find($id);
        $result->delete();

        return redirect('/company')->with('success' ,'records Remove');
        //
    }
   
}
