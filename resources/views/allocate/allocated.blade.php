@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead class="table-light">
            <tr class="text-dark" style="text-transform: capitalize;font-size:14px;">
              <th>Id</th>
              <th>Fisrtname</th>
              <th>Middlename</th>
              <th>Lastname</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @if(count($applicants)> 0)
            @foreach($applicants as $applicant)
            <tr>
              <td>{{$applicant->id}}</td>
              <td>{{$applicant->firstname}}</td>
              <td>{{$applicant->middlename}}</td>
              <td>{{$applicant->lastname}}</span></td>
              <td>
                <span>
                  <a class="fs-6" onclick="return confirm('Are you sure you wnat to Allocate this entry?')"
                    href="{{url('edit/'.$applicant->id)}}"
                      style="color:#F56565;font-size:22px;text-transform:lowercase">Allocate
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

@endsection