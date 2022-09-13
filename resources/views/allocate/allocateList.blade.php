@extends('layouts.user')
@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xm-12">
        <div class="card">
            @if(count($allocates )> 0)
            @foreach($allocates as $allocate)
            <div class="card-body">
                <p class="fs-4 text-success text-capitalize fw-bold">Congratulation <mark>{{$allocate->firstname}}
                    {{$allocate->id}} {{$allocate->lastname}}
                </mark>
                    You have Allocated
                    to {{$allocate->allocateTo}} Organization</p>
                <p class="fs-4 text-success fst-italic">check your Email address for more Information
                    {{$allocate->email}}
                </p>
            </div>
            @endforeach
            @else
            <p class="lead text-danger text-center">You Have No Available Allocation,</p>
            @endif
        </div>
    </div>
</div>

@endsection