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
                                                        <th class="text-center">Order Id</th>
                                                        <th class="text-center">Order Date</th>
                                                        <th class="text-center">Customer Name</th>
                                                        <th class="text-center">Customer Email</th>
                                                        <th class="text-center">Ordered Products</th>
                                                        <th class="text-center">Ordered Amount</th>
                                                        <th class="text-center">Ordered Status</th>
                                                        <th class="text-center">Payment Method</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($orders as $order)
                                                        <tr>
                                                            <td>{{$order->id}}</td>
                                                            <td>{{$order->created_at}}</td>
                                                            <td>{{$order->name}}</td>
                                                            <td>{{$order->user_email}}</td>
                                                            <td>
                                                                @foreach($order->orders as $pro)
                                                                    <a href="{{ url('/orders/' .$order->id)}}">
                                                                        {{$pro->product_code}}
                                                                        ({{$pro->product_qty}}) <br/></a>
                                                                @endforeach
                                                            </td>
                                                            <td>{{$order->grand_total}}</td>
                                                            <td>{{$order->order_status}}</td>
                                                            <td>{{$order->payment_method}}</td>
                                                            <td><a href="{{ url('/admin/view-order/' .$order->id) }}" class="btn btn-warning">View</a>
                                                                <a href="{{ url('/admin/view-order-invoice/' .$order->id) }}" class="btn btn-warning">Invoice</a> </td>
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