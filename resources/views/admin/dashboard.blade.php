@extends('layouts.layoutbackend.backend_main')

@section('content')
<!-- MAIN -->
    <div class="main">

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- OVERVIEW -->
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Dashboard Overview</h3>
                        <h3>Hello, {{$adminDetails->username}}</h3>
                        <p class="panel-subtitle">Period: May 12, 2019 - May 12, 2019</p>
                        <div class="right">
                                <button type="button" class="btn-toggle-collapse"><i class="fas fa-angle-down"></i></button>
                                <button type="button" class="btn-remove"><i class="fas fa-times"></i></button>
                            </div>
                        <p><script type="text/javascript">
                                var today = new Date();
                                var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                                var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                                var dateTime = date+' '+time;
                                document.write(dateTime);
                            </script></p>
                        
                        <h3 style="padding-top:20px;">Recent Orders</h3>
                    </div>
                    
                    <div class="panel-body">
                            
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
                <!-- END OVERVIEW -->
                
                <div class="panel panel-headline">
                        <div class="panel-heading">
                            
                            <div class="right">
                                    <button type="button" class="btn-toggle-collapse"><i class="fas fa-angle-down"></i></button>
                                    <button type="button" class="btn-remove"><i class="fas fa-times"></i></button>
                                </div>
                            
                            
                            <h3 style="padding-top:20px;">User Details</h3>
                        </div>
                        
                    <div class="panel-body">
                
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
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->

@endsection