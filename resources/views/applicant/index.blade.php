@extends('layouts.admin')
@section('content')
<br>
<div class="card shadow ml-4 mt-5 ml-5">
    <div class="card-header">
        <div class="d-flex justify-content-end">
            <ul class="nav text-right">
                <li class="nav-item" role="presentation">
                    <a href="#adduser" type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#exampleModal">
                    <i class="bi bi-plus-circle-dotted">Add new records</i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead class="table-light">
                    <tr>
                        <th>Index</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Physical address</th>
                        <th>Photo</th>
                        <th>Attachment</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($applicants) > 0)
                    @foreach($applicants as $applicant)
                    <tr>
                        <td>{{ $applicant->index}}</td>
                        <td>{{ $applicant->firstname}}{{ $applicant->middlename}}{{ $applicant->lastname}}</td>
                        <td>{{ $applicant->email}}</td>
                        <td>{{ $applicant->mobile}}</td>
                        <td>{{ $applicant->physical}}</td>
                        <td>{{ $applicant->photo}}</td>
                        <td>{{ $applicant->attachment}}</td>
                        <td>
                            <div class="d-flex">
                                <div class="fs-6">
                                    <a class="mr-2" style="color:#30BCED"
                                        href="{{url('edit/'.$applicant->index)}}">View</a>
                                </div>
                                <div class="fs-6">
                                    <a class="mr-2" style="color:#1a8f24"
                                        href="{{url('edit/'.$applicant->index)}}">Edit</a>
                                </div>
                                <div class="fs-6">
                                    <a class="mr-2" style="color:#F56565;"
                                        onclick="return confirm('Are you sure you wnat to delete this entry?')"
                                        href="{{url('delete/'.$applicant->index)}}">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white" id="exampleModalLabel">New Applicant</h5>
                <button type="button" class="btn-close bg-danger" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['Action' => 'ApplicantController@index','Method' =>'POST']) !!}
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Client Name :</h5>
                        <p class="card-text"></p>
                    </div>
                    <ul class="p-5 card-body list-group list-group-flush">
                        <div class="row">
                            <div class="col-md-6">
                                {{Form::label('Index No')}}
                                <div class="form-group">
                                    {{Form::text('index','',['class'=>'list-group-item',
                                    'placeholder'=>'S5036-0076-2015'])}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text">
                                {{Form::label('Fullname','FullName')}}
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {{Form::text('firstname','',['class'=>'list-group-item','placeholder'=>'Firstname'])}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {{Form::text('middlename','',['class'=>'list-group-item','placeholder'=>'Middlename'])}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {{Form::text('lastname','',['class'=>'list-group-item','placeholder'=>'Lastname'])}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{Form::label('Username')}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{Form::text('username','',['class'=>'form-control','placeholder'=>'username'])}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{Form::password('password',['class'=>'form-control','placeholder'=>'password'])}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{Form::label('Address','Address')}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{Form::email('email','',['class'=>'form-control','placeholder'=>'Email address'])}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{Form::tel('mobile','',['class'=>'form-control','placeholder'=>'mobile'])}}
                                </div>
                            </div>
                        </div>
                        {{--end row--}}
                        <div class="row">
                            <div class="col-md-6">
                                {{Form::label('physical address')}}
                                <div class="form-group">
                                    {{Form::text('physical','',['class'=>'form-control','placeholder'=>'physical'])}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-images"></i></span>
                                    {{Form::file('photo',['class'=>'form-control','placeholder'=>'Picture'])}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="bi bi-paperclip"></i></span>
                                    {{Form::file('attachment',['class'=>'form-control','placeholder'=>'Certificate'])}}
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer col-md-12 justify-content-center ">
                            {{Form::submit('Save',['class'=>'cus btn btn-danger form-control'])}}
                        </div>
                        {!! Form::close() !!}
                    </ul>
                </div>



            </div>
        </div>
    </div>
</div>
{{-- profile user --}}
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
        <div class="card shadow ml-4 mt-5 ml-5">
            <div class="card-body">
                <h5 class="card-title fs-4"><i class="bi bi-card-checklist m-3" style="color:#F56565;"></i>Applicant:
                    Particular Information</h5>
                <p class="card-text"></p>
            </div>
            <ul class="p-5 card-body list-group list-group-flush">
                <div class="row">
                    {{-- profile left col --}}
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xm-12">
                        <div class="col-md-12">
                            <div class="text-capitalize text-center ">
                                <i class="bi bi-person-circle fs-1 shadow rounded-circle"></i>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-capitalize">
                                <h4 class="fs-4">
                                    {{-- <center>{{$applicant->firstname}}<center>
                                            {{$applicant->middlename}}{{$applicant->lastname}} --}}
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <div class="justify-content-center d-flex">
                                {{-- style="color:#F56565;" --}}
                                {{-- style="color:#30BCED" --}}
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb" style="text-decoration:none">
                                        {{-- <a class="breadcrumb-item mr-2"
                                            href="{{url('edit/'.$applicant->index)}}">Edit</a> --}}
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    {{-- center vertical ruler --}}
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xm-1">
                        <div class="d-flex" style="height: 100%;">
                            <div class="vr text-black"></div>
                        </div>
                    </div>
                    {{-- right contents --}}
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xm-12">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-start">Index No:
                                <div class="m-auto">
                                    {{-- <div class="fw-bold">{{$applicant->index}}</div> --}}
                                </div>
                                <span class="badge bg-block rounded-pill" style="background-color: #F56565">14</span>
                            </li>
                            <li class="list-group-item  fw-bold d-flex justify-content-between align-items-start">Email
                                address
                                <div class="m-auto">
                                    {{-- <div class="fs-5">{{$applicant->email}}</div> --}}
                                </div>
                                <span class="badge bg-block rounded-pill" style="background-color: #F56565">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                Mobile
                                <div class="m-auto">
                                    {{-- <div class="fs-5">{{$applicant->mobile}}</div> --}}
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">Physical
                                address :
                                <div class="m-auto">
                                    {{-- <div class="fs-5">{{$applicant->physical}}</div> --}}
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                Photo :
                                <div class="m-auto">
                                    {{-- <a href="{{url('edit/'.$applicant->photo)}}">{{$applicant->photo}}</a> --}}
                                </div>
                                <span class="badge bg-block rounded-pill" style="background-color: #F56565">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">Attachment:
                                <div class="ml-2">
                                    {{-- <a href="{{url('edit/'.$applicant->attachment)}}">{{$applicant->attachment}}</a> --}}
                                </div>
                                <span class="badge bg-block rounded-pill" style="background-color: #F56565">4</span>
                            </li>
                            <li class="list-group-item"></li>
                        </ul>
                        {{-- edit and delete button --}}
                        <div class="justify-content-center d-flex">

                            {{-- style="color:#F56565;" --}}
                            {{-- style="color:#30BCED" --}}
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="text-decoration:none">
                                    {{-- <a class="breadcrumb-item mr-2" href="{{url('edit/'.$applicant->index)}}">Edit</a> --}}
                                    <a class="breadcrumb-item mr-2"
                                        onclick="return confirm('Are you sure you wnat to delete this entry?')"
                                        {{-- href="{{url('delete/'.$applicant->index)}}">Delete</a> --}}
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>
{{--
</div> --}}





{{-- <footer></footer> --}}
<div class="row" style="padding-top:100%">
    @include("inc.footer")
</div>

@endsection