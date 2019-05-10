@extends('layouts.layoutbackend.backend_main')

@section('content')

    <!-- MAIN -->
    <div class="main">

        <!-- MAIN CONTENT -->
        <div class="main-content">

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

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Order Details</h3>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-8">
                                <!-- RECENT PURCHASES -->
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Order #{{ $orderDetails->id}}</strong></h3>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="fas fa-angle-down"></i></button>
                                            <button type="button" class="btn-remove"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body no-padding">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr><th>Order Date</th><th>Order Status</th><th>Order Total</th><th>Shipping Charges</th><th>Coupon Code</th><th>Coupon Amount</th><th>Payment Method</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>{{ $orderDetails->created_at}}</td><td><span class="label label-success">{{ $orderDetails->order_status}}</span></td><td>{{ $orderDetails->grand_total}}</td><td>{{ $orderDetails->shipping_charges}}</td><td>{{ $orderDetails->coupon_code}}</td><td>{{ $orderDetails->coupon_amount}}</td><td>{{ $orderDetails->payment_method}}</td></tr>
                                            </tbody>
                                              
                                        </table>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- END RECENT PURCHASES -->
                        </div>
                        <div class="col-md-4">
                                <!-- CUSTOMER DETAILS -->
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Customer Details</strong></h3>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="fas fa-angle-down"></i></button>
                                            <button type="button" class="btn-remove"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body no-padding">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr><th>Customer Name</th><th>Customer Email</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr><td>{{$orderDetails->name}}</td><td>{{$orderDetails->user_email}}</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- END CUSTOMER DETAILS -->
                        </div>
                        <div class="col-md-4">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong>Update Order Status</strong></h3>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                            <button type="button" class="btn-remove"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form action="{{ url('admin/update-order-status')}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="order_id" value="{{$orderDetails->id}}">
                                            <table width="100%">
                                                <tr>
                                                    <td>
                                                                    <select name="order_status" id="order_status" required="">
                                                                        
                                                                        <option value="New" @if($orderDetails->order_status == "New") selected @endif>New</option>
                                                                        <option value="Pending"  @if($orderDetails->order_status == "Pending") selected @endif>Pending</option>
                                                                        <option value="Cancelled"  @if($orderDetails->order_status == "Cancelled") selected @endif>Cancelled</option>
                                                                        <option value="In Process" @if($orderDetails->order_status == "In Process") selected @endif>In Process</option>
                                                                        <option value="Shipped" @if($orderDetails->order_status == "Shipped") selected @endif>Shipped</option>
                                                                        <option value="Delivered" @if($orderDetails->order_status == "Delivered") selected @endif>Delivered</option>
                                                                        <option value="Paid" @if($orderDetails->order_status == "Paid") selected @endif>Paid</option>
                                                                    </select>
                                                    </td>
                                                    <td>
                                                        <input type="submit" value="Update Status">
                                                    </td>
                                                </tr>
                                                
                                            </table>
                                        </form>
                                    </div>
                                </div>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                                <div class="panel panel-scrolling">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong> Billing Details</strong></h3>
                                        <div class="right">
                                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                            <button type="button" class="btn-remove"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="list-unstyled activity-list">
                                            <li>
                                                <p>Name: {{$userDetails->name}}</p>
                                            </li>
                                            <li>
                                                <p>Address: {{$userDetails->address}}</p>
                                            </li>
                                            <li>
                                                <p>City: {{$userDetails->city}}</p>
                                            </li>
                                            <li>
                                                <p>State: {{$userDetails->state}}</p>
                                            </li>
                                            <li>
                                                <p>Country: {{$userDetails->country}}</p>
                                            </li>
                                            <li>
                                                <p>Pincode: {{$userDetails->pincode}}</p>
                                            </li>
                                            <li>
                                                <p>Mobile No: {{$userDetails->mobile}}</p>
                                            </li>
                                            
                                        </ul>
                                        
                                    </div>
                                </div>
                    </div>
                    <div class="col-md-6">
                            <div class="panel panel-scrolling">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Shipping Details</strong></h3>
                                    <div class="right">
                                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        <button type="button" class="btn-remove"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="panel-body">
                                        <ul class="list-unstyled activity-list">
                                                <li>
                                                    <p>Name: {{$orderDetails->name}}</p>
                                                </li>
                                                <li>
                                                    <p>Address: {{$orderDetails->address}}</p>
                                                </li>
                                                <li>
                                                    <p>City: {{$orderDetails->city}}</p>
                                                </li>
                                                <li>
                                                    <p>State: {{$orderDetails->state}}</p>
                                                </li>
                                                <li>
                                                    <p>Country: {{$orderDetails->country}}</p>
                                                </li>
                                                <li>
                                                    <p>Pincode: {{$orderDetails->pincode}}</p>
                                                </li>
                                                <li>
                                                    <p>Mobile No: {{$orderDetails->mobile}}</p>
                                                </li>
                                                
                                            </ul>
                                            
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-12">
                            
                                    <!-- Orders Section -->
                                    
                                        <div class="table-content table-responsive">
                                            <table class="table text-center">
                                                <thead style="background-color:#00AAFF;">
                                                    <tr style="color:white;">
                                                            <th class="text-center">Product Code</th>
                                                            <th class="text-center">Product Name</th>
                                                            <th class="text-center">Product Size</th>
                                                            <th class="text-center">Product Color</th>
                                                            <th class="text-center">Product Price</th>
                                                            <th class="text-center">Product Qty</th>
                                                            
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($orderDetails->orders as $ord)
                                                        <tr>
                                                            <td>{{$ord->product_code}}</td>
                                                            <td>
                                                                {{$ord->product_name}}
                                                            </td>
                                                            <td>{{$ord->product_size}}</td>
                                                            <td>{{$ord->product_color}}</td>
                                                            <td>{{$ord->product_price}}</td>
                                                            <td>{{$ord->product_qty}}</td>
                                                            
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

@endsection