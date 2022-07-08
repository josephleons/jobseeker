<!DOCTYPE html>
<html lang="{{'confi-langate'}}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{url('bootstrap-icons/font/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{url('bootstrap-icons/bootstrap-icons.svg')}}">
  {{-- Boot v5 --}}
  {{--
  <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}"> --}}
  <link rel="stylesheet" href="{{url('bootstrap/dist/js/bootstrap.min.js')}}">
  {{-- icons --}}
  <link rel="stylesheet" href="{{url('assets/css/all.css')}}">

  {{-- custom style cssclear --}}
  <link rel="stylesheet" href="{{url('assets/side.css')}}" />
  <link rel="stylesheet" href="{{url('assets/css/custom.css')}}">
  {{-- Bootstrap 4 --}}
  <link rel="stylesheet" href="{{url('bootstrap/dist/css/bootstrap.min.css')}}">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" type="text/css"
    rel="stylesheet">
  <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" type="text/css" rel="stylesheet">
  <title>{{config('app.name','JOBSEK')}}</title>
</head>

<body>
  <nav class="navbar navbar-inverse navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar"
          aria-expanded="false" aria-controls="navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">{{config('app.name','Jobseek')}}</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="nav-item "><a class="nav-link" href="$"></a> </li>
        </ul>
      </div>
      <ul class="nav navbar-nav navbar-right">
        {{-- <li class="nav-item">
          <a class="nav-link" href="{{url('/login') }}">
            <i class="bi bi-box-arrow-in-right text-danger mx-2"></i>Login</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link text-white fs-5 text-capitalize" href="{{url('/login') }}">
            <i class="bi bi-box-arrow-in-right text-danger m-2"></i>login</a>
        </li>
      </ul>
    </div>
    <!--nav-collabse-->
    </div>
  </nav>
  {{-- <navbar> --}}
    <div class="conatiner">
      <div class="row">
        <div class="col-md-6 col-sm-10 col-xs-8 m-auto">
          @include('inc.messages')
          <div class="ca card mt-5">
            <div class="card-header">
              <h4 class="title" style="text-align:center; color:#2D3748">Applicant Registration</h4>
            </div>
            <div class="card-body m-auto">
              {!! Form::open(['Action' => 'PostsController@index','Method' =>'POST']) !!}
              @csrf
              <div class="row">
                Email Address:
                <div class="col-md-12">
                  <div class="form-group">
                    {{Form::text('email','',['class'=>'form-control'])}}
                  </div>
                </div>
              </div>
              <div class="row">
                 Password:
                <div class="col-md-12">
                  <div class="form-group">
                    {{Form::password('password',['class'=>'form-control'])}}
                  </div>
                </div>
              </div>
              <div class="row">
                Confirm Password:
                <div class="col-md-12">
                  <div class="form-group">
                    {{Form::password('Confirm',['class'=>'form-control'])}}
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="btn col-md-12 ml-2" style='float:center; color:#F56565'>
                {{Form::submit('Register',['class'=>'login btn btn-danger form-control'])}}
              </div>
              {!! Form::close() !!}
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- endform --}}
{{-- <footer></footer> --}}
<div class="row" style="padding-top:100%">
  @include("inc.footer")
</div>
</body>

</html>
<script src="{{url('assets/js/jquery-3.4.1.slim.min.js')}}"></script>
<script src="{{url('/assets/js/popper.min.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>