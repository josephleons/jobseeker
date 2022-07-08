<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    //   $companys = Company::orderBy('title','desc')->get();
    //     return view('company.index')->with('companys', $companys);
    //     return view('company.index');
        $user_id =auth()->user()->id;
        $user=User::find($user_id);
         return view('company.index')->with('companys',$user->companys);
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
            'type'=>'required',
            'regNo'=>'required',
            'title'=>'required',
            'email'=>'required',
            'desc'=>'required',
            'location'=>'required',
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
        // create post
        $companys=new Company;
        $companys->type=$request->input('type');
        $companys->regNo=$request->input('regNo');
        $companys->title=$request->input('title');
        $companys->email=$request->input('email');
        $companys->desc=$request->input('desc');
        $companys->location=$request->input('location');
        $companys->logo = $fileNameToStore;
        $company->user_id =auth()->user()->id;
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
        return view('company.show')->with('comp', $comp);
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
