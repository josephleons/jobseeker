@extends('layouts.admin')
@section('content')
<div class="container-flex justify-content-center">
    <div class="row mx-5">
        <ul class="nav nav-tabs">
            <li class="nav-item" role="presentation">
                <a href="#Registered" class="nav-link" id="Registered-tab" data-toggle="tab" type="button"
                    role="collapse" aria-controls="Registered" aria-selected="true"
                    data-target="#Registered">Registered</a>
            </li>
            <li class="nav-item active" role="presentation">
                <a href="#Company" class="nav-link" id="Company-tab" data-toggle="tab" data-target="#Company"
                    type="button" role="tab" aria-controls="Company" aria-selected="true">Company Details</a>
            </li>
        </ul>
    </div>
</div>
<div class="tab-content  mt-5">
    <div class="tab-pane fade active" id="Registered" role="tabpanel" aria-labelledby="Registered-tab">
        {{-- left side column --}}
        <div class="card-header">
            <div class="row mx-2 ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
                    {{-- <div class="tab-pane fade active" id="Registered" role="tabpanel"
                        aria-labelledby="Registered-tab"> --}}
                        <p class="fs-5 text-center text-muted">Register Your Organization</p>
                        {!! Form::open(['Action' => 'CompanyController@store','Method'
                        =>'POST','enctype'=>'multipart/form-data'])
                        !!}
                        @include('inc.messages')
                        @csrf
                        <div class="row">
                            <div class="col-md-4 m-2">
                                <div class="form-group">
                                    {{Form::label('Name','Organization Name')}}
                                    {{Form::text('name','',['class'=>'form-control'])}}
                                </div>
                            </div>
                            <div class="col-md-4 m-2">
                                <div class="form-group">
                                    {{Form::label('location','Location')}}
                                    {{Form::text('location','',['class'=>'form-control'
                                    ])}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 m-2">
                                <div class="form-group">
                                    {{Form::label('Registration:','Registration No:')}}
                                    {{Form::text('registration','',['class'=>'form-control','placeholder'=>'Registration
                                    No'])}}
                                </div>
                            </div>

                        </div>
                        <div class="row">
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
                                    {{Form::textarea('description','',['id'=>'ckeditor','id'=>'ckeditor','class'=>'form-control','placeholder'=>'Description'])}}
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center m-5 fs-5" style='color:#F56565'>
                            {{Form::submit('save',['class'=>'cus btn btn-danger btn-md'])}}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                {{-- {{--
            </div> --}}
        </div>
    </div>
    {{-- end <card-one></card-one> --}}
    <div class="tab-pane fade" id="Company" role="tabpanel" aria-labelledby="company-tab">
        <div class="card-header">
            <div class="row ml-3">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
                    {{-- <div class="tab-pane fade active" id="Company" role="tabpanel" aria-labelledby="Company-tab">
                        --}}
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead class="table-light">
                                    <tr class="text-dark" style="text-transform: capitalize;font-size:14px;">
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Registration No</th>
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
                                        <td>{{$comp->name}}</td>
                                        <td>{{$comp->registration}}</td>
                                        <td>{{$comp->description}}</td>
                                        <td>{{$comp->location}}</td>
                                        <td>{{$comp->logo}}</td>
                                        <td>
                                            <span>
                                                <a class="text-info" href="{{url('show/'. $comp->id)}}">View</a>
                                                <a onclick="return confirm('Are you sure you wnat to delete this entry?')"
                                                    href="{{url('destroy/'.$comp->id)}}" style="color:#F56565">Delete
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
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
</div>
</div>
@endsection