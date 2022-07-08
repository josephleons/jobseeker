@extends('layouts.user')
@section('content')

{{-- <div class="container"> --}}
<div class="row text-center ml-5 pt-2">
    <div class="col-md-12">
        <div class="px-2">
            <div class="text-capitalize">
                <i class="bi bi-person-circle fs-1"></i>
            </div>
            <div class="card-body">
                <p class="text-black">JOSEPH LEONARD MASAWE</p>
                <hr style="color:#2D3748;">
            </div>
        </div>
    </div>
</div>
{{-- profile_at_top --}}
<div class="row ml-5">
    <div class="col-md-12 col-md-offset-2">
        <ul class="nav nav-tabs">
            <li class="nav-item"role="presentation">
                <a class="nav-link active " id="account-tab" data-toggle="collapse" href="#account" role="tab" aria-controls="account" aria-selected="true">
                    <i class="bi bi-person-check-fill"></i> Accounts Details </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#changepassword" class="nav-link" id="changepassword-tab" data-toggle="collapse" " role="tab" aria-controls="changepassword" aria-selected="false">
                    <i class="bi bi-lock"></i> Change Password</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#Settings" class="nav-link" id="Settings-tab" data-toggle="collapse"  role="tab" aria-controls="Settings" aria-selected="false">
                    <i class="bi bi-gear"></i> Settings</a>
            </li>
            <li class="nav-item"role="presentation">
                <a href="#Preference" class="nav-link" id="Preference-tab" data-toggle="collapse"  role="tab" aria-controls="Preference" aria-selected="false"> Preference</a>
            </li>
        </ul>

    </div>
</div>
<div class="row ml-5 ">
    <div class="tab-content  mt-5">
        <div class="tab-pane fade active" id="account" role="tabpanel" aria-labelledby="account-tab">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Registration Date:</h5>
                        <p class="card-text"> </p>
                    </div>
                    <ul class="p-5 card-body list-group list-group-flush">
                        <div class="row mb-2">
                            <div class="col-md-3">
                                <div class="form-group">
                                    {{Form::label('Index Number')}}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class='list-group-item' value="<?php echo 'Form Four Index Number'; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    {{Form::label('Fullname','FullName')}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class='list-group-item' value="<?php echo 'First Name'; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class='list-group-item' value="<?php echo 'Middle Name'; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class='list-group-item' value="<?php echo 'Last Name'; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <div class="form-group">
                                    {{Form::label('email','Address')}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class='list-group-item' value="<?php echo 'Email address'; ?>">
                                </div>
                            </div>
                            <div class="col-md-4 mt-2">
                                <div class="form-group">
                                    <input class='list-group-item' value="<?php echo 'Physical address'; ?>">
                                </div>
                            </div>
                        </div>
                        {{--end row--}}
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <div class="form-group">
                                    {{Form::label('Gender')}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class='list-group-item' value="<?php echo 'male'; ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class='list-group-item' value="<?php echo 'Mobile'; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <div class="form-group">
                                    {{Form::label('Resident')}}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class='list-group-item' value="<?php echo 'district'; ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input class='list-group-item' value="<?php echo 'Region'; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <div class="form-group">
                                    {{Form::label('National idenification')}}
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input class='list-group-item' class="form-control" value="<?php echo 'NIDA'; ?>">
                                </div>
                            </div>
                        </div>
                        <p class="text-dark text-lowercase text-center">Attachments
                        </p>
                        <hr>
                        <ul class="nav-item">
                            <li class="nav-link text-dark">Photo:<a class="m-2" href="#">Picture</a></li>
                            <li class="nav-link text-dark">Application Letter:<a class="m-2" href="#">Letter</a></li>
                            <li class="nav-link text-dark">Other attachment:<a class="m-2" href="#">other</a></li>
                        </ul>
                </div>
            </div>
        </div>
        {{-- cahnge Password --}}
        <div class="mt-3 d-flex justify-content-center">
        <div class="tab-pane fade active" id="changepassword" role="tabpanel" aria-labelledby="changepassword-tab">
            <div class="col-md-12">
                <div class="card border-secondary shadow mb-3">
                    <div class="card-body">
                        {!! Form::open(['Action' => 'EmployeeController@store','Method' =>'POST','enctype'=>'multipart/form-data'])
                        !!}
                        @csrf
                            <div class="row">
                                <label for="oldpass" class="form-group col-sm-4 mt-4">Old Password</label>
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" name="oldpass">
                                </div>
                            </div>

                            <div class="row">
                                <label for="newpass" class="form-group col-sm-4 mt-4">New Password</label>
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" name="newpass">
                                </div>
                            </div>

                            <div class="row">
                                <label for="confmpass" class="form-group col-sm-4 mt-4">confirm Password</label>
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" name="confpass">
                                </div>
                            </div>
                            <div class="row mt-3">
                                {{-- <div class="col-md-4"></div> --}}
                                <div class="col-4">
                                    <div class="form-group">
                                        {{Form::submit('submit',['class'=>'cus btn btn-info text-white'])}}
                                    </div>
                                </div>
                            </div>
                            {!!Form::close()!!}
                        <div class="col-12 mt-2 mb-4 alert alert-dismissible alert-danger">
                                change password
                            <button type="button" class="btn-close" data-dismiss="alert"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    {{-- </div> --}}
    <div class="row" style="margin-top:10%">
        @include("inc.footer")
    </div>







    @endsection
