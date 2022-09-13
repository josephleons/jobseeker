@extends('layouts.user')

@section('content')
<small>Allocate employee to Available Company Requests</small>
<hr>
<div class="col-lg-12 col-md-12 col-sm-12 col-xm-12">
    <div class="row">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card p-3">
                    {!! Form::open(['Action'=>'AllocateController@store','Method' =>'POST','enctype'=>'multipart/form-data'])
                        !!}
                        @if($employees)
                    @csrf
                    <div class="card-body">
                        Index Number: <input class="card-title" hidden name="index" value="{{$employees->index}}">
                        <p class="card-text" hidden>
                            Allocated ID:<strong>{{$employees->id}}</strong>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush ml-5">
                        Registration Date:<input name="regOn" class="list-group-item" value="{{$employees->created_at}}">
                        FirstName :<input name="firstname" class="list-group-item" value="{{$employees->firstname}}">
                        MiddlNename :<input name="middlename" class="list-group-item" value="{{$employees->middlename}}">
                        LastName :<input name="lastname" class="list-group-item" value="{{$employees->lastname}}">
                        Email Address :<input name="email" class="list-group-item" value="{{$employees->email}}">
                        Mobile phone :<input name="mobile" class="list-group-item" value="{{$employees->mobile}}">
                        Gender :<input name="gender" class="list-group-item" value=" {{$employees->gender}}">
                        {{-- <div class="row ml-5"> --}}
                        <div class="list-group-item mt-5">
                        <label for="validationCustom05" class="form-label">Allocate TO:</label>
                        <input name="allocateTo" class="list-group-item col-12" placeholder="please fill company to allocate">
                        <div class="invalid-feedback">
                                Please provide a allocate.
                            </div>
                        </div>
                    </ul>
                    <hr>
                   
                    <div class="card-body">
                        {{-- {{Form::hidden('_method','PUT')}} --}}
                        {{Form::submit('submit',['class'=>'cus btn btn-info m-2'])}}
                      
                       
                    </div>
                    @else
                    <p class="lead text-danger text-center">Sorry ! that employee could not be found </p>
                    <a href="{{('/allocate')}}" class="card-link">Cancel Go Back</a>                                    

                    @endif
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>
@endsection
