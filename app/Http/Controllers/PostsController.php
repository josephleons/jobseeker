<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // display job list
        // $posts =Post::orderBy('title','desc')->get();
        // $posts =Post::orderBy('title','desc')->paginate(1);
        // return view('posts.index')->with('posts',$posts);
        // display indivudual post for logged user
        $user_id =auth()->user()->id;
        $user=User::find($user_id);
         return view('posts.index')->with('posts',$user->posts);
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
        // dd($request->all());
        $status="pending";
        $this->validate($request,[
                'type'=>'required',
                'title'=>'required',
                'regNo'=>'required',
                'desc'=>'required',
                'email'=>'required',
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
            // dd($request->all());
            // create post
            $posts=new Post;
            $posts->type=$request->input('type');
            $posts->title=$request->input('title');
            $posts->regNo=$request->input('regNo');
            $posts->email=$request->input('email');
            $posts->desc=$request->input('desc');
            $posts->location=$request->input('location');
            $posts->status= $status;
            $posts->logo = $fileNameToStore;
            $posts->user_id=auth()->user()->id;
            $posts->save();
            
            return redirect('/company')->with('success','Post Created, View Posts history to pay');
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
        $posts = Post::find($id);
        return view('posts.show')->with('posts',$posts);
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
        $this->validate($request,[
        //    if($status == 'paid'){
        //     $status ='paid'
        //    }
        
        ]);
        // create post
        $posts=Post::find($id);
        $posts->status= $status;
        $posts->save();
        return redirect('/posts')->with('success','Post update');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        
        $posts = new Post();
        $result=$posts->find($id);
        $result->delete();

        return redirect('/posts')->with('success' ,'Post Remove');
        //
    }
    // public function user(){
    //     return view('users.user_dashboard');
    // }
}
