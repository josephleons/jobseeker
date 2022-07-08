@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row mb-3">
        <div class="col-md-6 d-flex justify-content-start ml-5">
            <ul class="nav nav-tabs mt-5">
                <li class="nav-item" role="presentation">
                    <a data-toggle="collapse" data-target="#post" href="#" style="text-decoration:none">
                        <i class="bi bi-mailbox" style="color:#F56565;"></i> View </a>
                </li>
            </ul>
        </div>
        <!-- Button trigger modal -->
        <div class="d-flex justify-content-end ml-5">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                <i class="bi bi-plus-circle-dotted" style="font-size:1em;"></i>Post
            </button>
        </div>
    </div>
    {{-- table content --}}
    <div id="post">
        <div class="row ml-3">
            <div class="col-md-12 col-sm-12 col-xm-12 ">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead class="table-light">
                            <tr class="text-dark" style="text-transform: capitalize;font-size:14px;">
                                <th>S/N</th>
                                <th>Employee</th>
                                <th>Title</th>
                                <th>Email Address</th>
                                <th>Description</th>
                                <th>Registration No:</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($posts)> 0)
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->type}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->email}}</td>
                                <td>{{$post->desc}}</td>
                                <td>{{$post->regNo}}</td>
                                <td>{{$post->location}}</td>
                                <td>{{$post->status}}</td>
                                <td>
                                    <span>
                                        <a class="d-flex mr-2" style="color:#1a8f24" href="{{url('show/'.$post->id)}}">Edit</a>
                                    </span>
                                    <span>
                                        <a class="d-flex mr-2" style="color:#F56565;" onclick="return confirm('Are you sure you wnat to delete this entry?')" href="{{url('destroy/'.$post->id)}}">Delete</a>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <p>no user data found</p>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- end-top-post-table --}}
    <div class="row m-5">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="d-flex justify-content-start col-md-12">
                <!-- Button trigger modal -->
                {{-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
          Add Post
        </button> --}}
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-info" id="exampleModalLabel" >Add New Post</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {!! Form::open(['Action' => 'PostsController@store','Method'
                                =>'POST','enctype'=>'multipart/form-data']);!!}
                                <div class="col-md-6 m-2">
                                    <div class="form-group">
                                        {{Form::label('type','Type')}}
                                        <select name="type" class="form-select" aria-label="Default select example">
                                            <option selected>---select--</option>
                                            <option value="Private Sector">Private Sector</option>
                                            <option value="Public Sector">Public Sector</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 m-2">
                                    <div class="form-group">
                                        {{Form::label('Registration No:','Registration No:')}}
                                        {{Form::text('regNo','',['class'=>'form-control','placeholder'=>'Registration No'])}}
                                    </div>
                                </div>
                                <div class="col-md-12 m-2">
                                    <div class="form-group">
                                        {{Form::label('Title','Organization Title')}}
                                        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Organization Title'])}}
                                    </div>
                                </div>
                                <div class="col-md-12 m-2">
                                    <div class="form-group">
                                        {{Form::label('location','Job Location')}}
                                        {{Form::text('location','',['class'=>'form-control','placeholder'=>'Job Location'])}}
                                    </div>
                                </div>
                                <div class="col-md-12 m-2">
                                    <div class="form-group">
                                        {{Form::label('email','Email Address')}}
                                        {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email Address'])}}
                                    </div>
                                </div>
                                <div class="col-md-6 m-2">
                                    <div class="form-group">
                                        {{Form::label('Organization Logo','Organization Logo')}}</br>
                                        {{Form::file ('logo')}}
                                    </div>
                                </div>
                                <div class="col-md-12 m-2">
                                    <div class="form-group">
                                        {{Form::label('Description','Description')}}
                                        {{Form::textarea('desc','',['id'=>'ckeditor','class'=>'form-control','placeholder'=>'Description'])}}
                                    </div>
                                </div>
                                <div class="modal-footer col-md-12 justify-content-center ">
                                    {{Form::submit('submit',['class'=>'cus btn btn-danger form-control'])}}
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row" style="padding-top:100%">
    @include("inc.footer")
</div>
@endsection
