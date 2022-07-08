@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead class="table-light">
            <tr class="text-dark" style="text-transform: capitalize;font-size:14px;">
              <th>ID</th>
              <th>Index</th>
              <th>Fisrtname</th>
              <th>Middlename</th>
              <th>Lastname</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>Gender</th>
              <th>Nida</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @if(count($employees)> 0)
            @foreach($employees as $employee)
            <tr>
              <td>{{$employee->id}}</td>
              <td>{{$employee->index}}</td>
              <td>{{$employee->firstname}}</td>
              <td>{{$employee->middlename}}</td>
              <td>{{$employee->lastname}}</span></td>
              <td>{{$employee->email}}</td>
              <td>{{$employee->mobile}}</td>
              <td>{{$employee->gender}}</td>
              <td>{{$employee->nida}}</td>
              <td>
                <span>
                  <a class="fs-6" onclick="return confirm('Are you sure you wnat to Allocate this entry?')"
                    href="{{url('show/'.$employee->id)}}"
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