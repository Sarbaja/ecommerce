@extends('layouts.layoutfrontend.frontend_main')
@section('content')

    <div class="container text-center">
        <div class="row" style="margin-top:90px;padding:10px;">
            <div class="col-md-12">
                <h1><strong><span style="color:#f1b8c4;">THANKS FOR BUYING FROM BURGEON ONLINE MARKETPLACE</span></strong></h1>
            </div>
        </div>
        
        <div class="row">
                <div class="col-md-12">
                    <p>Your order has been placed</p>
                </div>
        </div>
        <div class="row">
                <div class="col-md-12">
                    <p>Your paypal order has been placed</p>
                    <p>Your order number is {{Session::get('order_id')}} and total payable amount is $ {{Session::get('grand_total') }}</p>
                    <p>Thanks for the payment. We will process your order very soon.</p>
                </div>
        </div>

        <div class="row" style="margin-bottom:90px;">
                <div class="col-md-12">
                    <h3 style="padding:20px;"><a href="{{ url('/') }}">Back To Home Page</a></h3>
                </div>
        </div>

    </div>

@endsection


<!-- Forgetting Coupon and cart sessions once order is placed -->
<?php

    Session::forget('grand_total');
    Session::forget('order_id');

    Session::forget('CouponAmount');
    Session::forget('CouponCode');

?>