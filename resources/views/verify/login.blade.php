@extends('layouts.login')
@section('content')
{{-- jumbotron --}}
<div class="conatiner">
    <div class="row mt-5">
        <div class="col-lg-6">
            <div class="text-center p-5">
                {{-- <small class="title">JoBseeK</small> --}}
                <p class="text-white fs-1"><strong class="text-capitalize">Jobseek portal</strong></p>
                <small class="text-capitalize fs-4 text-white">By
                    Login into the jobseek portal you accept Terms and Conditions of the jobseek application</small>
                <div class="mt-5 col-md-12">
                    <div class="d-flex">
                        <div>
                            <div class="shadow p-2 mx-3 mb-3 bg-body rounded-circle">
                                <i class="bi bi-lightbulb" style="color:#DB851D"></i>
                            </div>
                        </div>
                        <div class="pl-3">
                            <p class="fs-5 text-white">
                                Job advertise
                            </p>
                        </div>
                    </div>
                    <hr class="text-danger">
                    <div class="d-flex">
                        <div>
                            <div class="shadow-sm p-2 mx-3 mb-3 bg-body rounded-circle">
                                <i class="bi bi-lightbulb" style="color:#DB851D"></i>
                            </div>
                        </div>
                        <div class="pl-3">
                            <p class="fs-5 text-white">
                                User Registration
                            </p>
                        </div>
                    </div>
                    <hr class="text-danger">
                    <div class="d-flex px-2">
                        <div>
                            <div class="shadow-sm p-2 mx-3 mb-5 bg-body rounded-circle text-primary">
                                <i class="bi bi-lightbulb" style="color:#DB851D"></i>
                            </div>
                        </div>
                        <div class="ml-3">
                            <p class="fs-5 text-white">
                                Company Job host
                            </p>
                        </div>

                    </div>
                    <hr class="text-danger">
                    {{-- <span class="lead" style="font-style: italic;font-size:12px">
                        <i class="bi bi-lightbulb"></i><small>Adobe.limd company</small>
                        <img src="{{url('assets/images/world.jpg')}}"><small>World Trade Organization patners</small>
                        <img src="{{url('assets/images/banco.jpg')}}"><small>bancorp patners</small>
                    </span> --}}
                </div>
            </div>
        </div>
        {{-- jumbotron --}}
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 m-auto">
            @include('inc.messages')
            <div class="card shadow ">
                <div class="mx-auto">
                    <i class="bi bi-person-circle " style="color:#2D3748;font-size:36px"></i>
                    {{-- <img src="{{url('assets/images/dashboard.jpg')}}"> --}}
                </div>
                <hr>
                <div class="card-body">
                    {!! Form::open(['Action' => 'PostsController@index','Method' =>'POST']) !!}
                    @csrf
                    <div class="d-flex text-muted pt-5">
                        <h3 class="fs-5 card-title-text mx-auto" style="font-family:'Times New Roman">
                            Sign in with credentials
                        </h3>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group p-2 mt-2">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email address'])}}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group  p-2 mt-4 ">
                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                <i class="bi bi-lock"></i>
                            </span>
                            {{Form::password('password', ['class' => 'form-control','placeholder'=>'Password'])}}
                            {{-- {{Form::text('password','',['class'=>'form-control','placeholder'=>'Password'])}} --}}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group  p-2 mt-4">
                            {{Form::submit('Login',['class'=>'btn btn-danger form-control'])}}
                        </div>
                        {{-- footer --}}
                        <small class="title fs-6"> Forgot your password ?</small>
                        <div class="mt-2 fs-6">
                            <p class="fs-6 text-muted text-lowercase"> No account ? Use link to Create account<a href="/register">
                                    Create account</a></p>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <div style="padding-top:100%">
        @include("inc.footer")
    </div>

</div>
@endsection