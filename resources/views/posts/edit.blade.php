@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-8">
        <h2 class="lead">Edit Post</h2>
        {!! Form::open(['Action' => ['PostsController@update', $post->id],'Method' =>'POST']) !!}
                <div class="col-md-8">
                <div class="form-group">
                    {{Form::label('title','Job Title')}}
                    {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
                </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        {{Form::label('location','Job Location')}}
                        {{Form::text('location',$post->location,['class'=>'form-control','placeholder'=>'Job Title'])}}
                    </div>
                    </div>
                <div class="col-md-8">
                <div class="form-group">
                    {{Form::label('body','DUTIES/DESCRIPTION')}}
                    {{Form::textarea('body',$post->body,['id'=>'article_ckeditor','class'=>'form-group','placeholder'=>'Body'])}}
                </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {{Form::label('max_applicant','Maximum applicant')}}
                        {{Form::number('max_applicant',$post->max_applicant,['class'=>'form-control','placeholder'=>'Maximum applicants'])}}
                    </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            {{Form::label('company_name','Company Name')}}
                            {{Form::text('company_name',$post->company,['class'=>'form-control'])}}
                        </div>
                        </div>
                    <div class="col-md-12">
                    <div class="form-group">
                        {{Form::label('company_logo','Company Logo')}}</br>
                        <input type="file" {{$post->company_logo}} name="company_logo"  class="form-group">
                    </div>
                </div>
                <div class="btn" style='color:#F56565'>
                    {{Form::submit('submit',['class'=>'cus btn btn-danger form-control'])}}
                    </div>
            {{Form::hidden('_method','PUT')}}
            {!! Form::close() !!}
            </div> 
</div>
</div>