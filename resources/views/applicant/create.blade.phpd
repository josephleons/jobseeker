@extends('layouts.admin')
@section('content')
{{-- profile user --}}
<div class="row mx-5">
    <ul class="nav nav-tabs">
        <li class="nav-item" role="presentation">
            <a href="#person" class="nav-link" id="user-tab" data-toggle="tab" type="button" role="tab"
                aria-controls="person" aria-selected="true">Personal Details</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#attach" class="nav-link" id="about-tab" data-toggle="tab" type="button" role="tab"
                aria-controls="attach" aria-selected="false">Attachments</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#final" class="nav-link" id="about-tab" data-toggle="tab" type="button" role="tab"
                aria-controls="final" aria-selected="false">Finalize</a>
        </li>
    </ul>
</div>
{{-- personal details --}}
<div class="tab-content  mt-5">
    <div class="tab-pane fade active" id="person" role="tabpanel" aria-labelledby="person-tab">
        <div class="row mx-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="d-flex card-header bg-dark">
                        <div class="card-title text-capitalize">
                            <i class="fs-5 bi bi-person-lines-fill m-2 " style="color:#F56565"></i>
                        </div>
                        <h2 class="fs-5 text-white">Personal Details</h2>
                    </div>
                    {{-- FORM DATA --}}
                    {!! Form::open(['Action' => 'EmployeeController@store','Method'
                    =>'POST','enctype'=>'multipart/form-data']) !!}
                    <div class="row m-3 ">
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Index No:</label>
                            <input type="text" class="form-control" id="validationCustom01" name="index"
                                placeholder="Example: S5036-0076-2015" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">First name</label>
                            <input type="text" class="form-control" id="validationCustom01" name="firstname" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="validationCustom02" name="middlename" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="validationCustom02" name="lastname" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Mobile number</label>
                            <input type="tel" class="form-control" id="validationCustom01" name="mobile"
                                placeholder="+255" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustomUsername" class="form-label">Email Address</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <select name="email" class="form-select" required>
                                    <option selected>Select your Email From List</option>
                                    <option value="f">femail</option>
                                    <option value="m">Male</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please choose a Email.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">Physical Address</label>
                            <input type="text" class="form-control" name="physical" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-md-4">
                            <label for="validationCustom04" class="form-label">Region</label>
                            <select name="region" class="form-select" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="R">Arusha</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid Region.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom05" class="form-label">District</label>
                            <select name="district" class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="R">Arumeru</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid District.
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="validationCustom05" class="form-label">Ward</label>
                            <select name="ward" class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="R">Ngarasero</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid ward.
                            </div>
                        </div>
                    </div>

                    {{-- NIDA --}}
                    <div class="row m-3 border-info">
                        <div class="col-md-4">
                            <label for="validationCustom05" class="form-label">Gender</label>
                            <select name="gender" class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="F">Female</option>
                                <option value="M">Male</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid ward.
                            </div>
                        </div>

                        <div class="col-md-8">
                            <label for="validationCustom01" class="form-label">National Identinty</label>
                            <input type="text" class="form-control" id="validationCustom01" name="nida"
                                placeholder="Example:19950604-10227-300001-11" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- //end tabs one --}}
    <div class="tab-pane fade active" id="attach" role="tabpanel" aria-labelledby="attach-tab">
        <div class="row m-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="d-flex card-header bg-dark">
                        <div class="card-title text-capitalize">
                            <i class="fs-5 bi bi-paperclip m-2" style="color:#F56565"></i>
                        </div>
                        <h3 class="fs-5 text-white">Add all attachments</h3>
                    </div>
                    <div class="row m-3">
                        <div class="col-md-6">
                            <div class="col-md-8">
                                <label for="validationCustomUsername" class="form-label">Current Passport</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="bi bi-images"></i></span>
                                    <input type="file" name="photo" class="form-control" id="validationCustomUsername"
                                        aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please add photo.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 mt-3">
                                <label for="validationCustomUsername" class="form-label">Other attachment</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="bi bi-paperclip"></i></span>
                                    <input type="file" name="other" class="form-control" id="validationCustomUsername"
                                        aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please application letter.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <label for="validationCustomUsername" class="form-label">Birth Certificate</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="bi bi-paperclip"></i></span>
                                    <input type="file" name="birth" class="form-control" id="validationCustomUsername"
                                        aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please add Birth Certificate.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustomUsername" class="form-label">CV</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="bi bi-paperclip"></i></span>
                                    <input type="file" name="cv" class="form-control" id="validationCustomUsername"
                                        aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please add your cv.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustomUsername" class="form-label">Letter</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="bi bi-paperclip"></i></span>
                                    <input type="file" name="letter" class="form-control" id="validationCustomUsername"
                                        aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please application letter.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade active" id="final" role="tabpanel" aria-labelledby="user-tab">
        <div class="row m-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="d-flex card-header bg-dark">
                        <div class="fs-5 card-title text-capitalize">
                            <i class="bi bi-save-fill m-2" style="color:#F56565"></i>
                        </div>
                        <h3 class="fs-5 text-white"> Finalizing Steps</h3>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                        <div class="col-12 m-3">
                            {{Form::submit('submit',['class'=>'cus btn btn-danger'])}}
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    {{-- <div class="col-12 m-3">
        {{Form::submit('submit form',['class'=>'cus btn btn-danger'])}}
    </div> --}}
    {!! Form::close() !!}
</div>
{{-- end content --}}

{{-- {!! Form::close() !!} --}}
{{-- <footer></footer> --}}
{{-- <footer></footer> --}}
<div class="row" style="padding-top:50%">
    @include("inc.footer")
</div>

@endsection