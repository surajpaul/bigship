@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} as <strong>{{ Auth::user()->name }}</strong>
                </div>
            </div>
        </div>
    </div>
</div>

@if($details->count())
<div class="container mt-5 table-responsive px-3">
    <h2 align="center">Emp Details</h2>
 <table class="table table-striped">
    <thead>
        <tr>
          <th>S no.</th>
          <th>Name</th>
          <th>Age</th>
          <th>Mobile No.</th>
          <th>Email ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach($details as $index => $detail)
            <tr>
                <td class="bold">{{$index+1}}</td>
                <td class="bold">{{$detail->emp_name}}</td>
                <td class="bold">{{$detail->emp_age}}</td>
                <td class="bold">{{$detail->emp_mobile}}</td>
                <td class="bold">{{$detail->emp_emailid}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
@else
<h3 class="bold text-dark" align="center">run db seeder</h3>
@endif

@if($officialDetails->count())
<div class="container mt-5 table-responsive px-3">
    <h2 align="center">Emp Official Details</h2>
 <table class="table table-striped">
    <thead>
        <tr>
          <th>S no.</th>
          <th>Salary</th>
          <th>Department</th>
          <th>Designation</th>
        </tr>
    </thead>
    <tbody>
        @foreach($officialDetails as $index => $detail)
            <tr>
                <td class="bold">{{$index+1}}</td>
                <td class="bold">{{$detail->emp_salary}}</td>
                <td class="bold">{{$detail->emp_department}}</td>
                <td class="bold">{{$detail->emp_designation}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
@else
<h3 class="bold text-dark" align="center">run db seeder</h3>
@endif
@endsection
