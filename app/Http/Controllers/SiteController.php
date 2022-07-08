<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Feedback;
use Illuminate\Http\Request;



class SiteController extends Controller
{
    public function index()
    {
        $posts =Post::orderBy('title','desc')->get();
        // $posts =Post::orderBy('title','desc')->paginate(1);
        return view('site.index')->with('posts',$posts);
        session()->put('LOGGED_IN',true);
        // return view('site.index');
    }

    public function services()
    {
        $data = array(
            'title'=>'Services',
            'services'=>['GovernemtSector','Private Sector','Intenship','Part Time']
        );
        return view('site.services')->with($data);
    }
    
    public function contact()
    {
        return view('site.contact');
    }

    public function about(){
        return view('site.about');
 
    }

    public function dashboard(){
        return view('dashboard');
    }

     public function applicant()
     {
        $applicants = Applicant::all();
        return view('users.applicant')->with('users', $applicants);
    
     }
     public function post(){
        $posts =Post::orderBy('title','desc')->get();
        // $posts =Post::orderBy('title','desc')->paginate(1);
        return view('site.index')->with('posts',$posts);
     }
   

  

}
