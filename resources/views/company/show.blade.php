@extends('layouts.admin')
@section('content')
<div class="row mx-5">
   <div>
    <a href="{{('/company')}}" class="btn btn-default">Go back</a>
   </div>
    <ul class="nav nav-tabs mt-5">
        <li class="nav-item" role="presentation">
            <a href="#Members" class="nav-link active " id="Members-tab" data-toggle="collapse" type="button" role="collapse" aria-controls="Members" aria-selected="false">Company Details</a>
        </li>
        
    </ul>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
    
    {{-- <div class="tab-pane fade active" id="Members" role="tabpanel" aria-labelledby="Members-tab"> --}}
            <div class="row">
                <div class="container">
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-md-6">
                            <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Company Type :{{$comp->type}}</h5>
                            <p class="card-text">
                                {{$comp->id}}
                            </p>
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">Company Registration Date : 
                                {{$comp->created_at}}</li>
                            <li class="list-group-item">Organization :{{$comp->title}}</li>
                            <li class="list-group-item">Registration Number:{{$comp->regNo}} </li>
                            <li class="list-group-item">Email Address: {{$comp->email}}</li>
                            <li class="list-group-item">Location: {{$comp->location}}</li>
                            <li class="list-group-item">Logo:{{$comp->logImage}} </li>
                            <li class="list-group-item">Payment Statu:{{$comp->status}}</li>
                          </ul>
                          <div class="card-body">
                            <a href="#" class="btn btn-info card-link">Payment $17</a>
                            <a href="#" class="card-link">Another link</a>
                          </div>
                        </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="card">
                    <div class="card-header">
                        <h4 class="title" style="text-align:center; color:#2D3748">Member Registration</h4>
                        <div class="alert alert-danger">Members information appear here</div>
                    </div>
                     </div> --}}
                </div>
                {{-- lefts --}}
        </div>
    </div>
</div>
@endsection