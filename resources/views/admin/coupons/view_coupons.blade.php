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
                                                        <th class="text-center">Coupon Id</th>
                                                        <th class="text-center">Coupon Code</th>
                                                        <th class="text-center">Amount</th>
                                                        <th class="text-center">Amount Type</th>
                                                        <th class="text-center">Expiry Date</th>
                                                        <th class="text-center">Created Date</th>
                                                        <th class="text-center">Status</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($coupons as $coupon)
                                                        <tr>
                                                            <td>{{$coupon->id}}</td>
                                                            <td>{{$coupon->coupon_code}}</td>
                                                            <td>
                                                                {{$coupon->amount}}
                                                                @if($coupon->amount_type == "Percentage") %
                                                                @else RS 
                                                                @endif
                                                            </td>
                                                            <td>{{$coupon->amount_type}}</td>
                                                            <td>{{$coupon->expiry_date}}</td>
                                                            <td>{{$coupon->created_at}}</td>
                                                            <td>
                                                                
                                                                @if($coupon->status == 1) Active @else Inactive @endif
                                                            </td>
                                                            
                                                            <td><a href="/admin/edit-coupon/{{$coupon->id}}" class="btn btn-primary" title="Edit Coupon">EDIT</a>  <a href="javascript:" rel="{{ $coupon->id }}" rel1="delete-coupon" class="deleteRecord btn btn-danger" title="Delete Coupon">DELETE</a></td>
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