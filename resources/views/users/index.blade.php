@extends('layouts.admin')

@section('content')
{{-- button to add user --}}
<div class="row mb-3">
  <div class="col-md-12 d-flex justify-content-end">
    <ul class="nav nav-tabs">
      <li class="nav-item" role="presentation">
        <a href="#adduser" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
          <i class="bi bi-plus-circle-dotted mr-2" style="font-size:1em;"></i> User </a>
      </li>
    </ul>
  </div>
</div>
{{-- display user and other tabs --}}
<ul class="nav nav-tabs text-capitalize">
  <li class="nav-item" role="presentation">
    <a href="#user" class="nav-link" id="user-tab" data-toggle="collapse" data-target="#user" type="button" role="tab" aria-controls="user"
      aria-selected="true">User Details</a>
  </li>
  {{-- <li class="nav-item" role="presentation">
    <a href="#about" class="nav-link" id="about-tab" data-toggle="collapse" type="button" role="tab"
      aria-controls="about" aria-selected="false">person</a>
  </li> --}}
</ul>
<div id="user">
<div class="tab-content  mt-5">
  <div class="tab-pane fade active" id="user" role="tabpanel" aria-labelledby="user-tab">
    <div class="row ml-3">
      <div class="col-lg-12 col-sm-6 col-xm-12 ">
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead class="table-light">
              <tr class="text-dark" style="text-transform: capitalize;font-size:14px;">
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Status</th>
                <th>Privilage</th>
                <th>Created On</th>
                <th>Update On</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @if(count($users)> 0)
              @foreach($users as $user)
              <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td><span class="bg-success rounded-circle">{{$user->status}}</span></td>
                <td>{{$user->privilage}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                {{-- <td>{{$user->privilage}}</td> --}}
                {{-- <td>{{$user->Status}}</td> --}}
                <td>
                  <span>
                    <a onclick="return confirm('Are you sure you wnat to delete this entry?')"
                      href="{{url('delete/'.$user->id)}}"><em class="bi bi-trash"
                        style="color:#F56565;font-size:22px;"></em>
                    </a>
                  </span>
                </td>
              </tr>
              @endforeach
              @else
              <p class="alert alert-success text-muted">no available records found</p>
              @endif
            </tbody>
          </table>
        </div>
      </div>
      </div>
    </div>
  </div>
  {{-- end tabs one --}}
  <div class="tab-pane fade active" id="about" role="tabpanel" aria-labelledby="user-tab">
    this is about
  </div>
</div>
{{-- other row to add user --}}
{{-- <div class="row mt-3">
  <div class="tab-content">
    <!-- Button trigger modal -->
    --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="text-info modal-title" id="exampleModalLabel">Add New Member</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            {!! Form::open(['Action' => 'RegisterController@index','Method' =>'POST']) !!}
            @csrf
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  {{Form::label('email','Email Address')}}
                </div>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  {{Form::text('email','',['class'=>'form-control'])}}
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  {{Form::label('password','Password')}}
                </div>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  {{Form::text('password','',['class'=>'form-control'])}}
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  {{Form::label('Confirm Password')}}
                </div>
              </div>
              <div class="col-md-9">
                <div class="form-group">
                  {{Form::password('Confirm',['class'=>'form-control'])}}
                </div>
              </div>
            </div>
           <div class="modal-footer col-md-12 justify-content-center ">
              {{Form::submit('save',['class'=>'cus btn btn-danger form-control'])}}

            </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row" style="padding-top:100%">
  @include("inc.footer")
</div>
</div>
@endsection