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


@if($activeEmp->count())
<div class="container mt-5 table-responsive px-3">
    <h2 align="center">Active Employees having access to login</h2>
 <table class="table table-striped">
    <thead>
        <tr>
          <th>S no.</th>
          <th>Name</th>
          <th>username</th>
          <th>email</th>
          <th>mobile</th>
          <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($activeEmp as $index => $emp)
            <tr>
                <td class="bold">{{$index+1}}</td>
                <td class="bold">{{$emp->name}}</td>
                <td class="bold">{{$emp->username}}</td>
                <td class="bold">{{$emp->email}}</td>
                <td class="bold">{{$emp->mobile}}</td>
                <td class="bold">{{$emp->status}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
</div>
@else
<h3 class="bold text-dark" align="center">run db seeder</h3>
@endif

@endsection
