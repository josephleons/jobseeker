@extends('layouts.user')
@section('content')
<div class="row mx-3">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
        <div class="card shadow mt-2">
            <div class="alert alert-success  alert-dismissible">
                 <strong> @include('inc.messages')</strong> 
                 {{-- You success submit your  records --}}
                <button type="button" class="btn-close" data-dismiss="alert"></button>
            </div>
            {{-- >&times; --}}
            <div class="card-header">
                @if(count($users) > 0)
                @foreach($users as $user)
                    {{-- @foreach($user->applicants as $applicant)
                <h5 class="card-title fs-4 text-capitalize"><i class="bi bi-person-circle shadow rounded-circle m-3"
                     style="color:#F56565;"></i>My Application details:  {{$applicant->firstname}}, {{$applicant->middlename}}  {{$applicant->lastname}}</h5> --}}
            </div>
            <div class="p-4 card-body list-group list-group-flush">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xm-6">
                        <div class="row pt-2 d-flex">
                            @foreach($user->applicants as $applicant)
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Registration Date :{{$applicant->created_at}}
                                    <li class="list-group-item">FirstName: {{$applicant->firstname}}</li>
                                    <li class="list-group-item">middlename:{{$applicant->middlename}} </li>
                                    <li class="list-group-item">LastName:{{$applicant->lastname}} </li>
                                    <li class="list-group-item">Gender: {{$applicant->gender}}</li>
                                @endforeach
                                <li class="list-group-item">Mobile:{{$applicant->mobile}} </li>
                                <li class="list-group-item">Email Address:{{$applicant->physical}} </li>
                                {{-- <li class="list-group-item">District:{{$applicant->district}} </li>
                                <li class="list-group-item">Region: {{$applicant->region}}</li>
                                <li class="list-group-item">NIDA:{{$applicant->nida}}</li> --}}
                                <li class="list-group-item"></li>
                            </ul>
                            @endforeach
                            @else
                                <p class="fs-6">no record found</p>
                            @endif
                        </div>
                    </div>
                    {{-- center vertical ruler --}}
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xm-1">
                        <div class="d-flex" style="height: 100%;">
                            <div class="vr text-danger" style="width: 6%;"></div>
                        </div>
                    </div>
                    {{-- right contents --}}
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xm-5">
                        <p class="fs-5 text-dark  d-flex justify-content-start">Attachments information</p>
                        <hr class="text-dark">
                        <p class="text-dark d-flex justify-content-start">Showing <strong>1-3 </strong>of items</p>
                        <div class="card">
                            <div class="card-body">
                                {{-- @if(count($employee) > 0 )
                                @foreach ($employee as $$employees)
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">#
                                        <div class="m-auto">
                                            <div class="fw-bold text-info">Type of Attachments:</div>
                                        </div>
                                        <span class="fw-bold text-info">Attachment</span>
                                    </li> --}}
                                    {{-- top --}}
                                    {{-- <li class="list-group-item d-flex justify-content-between align-items-start">1
                                        <div class="fw-bold m-auto text-muted">
                                           photo
                                        </div>
                                        <span class="text-info"><a href="{{$employees->hasImage}}"><i class="bi bi-eye m-2"></i>View</a></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">2
                                        <div class="m-auto">
                                            <div class="fw-bold text-muted">Letter</div>
                                        </div>
                                        <span class="text-info"><a href="{{$employees->hasImage}}"><i class="bi bi-eye m-2"></i>View</a></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">3
                                        <div class="m-auto">
                                            <div class="fw-bold text-muted">Other attachment</div>
                                        </div>
                                        <span class="text-info"><a href="{{$employees->hasImage}}"><i class="bi bi-eye m-2"></i>View</a></span>
                                    </li>
                                </ul>
                                @endforeach
                                @else
                                    <p class="fs-6">No Attachment's</p>
                                @endif --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" style="padding-top:50%">
    @include("inc.footer")
</div>
@endsection