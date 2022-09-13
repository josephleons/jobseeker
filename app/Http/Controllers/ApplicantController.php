<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Applicant;
use App\Models\Attachment;
use App\Models\User;

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
        // $applicants = DB::select('select * from applicants');
        // return view('applicant.index',['applicants'=>$applicants]);
            $users =User::all();
            return view('applicant.index',compact('users'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applicant.applicant_register');
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
            'firstname'=>'required',
            'middlename'=>'required',
            'lastname'=>'required',
            'gender'=>'required',
            'photo'=>'required',
            'certificate'=>'required',
            'letter'=>'required',
            'cv'=>'required',
        ]);
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
        if($request->hasFile('certificate')){
            // get filename to upload
            $filenameWithExt =$request->file('letter')->getClientOriginalName();
            // get just filename
            $Filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // GET JUST EXTENT
            $exten =$request->file('certificate')->getClientOriginalExtension();

            // fileToSore
            $fileNameToStore = $Filename.'_'.time().'.'.$exten;
            $path=$request->file('certificate')->storeAs('logImage', $fileNameToStore);

        }else{
            $fileNameToStore ='noimage.jpeg';
        }
        // cv
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
        // cv
        if($request->hasFile('cv')){
            // get filename to upload
            $filenameWithExt =$request->file('cv')->getClientOriginalName();
            // get just filename
            $Filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // GET JUST EXTENT
            $exten =$request->file('cv')->getClientOriginalExtension();

            // fileToSore
            $fileNameToStore = $Filename.'_'.time().'.'.$exten;
            $path=$request->file('cv')->storeAs('logImage', $fileNameToStore);

        }else{
            $fileNameToStore ='noimage.jpeg';
        }
        // create posty
         $applicants = new Applicant;
         $applicants->firstname=$request->input('firstname');
         $applicants->middlename=$request->input('middlename');
         $applicants->lastname=$request->input('lastname');
         $applicants->gender=$request->input('gender');
         $applicants->users_id=auth()->user()->id;
         $applicants->save();

        // create attachment to applicants
         $attachments = new Attachment;
         $attachments->photo=$fileNameToStore;
         $attachments->certificate=$fileNameToStore;
         $attachments->letter=$fileNameToStore;
         $attachments->cv=$fileNameToStore;
         $attachments->applicants_id=$applicants->id;
         $attachments->save();
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

        // $user_id=auth()->user()->id;
        // $user =User::find($user_id);
        // return view('applicant.myapp')->with('applicant',$user->applicant);
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

    public function country(){
        $districts = District::all();
        $regions = Region::all();
        return view('applicant.applicant_register',compact('districts','regions'));
    }
}
