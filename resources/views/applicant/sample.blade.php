<div class="modal-body">
    <ul class="p-5 list-group list-group-flush">
        <div class="row">
            {{-- profile left col --}}
            <div class="col-lg-4 col-md-12 col-sm-12 col-xm-12">
                <div class="col-md-12">
                    <div class="text-capitalize text-center ">
                        <i class="bi bi-person-circle fs-1 shadow rounded-circle"></i>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="text-capitalize">
                        {{-- <h4 class="fs-4">
                            <center>{{$applicant->firstname}} </center>
                            {{$applicant->middlename}}{{$applicant->lastname}}
                        </h4> --}}
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                    <div class="justify-content-center d-flex">
                        {{-- style="color:#F56565;" --}}
                        {{-- style="color:#30BCED" --}}
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" style="text-decoration:none">
                                <a class="breadcrumb-item mr-2" {{-- href="{{url('edit/'.$applicant->id)}}">Edit</a>
                                --}}
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            {{-- center vertical ruler --}}
            <div class="col-lg-1 col-md-1 col-sm-1 col-xm-1">
                <div class="d-flex" style="height: 100%;">
                    <div class="vr text-black"></div>
                </div>
            </div>
            {{-- right contents --}}
            <div class="col-lg-7 col-md-12 col-sm-12 col-xm-12">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        Index No:
                        <div class="m-auto">
                            <div class="fw-bold">{{$applicant->id}}</div>
                        </div>
                        <span class="badge bg-block rounded-pill" style="background-color: #F56565">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        Email
                        address:
                        <div class="m-auto">
                            <div class="fs-5">{{$user->email}}</div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        Mobile
                        <div class="m-auto">
                            <div class="fs-5">{{$user->mobile}}</div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        Gender:
                        <div class="m-auto">
                            <div class="fs-5">{{$applicant->gender}}</div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        Attachment:
                        <div class="ml-2">
                            <a href="{{url('edit/'.$applicant->photo)}}"></a>

                        </div>
                        <span class="badge bg-block rounded-pill" style="background-color: #F56565">4</span>
                    </li>
                    <li class="list-group-item"></li>
                </ul>
                {{-- edit and delete button --}}
                <div class="justify-content-center d-flex">
                    {{-- style="color:#F56565;" --}}
                    {{-- style="color:#30BCED" --}}
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" style="text-decoration:none">
                            <a class="breadcrumb-item mr-2" style="-webkit-text-fill-color: #F56565"
                                onclick="return confirm('Are you sure you wnat to delete this entry?')"
                                href="{{url('delete/'.$user->id)}}">Delete</a>
                    </nav>
                </div>
            </div>
        </div>
    </ul>
</div>