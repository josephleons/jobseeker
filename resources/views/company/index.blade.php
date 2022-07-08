@extends('layouts.admin')

@section('content')
<div class="container-flex justify-content-center">
    <div class="row mx-5">
        <ul class="nav nav-tabs">
            <li class="nav-item" role="presentation">
                <a href="#Registered" class="nav-link" id="Registered-tab" data-toggle="collapse" type="button" role="collapse" aria-controls="Registered" aria-selected="true">Registered</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#Members" class="nav-link" id="Members-tab" data-toggle="collapse" type="button" role="collapse" aria-controls="Members" aria-selected="false">Members</a>
            </li>
            <li class="nav-item active" role="presentation">
                <a href="#Company" class="nav-link" id="Company-tab" data-toggle="collapse" type="button" role="collapse" aria-controls="Company" aria-selected="true">Company Details</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href={{url("/posts")}} class="nav-link" id="posts-tab" data-toggle="link" type="button" role="collapse" aria-controls="posts" aria-selected="true">Posts Histrory</a>
            </li>
        </ul>
    </div>
</div>
<div class="tab-content  mt-5">
    {{-- left side column --}}
    <div class="row mx-2 ">
        <div class="card shadow">
            <div class="card-body">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
                    <div class="tab-pane fade active" id="Registered" role="tabpanel" aria-labelledby="Registered-tab">
                        <div class="card-header border-dark">
                            <p class="fs-5 text-center text-muted">Company Registration Form</p>
                        </div>
                        {!! Form::open(['Action' => 'CompanyController@store','Method' =>'POST','enctype'=>'multipart/form-data'])
                        !!}
                        <div class="row">
                            <div class="col-md-4 m-2">
                                <div class="form-group">
                                    {{Form::label('type','Type')}}
                                    <select name="type" class="form-select" aria-label="Default select example">
                                        <option selected>---select--</option>
                                        <option value="Private Sector">Private Sector</option>
                                        <option value="Public Sector">Public Sector</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 m-2">
                                <div class="form-group">
                                    {{Form::label('Title','Organization Title')}}
                                    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Company Name'])}}
                                </div>
                            </div>
                            <div class="col-md-4 m-2">
                                <div class="form-group">
                                    {{Form::label('Registration No:','Registration No:')}}
                                    {{Form::text('regNo','',['class'=>'form-control','placeholder'=>'Registration No'])}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 m-2">
                                <div class="form-group">
                                    {{Form::label('email','Email Address')}}
                                    {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email Address'])}}
                                </div>
                            </div>
                            <div class="col-md-4 m-2">
                                <div class="form-group">
                                    {{Form::label('location','Physical Address')}}
                                    {{Form::text('location','',['class'=>'form-control','placeholder'=>'Company Location'])}}
                                </div>
                            </div>
                            <div class="col-md-4 m-2">
                                <div class="form-group">
                                    {{Form::label('Organization Logo','Organization Logo')}}</br>
                                    {{Form::file ('logo')}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 m-2">
                                <div class="form-group">
                                    {{Form::label('Description','Description')}}
                                    {{Form::textarea('desc','',['id'=>'ckeditor','id'=>'ckeditor','class'=>'form-control','placeholder'=>'Description'])}}
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center m-5 fs-5" style='color:#F56565'>
                            {{Form::submit('submit',['class'=>'cus btn btn-danger btn-lg'])}}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                {{-- endColmn --}}
                <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
                    <div class="tab-pane fade active" id="Members" role="tabpanel" aria-labelledby="Members-tab">
                        {{-- <div class="row">
                            <div class="container">
                                <div class="row d-flex justify-content-center mt-5">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Company Type :</h5>
                                                <p class="card-text">
                                                    Short description
                                                </p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">Company Registration Date :
                                                    {{('Y-m-d H:i:s')}}</li>
                                                <li class="list-group-item">Organization : ?></li>
                                                <li class="list-group-item">Registration Number: </li>
                                                <li class="list-group-item">Email Address: </li>
                                                <li class="list-group-item">Location: </li>
                                                <li class="list-group-item">Logo: </li>
                                                <li class="list-group-item">Payment Statu: Pending</li>
                                            </ul>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-info card-link">Payment $17</a>
                                                <a href="#" class="card-link">Another link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div> --}}
                        {{-- lefts --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
                <div class="tab-pane fade active" id="Company" role="tabpanel" aria-labelledby="Company-tab">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead class="table-light">
                                <tr class="text-dark" style="text-transform: capitalize;font-size:14px;">
                                    <th>S/N</th>
                                    <th>Type</th>
                                    <th>Organization Title</th>
                                    <th>Email Address</th>
                                    <th>Description</th>
                                    <th>Location</th>
                                    <th>Logo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($companys )> 0)
                                @foreach($companys as $comp)
                                <tr>
                                    <td>{{$comp->id}}</td>
                                    <td>{{$comp->type}}</td>
                                    <td>{{$comp->title}}</td>
                                    <td>{{$comp->email}}</td>
                                    <td>{{$comp->Description}}</td>
                                    <td>{{$comp->location}}</td>
                                    <td>{{$comp->logo}}</td>
                                    <td>
                                        <span>
                                            <a class="text-info" href="{{url('show/'. $comp->id)}}">View</a>
                                            <a onclick="return confirm('Are you sure you wnat to delete this entry?')" href="{{url('destroy/'.$comp->id)}}" style="color:#F56565">Delete
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <p>no user found</p>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- cardEnd --}}
        </div>
    </div>
</div>

@endsection
