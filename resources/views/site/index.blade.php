@extends('layouts.app')
@section('content')
{{-- <div class="container"> --}}
<div class="row">
    <div class="p-5 col-lg-2 col-md-2 col-sm-1 col-sm-12" style="margin-top:130px">
        <img src="{{url('assets/images/dashboard.jpg')}}"><small>Adobe.limd company</small>
    </div>
    <div class="col-md-8">
        <div class="text-center p-5">
            <small class="title">JoBseeK</small>
            <p style="font-size:36px;color:#2D3748"><strong>The official Jobseek portal</strong></p>
            <small class="text-muted" style="font-size:12px;text-transform:capitalize;font-family:Tahoma">since
                2022,</br>
                the jobseek portal board connect the best employer
                company to candidate with talent</small>
            <div class="mt-2 col-md-12" style="font-size:18px">
                <span class="lead" style="font-style: italic;font-size:12px">
                    <img src="{{url('assets/images/dashboard.jpg')}}"><small>Adobe.limd company</small>
                    <img src="{{url('assets/images/world.jpg')}}"><small>World Trade Organization patners</small>
                    <img src="{{url('assets/images/banco.jpg')}}"><small>bancorp patners</small>
                </span>
            </div>
        </div>
    </div>
    <div class="p-5 col-lg-2 col-md-2" style="margin-top:130px">
        <img src="{{url('assets/images/world.jpg')}}"><small>World Trade Organization patners</small>
    </div>
</div>
</br></br></br> </br>
<p class="text-centers" style="font-family:Tahoma;font-size:20px;text-align:center;text-transform:lowercase;color:#2D3748">
    all recent job each daiy by subscribe your email below!
</p>
<div class="row">
    <div class="col-md-12">
        {!!Form::open(['Action'=>'Postscontroll@store','Method'=>'POST'])!!}
        <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
            <div class="card-header">
                <span class="col-2 form-group">
                    {{Form::label('Get','Get news')}}
                    <select name="recent" class="form-group">
                        <option value="I">Instant</option>
                        <option value="W">Weekly</option>
                    </select>
                </span>
                <span class="ins col-md-8 px-3">
                    {{Form::label('email','Email of all new Job',['size'=>'100%'])}}
                    {{Form::email('email','',['class'=>'form-group','placeholder'=>'Email Address'])}}
                </span>
                <span class="col-lg-2 col-md-2 col-sm-2 col-xm-2">
                    {{Form::submit('submit',['class'=>'cus btn btn-danger'])}}
                </span>
                <br>
            </div>
        </div>
    </div>
    {!!Form::close()!!}
</div>
{{-- row recent job? --}}
<div class="row mx-3 mt-3 mb-2">
    <div class="col-lg-6">
        <h3 class="fs-4 text-capitalize">Available recent Job Vacancies</h3>
    </div>
</div>
<div class="row mx-3">
    <div class="col-md-6 col-sm-6 col-lg-6">
        @if(count($posts) > 0 )
        @foreach ($posts as $post)
        <div class="card">
            <div class="card-header border border-info">
                <div class="nav-item d-flex">
                    <div>
                        <img style="width:50px" src="logImage/{{$post->hasImage}}">
                    </div>
                    <div class="mt-4 pl-3">
                        <li class="nav-link text-black">
                            POST: {{$post->title}}
                        </li>
                        <li class="nav-link text-black">
                            EMPLOYER: {{$post->company_name}}
                        </li>
                        <li class="nav-link text-black">
                            <i class="bi bi-geo-alt-fill" style="color:#F56565;"></i> {{$post->location}}
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <br>
        @endforeach
        @else
        <div class="text-capitalize">
            <h3 class="fs-5 alert alert-danger">No post</h3>
        </div>
        @endif
    </div>
    {{-- left job list --}}
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Available Job Vacancies</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        @if(count($posts) > 0 )
                        @foreach ($posts as $post)
                        <thead class="table-light">
                            <tr class="text-dark" style="text-transform: capitalize;font-size:14px;">
                                <th>Description </th>
                                <th>Closing Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td><strong>POST:</strong> {{$post->title}} <br><strong>EMPLOYER:</strong>
                                {{$post->company_name}}
                                <br><a class="text-info" href="{{url('view/'.$post->id)}}">View More</a>
                            </td>
                            <td class="text-black">{{$post->created_at}}<br><a class="text-info" href="/login"><i class="bi bi-key"></i>Login to
                                    Apply</a>
                            </td>
                        </tbody>
                        @endforeach
                        {{$post->paginate()}}
                        @else
                        <div class="col-6">
                            <h3 class="fs-5 alert alert-danger">No post</h3>
                        </div>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</br>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
        <div class="card shadow ml-4 mt-5 ml-5">
            <div class="card-header">
                <h5 class="card-title fs-4"><i class="bi bi-person-circle shadow rounded-circle m-3" style="color:#F56565;"></i>Comments</h5>
            </div>
            <div class="p-4 card-body list-group list-group-flush">
                <div class="row">
                    {{-- profile left col --}}
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xm-3">
                        {{-- @if(count($feedbacks) > 0 )
                        @foreach ($feedbacks as $feedback) --}}
                       
                        <div class="card col-md-12">
                            {{-- @if(Auth::guest()) --}}
                            <div class="card-image text-center pt-3">
                                Comment are hidden
                                {{-- <img style="width:50px" class="shadow rounded-circle m-3" src="logImage/{{$post->hasImage}}"><br> --}}
                            </div>
                            {{-- @else --}}
                            <div class="card-title">
                                <h4 class="fs-6 text-center text-capitalize" style="color:#2D3748">
                                </h4>
                            </div>
                            <div class="card-body" style="background-color: #F1F6F9">
                                {{-- <p class="text-capitalize text-black">{{$feedback->message}}</p><br> --}}
                                {{-- <small class="fs-6 text-capitalize text-black">{{$feedback->updated_at}}</small> --}}
                            </div>
                        </div>
                        {{-- @endif --}}
                        {{-- space btn card coomment --}}<br>
                        {{-- @endforeach
                        @else --}}
                        {{-- <div class="col-6">
                            <h3 class="fs-5 alert alert-danger">No comment available</h3>
                        </div> --}}
                        {{-- @endif --}}

                    </div>
                    {{-- center vertical ruler --}}
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xm-1">
                        <div class="d-flex" style="height: 100%;">
                            <div class="vr text-black"></div>
                        </div>
                    </div>
                    {{-- right contents --}}
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xm-8">
                        <p class="lead fs-5"></p>
                        <div class="d-flex justify-content-center">
                            <h3 class="fs-5 font-monospace " style="color:#2D3748">
                                Write your comment in short description
                                *</h3>
                            <hr>
                        </div>
                        <div class="row pt-2 d-flex justify-content-left">
                            <div class="col-md-12">
                                {!! Form::open(['Action' => 'FeedbackController@store','Method'
                                =>'POST','enctype'=>'multipart/form-data']) !!}
                                @csrf
                                <div class="col-lg-6 col-md-10 col-sm-8 col-xm-12 m-4">
                                    Email address
                                    {{Form::email('email','',['class'=>'form-control border
                                        border-info','placeholder'=>'Email*'])}}
                                </div>
                                <div class="col-lg-6 col-md-10 col-sm-8 col-xm-12 m-4">
                                    Subject
                                    {{Form::text('subject','',['class'=>'form-control border
                                        border-info','placeholder'=>'Subject*'])}}
                                </div>
                                <div class="col-md-10  m-4">
                                    Message
                                    {{Form::textarea('message','',['class'=>'form-control border border-info',
                                        'placeholder'=>'Message*','rows'=>'4'])}}
                                </div>
                                <div class="col-4  m-4">
                                    {{Form::submit('submit',['class'=>'form-control cus btn btn-danger'])}}
                                </div>
                                {!!Form::close()!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- how to apply instruction --}}
<div class="row mt-5 d-flex">
    <div class="col-md-4">
        <div class="text-center">
            <p class="text-capitalize text-black">How to apply ?</p>
            <hr>
        </div>
        <div class="d-flex px-2">
            <div>
                <div class="shadow p-2 mx-3 mb-3 bg-body rounded-circle">
                    <i class="bi bi-patch-question-fill" style="color:#DB851D"></i>
                </div>
            </div>
            <div class="fs-6 lead">
                <ul style="color:#30BCED">
                    <li>Register to jobseek ajira port/li>
                    <li>using email for login into account</li>
                    <li>After create account login and fill your information correct</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="text-center">
            <p class="text-capitalize text-black">applicants Registration</p>
            <hr>
        </div>
        <div class="d-flex px-2">
            <div>
                <div class="shadow p-2 mx-3 mb-3 bg-body rounded-circle">
                    <i class="bi bi-lightbulb" style="color:#DB851D"></i>
                </div>
            </div>
            <div class="fs-6 lead">
                <ul style="color:#30BCED">
                    <li>Using your NIDA to apply for job</li>
                    <li>provide current CV</li>
                    <li>After create account login and fill your information correct</li>
                </ul>
            </div>
        </div>
    </div>

</div>
{{-- <footer></footer> --}}
<div class="row" style="padding-top:100%">
    @include("inc.footer")
</div>

</div>

@endsection
