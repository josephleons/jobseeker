<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Post;
class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts =Post::orderBy('title','desc')->get();
        // $posts =Post::orderBy('title','desc')->paginate(1);
        return view('site.index')->with('posts',$posts);
       
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
        //
        $this->validate($request,[
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);
        // create post
        $feedback=new Feedback;
        $feedback->email=$request->input('email');
        $feedback->subject=$request->input('subject');
        $feedback->message=$request->input('message');
        $feedback->save();
        return redirect('/site')->with('success','comment');
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
    public function feedback(){
        $feebacks = Feedback::orderBy('created_at','desc')->get();
        // $posts =Post::orderBy('title','desc')->paginate(1);
        return view('site.index')->with('feedbacks',$feebacks);
    }
}
