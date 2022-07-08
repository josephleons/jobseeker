@extends('layouts.admin')
@section('content')
{{-- <div class="container"> --}}
    <div class="container-flex justify-content-center">
        <div class="row">
          <div class="col-md-12 col-md-offset-2">
              <ul class="nav nav-tabs justify-content-left" id="myTab" role="tablist"style="text-transform: capitalize">
                  <li class="nav-item">
                      <a class="nav-link" id="home-tab"  href="{{url('/companies')}}" role="tab" aria-controls="home" aria-selected="true">Company</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" id="contact-tab" data-toggle="tab" href="posts/index.php" role="tab" aria-controls="posts" aria-selected="true">Registered</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#" role="tab" aria-controls="contact" aria-selected="false">user</a>
                  </li>
                 </ul>
                
           </div>
      </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 m-5 p-4">
            <h2 class="lead">Company Registration Form</h2><hr>
            {!! Form::open(['Action' => 'PostsController@store','Method' =>'POST','enctype'=>'multipart/form-data']) !!}
                    <div class="col-md-8 m-5">
                    <div class="form-group">
                        {{Form::label('type','Type')}}
                        <select name="type" class="form-select" aria-label="Default select example">
                            <option selected>---select--</option>
                            <option value="1">One</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-8 m-5">
                        <div class="form-group">
                            {{Form::label('location','Location')}}
                            {{Form::text('location','',['class'=>'form-control','placeholder'=>'Company Location'])}}
                        </div>
                        </div>
                      
                        <div class="col-md-8 m-5">
                            <div class="form-group">
                                {{Form::label('company_name','Company Name')}}
                                {{Form::text('company_name','',['class'=>'form-control','placeholder'=>'Company Name'])}}
                            </div>
                            </div>
                            <div class="col-md-8 m-5">
                                <div class="form-group">
                                    {{Form::label('email','Email Address')}}
                                    {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email Address'])}}
                                </div>
                                </div>
                        <div class="col-md-12 m-5">
                        <div class="form-group">
                            {{Form::label('company_logo','Company Logo')}}</br>
                            {{Form::file ('hasImage')}}
                        </div>
                    </div>
                    <div class="col-md-12 m-5">
                        <div class="form-group">
                            <div class="card-header" style="color:#F56565">
                            <span class="lead"><strong>Minimum amount for each Post<strong></span>
                            <span class="lead" style="float: right ;color:#F56565"><strong>$89</strong></span></div>
                        </div>
                    </div>
                    <div class="btn m-4 d-flex" style='color:#F56565'>
                        {{Form::submit('Save Records',['class'=>'cus btn btn-danger form-control'])}}
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