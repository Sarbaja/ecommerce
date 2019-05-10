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
                    <p>Your order number is {{Session::get('order_id')}} and total payable amount is $ {{Session::get('grand_total') }}</p>
                    <p>Please make payment by clicking on below Payment Button</p>
                </div>
        </div>

        <div class="row" style="margin-bottom:90px;">
                <div class="col-md-12">
                    <h3 style="padding:20px;"><a href="{{ url('/') }}">Back To Home Page</a></h3>
                </div>
                <?php 
                    use App\Order;

                    $orderDetails = Order::getOrderDetails(Session::get('order_id'));
                    $orderDetails = json_decode(json_encode($orderDetails));
                    //echo "<pre>"; print_r($orderDetails); die;
                    $nameArr = explode(' ', $orderDetails->name);
                    $getCountryCode = Order::getCountryCode($orderDetails->country);

                ?>
                
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="upload" value="1">
                    <input type="hidden" name="business" value="burgeonsarbaja-facilitator@gmail.com">

                    <input type="hidden" name="item_name_1" value="{{Session::get('order_id')}}">
                    <input type="hidden" name="amount_1" value="{{Session::get('grand_total') }}">
                    <input type="hidden" name="first_name" value="{{ $nameArr[0] }}">
                    <input type="hidden" name="last_name" value="{{ $nameArr[1] }}">
                    <input type="hidden" name="address1" value="{{ $orderDetails->address }}">
                    <input type="hidden" name="address2" value="">
                    <input type="hidden" name="city" value="{{ $orderDetails->city }}">
                    <input type="hidden" name="state" value="{{ $orderDetails->state }}">
                    <input type="hidden" name="zip" value="{{ $orderDetails->pincode }}">
                    <input type="hidden" name="email" value="{{ $orderDetails->user_email }}">
                    <!--<input type="submit" value="PayPal">-->
                    <input type="hidden" name="return" value="{{url('paypal/thanks')}}">
                    <input type="hidden" name="cancel_return" value="{{url('paypal/cancel')}}">
                    <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_buynow_107x26.png" alt="Buy Now">
                    <img alt="" src="https://paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>

                <a target="_blank" href="{{ url('/invoice/' .$orderDetails->id) }}">View Invoice</a>
        </div>

    </div>

@endsection


<!-- Forgetting Coupon and cart sessions once order is placed -->
<?php

   /* Session::forget('grand_total');
    Session::forget('order_id');

    Session::forget('CouponAmount');
    Session::forget('CouponCode'); */

?>