@extends('layouts.layoutbackend.backend_main')

@section('content')

<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
                <div class="row">
                        <div class="col-md-12">
                                <div class="white-box">
                                    @if(Session::has('message_error'))
                                        <div class="alert alert-danger alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                                    <strong>{!! session('message_error') !!}</strong>
                                        </div>
                                    @endif
                                    @if(Session::has('message_success'))
                                        <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>	
                                                    <strong>{!! session('message_success') !!}</strong>
                                        </div>
                                    @endif
                                
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover" id="table1">
                                                <thead>
                                                    <tr style="color:white;background-color: #00AAFF !important;">
                                                        <th class="text-center">User Id</th>
                                                        <th class="text-center">Name</th>
                                                        <th class="text-center">Address</th>
                                                        <th class="text-center">City</th>
                                                        <th class="text-center">State</th>
                                                        <th class="text-center">Country</th>
                                                        <th class="text-center">Pincode</th>
                                                        <th class="text-center">Mobile</th>
                                                        <th class="text-center">Email</th>
                                                        <th class="text-center">Status</th>
                                                        <th class="text-center">Registered On</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($users as $user)
                                                        <tr>
                                                            <td>{{$user->id}}</td>
                                                            <td>{{$user->name}}</td>
                                                            <td>{{$user->address}}</td>
                                                            <td>{{$user->city}}</td>
                                                            <td>{{$user->state}}</td>
                                                            <td>{{$user->country}}</td>
                                                            <td>{{$user->pincode}}</td>
                                                            <td>{{$user->mobile}}</td>
                                                            <td>{{$user->email}}</td>
                                                            <td>
                                                                @if($user->status == 1)
                                                                    <span style="color:green;">Active</span>
                                                                @else
                                                                    <span style="color:red;">Inactive</span>
                                                                @endif
                                                                </td>
                                                            <td>{{$user->created_at}}</td>
                                                        </tr>

                                                    @endforeach
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                </div>
        </div>
    </div>
</div>

@endsection