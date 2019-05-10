@extends('layouts.layoutfrontend.frontend_main')
@section('content')

    <!-- Breadcrumb area Start -->
    <div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                        <h1 class="page-title">Orders</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Orders</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area End -->

    
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

           
        
        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
                <div class="page-content-inner ptb--80">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                
                                        <!-- Orders Section -->
                                        
                                            <div class="table-content table-responsive">
                                                <table class="table text-center">
                                                    <thead style="background-color:#f1b8c4;">
                                                        <tr style="color:white;">
                                                                <th class="text-center">Order Id</th>
                                                                <th class="text-center">Ordered Products</th>
                                                                <th class="text-center">Payment Method</th>
                                                                <th class="text-center">Grand Total</th>
                                                                <th class="text-center">Created On</th>
                                                                <th class="text-center">Invoice</th>
                                                                
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($orders as $order)
                                                            <tr>
                                                                <td>{{$order->id}}</td>
                                                                <td>
                                                                    @foreach($order->orders as $pro)
                                                                        <a href="{{ url('/orders/' .$order->id)}}">{{ $pro->product_code }}</a><br>
                                                                    @endforeach
                                                                </td>
                                                                <td>{{$order->payment_method}}</td>
                                                                <td>{{$order->grand_total}}</td>
                                                                <td>{{$order->created_at}}</td>
                                                                <td><a target="_blank" href="{{ url('/invoice/' .$order->id) }}">View Invoice</a></td>
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
        <!-- Main Content Wrapper Start -->


@endsection