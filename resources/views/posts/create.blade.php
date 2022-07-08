@extends('layouts.app')

@section('content')
{{-- <div class="container"> --}}
<div class="row mt-5">
    <div class="col-md-6">
        <h2 class="lead">Add Post</h2>
        {!! Form::open(['Action' => 'PostsController@store','Method' =>'POST','enctype'=>'multipart/form-data']) !!}
                @csrf
                <div class="col-md-8">
                <div class="form-group">
                    {{Form::label('title','Job Title')}}
                    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
                </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        {{Form::label('location','Job Location')}}
                        {{Form::text('location','',['class'=>'form-control','placeholder'=>'Job Location'])}}
                    </div>
                    </div>
                <div class="col-md-8">
                <div class="form-group">
                    {{Form::label('body','DUTIES/DESCRIPTION')}}
                    {{Form::textarea('body','',['id'=>'ckeditor','class'=>'form-group','placeholder'=>'Body'])}}
                    
                </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {{Form::label('max_applicant','Maximum applicant')}}
                        {{Form::number('max_applicant','',['class'=>'form-control','placeholder'=>'Maximum applicants'])}}
                    </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            {{Form::label('company_name','Company Name')}}
                            {{Form::text('company_name','',['class'=>'form-control'])}}
                        </div>
                        </div>
                    <div class="col-md-12">
                    <div class="form-group">
                        {{Form::label('company_logo','Upload Logo')}}</br>
                        {{Form::file ('hasImage')}}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="card-header" style="color:#F56565">
                        <span class="lead"><strong>price<strong></span>
                        <span class="lead" style="float: right ;color:#F56565"><strong>$389</strong></span></div>
                    </div>
                </div>
                <div class="btn" style='color:#F56565'>
                    {{Form::submit('submit',['class'=>'cus btn btn-danger form-control'])}}
                    </div>
            {!! Form::close() !!}
            </div> 
            {{-- forright row --}}
            <div class="col-md-6  ml-5">
                <div class="col-md-12 col-sm-12">
                 <img src="{{url('assets/images/world.jpg')}}"><small>World Trade Organization patners</small>
                </div>
            </div>
        </div>
@endsection