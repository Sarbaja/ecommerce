@extends('layouts.layoutfrontend.frontend_main')
@section('content')

    <!-- Breadcrumb area Start -->
    <div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                        <h1 class="page-title">Order Review</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Order Review</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area End -->

    <!-- Success and Error message -->
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
        <div class="page-content-inner">
            <div class="container">
                    <div class="row pt--50 pt-md--40 pt-sm--20"></div> 
                    
                    <!-- Billing and Shipping Address -->
                    <div class="row pb--80 pb-md--60 pb-sm--40">
                                <!-- Checkout Area Start --> 
                                <!-- Billing Form --> 
                                
                                <div class="col-xl-5 offset-xl-1 col-lg-6 mt-md--40">
                                        <div class="order-details">
                                            <div class="checkout-title mt--10">
                                                <h2>Billing Address</h2>
                                            </div>
                                            <div class="table-content table-responsive mb--30">
                                                <table class="table order-table order-table-2">
                                                    <thead>
                                                        <tr>
                                                            <th>Billing Name</th>
                                                            <th class="text-right">{{$userDetails->name}}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>Billing Address</th>
                                                            <td class="text-right">{{$userDetails->address}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Billing City
                                                            </th>
                                                            <td class="text-right">{{$userDetails->city}}</td>
                                                        </tr>
                                                        <tr>
                                                                <th>Billing State</th>
                                                                <td class="text-right">{{$userDetails->state}}</td>
                                                        </tr>
                                                        <tr>
                                                                <th>Billing Country</th>
                                                                <td class="text-right">{{$userDetails->country}}</td>
                                                        </tr>
                                                        <tr>
                                                                <th>Billing Pincode</th>
                                                                <td class="text-right">{{$userDetails->pincode}}</td>
                                                        </tr>
                                                        <tr>
                                                                <th>Billing Mobile</th>
                                                                <td class="text-right">{{$userDetails->mobile}}</td>
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>
                                            </div>
                                            <!--<div class="checkout-payment">
                                                <form action="#" class="payment-form">
                                                    <div class="payment-group mb--10">
                                                        <div class="payment-radio">
                                                            <input type="radio" value="bank" name="payment-method" id="bank" checked>
                                                            <label class="payment-label" for="cheque">Direct Bank Transfer</label>
                                                        </div>
                                                        <div class="payment-info" data-method="bank">
                                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                                        </div>
                                                    </div>
                                                    <div class="payment-group mb--10">
                                                        <div class="payment-radio">
                                                            <input type="radio" value="cheque" name="payment-method" id="cheque">
                                                            <label class="payment-label" for="cheque">
                                                                cheque payments
                                                            </label>
                                                        </div>
                                                        <div class="payment-info cheque hide-in-default" data-method="cheque">
                                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                        </div>
                                                    </div>
                                                    <div class="payment-group mb--10">
                                                        <div class="payment-radio">
                                                            <input type="radio" value="cash" name="payment-method" id="cash">
                                                            <label class="payment-label" for="cash">
                                                                CASH ON DELIVERY
                                                            </label>
                                                        </div>
                                                        <div class="payment-info cash hide-in-default" data-method="cash">
                                                            <p>Pay with cash upon delivery.</p>
                                                        </div>
                                                    </div>
                                                    <div class="payment-group mt--20">
                                                        <p class="mb--15">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                                        <button type="submit" class="btn btn-fullwidth btn-bg-red btn-color-white btn-hover-2">Place Order</button>
                                                    </div>
                                                </form>
                                            </div>-->
                                        </div>
                                </div> 

                                <!-- Shipping Form -->
                                <div class="col-xl-5 offset-xl-1 col-lg-6 mt-md--40">
                                        <div class="order-details">
                                            <div class="checkout-title mt--10">
                                                <h2>Shipping Address</h2>
                                            </div>
                                            <div class="table-content table-responsive mb--30">
                                                <table class="table order-table order-table-2">
                                                    <thead>
                                                        <tr>
                                                            <th>Shipping Name</th>
                                                            <th class="text-right">{{$shippingDetails->name}}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>Shipping Address</th>
                                                            <td class="text-right">{{$shippingDetails->address}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Shipping City
                                                            </th>
                                                            <td class="text-right">{{$shippingDetails->city}}</td>
                                                        </tr>
                                                        <tr>
                                                                <th>Shipping State</th>
                                                                <td class="text-right">{{$shippingDetails->state}}</td>
                                                        </tr>
                                                        <tr>
                                                                <th>Shipping Country</th>
                                                                <td class="text-right">{{$shippingDetails->country}}</td>
                                                        </tr>
                                                        <tr>
                                                                <th>Shipping Pincode</th>
                                                                <td name="pincode" class="text-right">{{$shippingDetails->pincode}}</td>
                                                        </tr>
                                                        <tr>
                                                                <th>Shipping Mobile</th>
                                                                <td class="text-right">{{$shippingDetails->mobile}}</td>
                                                        </tr>
                                                    </tbody>
                                                    
                                                </table>
                                            </div>
                                            <!--<div class="checkout-payment">
                                                <form action="#" class="payment-form">
                                                    <div class="payment-group mb--10">
                                                        <div class="payment-radio">
                                                            <input type="radio" value="bank" name="payment-method" id="bank" checked>
                                                            <label class="payment-label" for="cheque">Direct Bank Transfer</label>
                                                        </div>
                                                        <div class="payment-info" data-method="bank">
                                                            <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                                        </div>
                                                    </div>
                                                    <div class="payment-group mb--10">
                                                        <div class="payment-radio">
                                                            <input type="radio" value="cheque" name="payment-method" id="cheque">
                                                            <label class="payment-label" for="cheque">
                                                                cheque payments
                                                            </label>
                                                        </div>
                                                        <div class="payment-info cheque hide-in-default" data-method="cheque">
                                                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                        </div>
                                                    </div>
                                                    <div class="payment-group mb--10">
                                                        <div class="payment-radio">
                                                            <input type="radio" value="cash" name="payment-method" id="cash">
                                                            <label class="payment-label" for="cash">
                                                                CASH ON DELIVERY
                                                            </label>
                                                        </div>
                                                        <div class="payment-info cash hide-in-default" data-method="cash">
                                                            <p>Pay with cash upon delivery.</p>
                                                        </div>
                                                    </div>
                                                    <div class="payment-group mt--20">
                                                        <p class="mb--15">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                                        <button type="submit" class="btn btn-fullwidth btn-bg-red btn-color-white btn-hover-2">Place Order</button>
                                                    </div>
                                                </form>
                                            </div>-->
                                        </div>
                                </div>
                    </div>

                    <div class="row">
                            <div class="col-lg-8 mb-md--50">
                                
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="table-content table-responsive">
                                                <table class="table text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>&nbsp;</th>
                                                            <th class="text-left">Product</th>
                                                            <th>price</th>
                                                            <th>quantity</th>
                                                            <th>total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $total_amount = 0; ?>
                                                        @foreach($userCart as $cart)
                                                            <tr>
                                                                <td class="product-thumbnail text-left">
                                                                    <img style="width:70px;" src="{{asset('images/backend-img/products/small/' .$cart->image) }}" alt="Product Thumnail">
                                                                </td>
                                                                <td class="product-name text-left wide-column">
                                                                    <h3>
                                                                        <a href="product-details.html">{{$cart->product_name}}</a>
                                                                    </h3>
                                                                    <p>{{$cart->product_code}} | {{$cart->size}}</p>
                                                                
                                                                </td>
                                                                <td class="product-price">
                                                                    <span class="product-price-wrapper">
                                                                        <span class="money">{{$cart->price}}</span>
                                                                    </span>
                                                                </td>
                                                                <td class="product-quantity">
                                                                    <div class="">
                                                                        <input type="number" class="quantity-input" name="quantity" id="qty-1" value="{{$cart->quantity}}" min="1">
                                                                        
                                                                    </div>
                                                                </td>
                                                                <td class="product-total-price">
                                                                    <span class="product-price-wrapper">
                                                                        <span class="money">{{$cart->price*$cart->quantity}}</span>
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <?php $total_amount = $total_amount + ($cart->price*$cart->quantity); ?>
                                                        @endforeach
                                                        
                                                    </tbody>
                                                </table>
                                            </div>  
                                        </div>
                                    </div>
                                
                            </div>
                            <div class="col-lg-4">
                                    <div class="cart-collaterals">
                                        <div class="cart-totals">
                                            <h5 class="font-size-14 font-bold mb--15">Cart totals</h5>
                                            <div class="cart-calculator">
                                                <div class="cart-calculator__item">
                                                        <div class="cart-calculator__item--head">
                                                            <span>Subtotal</span>
                                                        </div>
                                                        <div class="cart-calculator__item--value">
                                                            <span>$<?php echo $total_amount; ?></span>
                                                        </div>
                                                        <div class="cart-calculator__item--head">
                                                            <span>Shipping</span>
                                                        </div>
                                                        <div class="cart-calculator__item--value">
                                                            <span>Free</span>
                                                        </div>
                                                        <div class="cart-calculator__item--head">
                                                            <span>Discount</span>
                                                        </div>
                                                        <div class="cart-calculator__item--value">
                                                            <span>
                                                               @if(!empty( Session::get('CouponAmount'))) RS {{ Session::get('CouponAmount') }}
                                                                @else $ 0 
                                                                @endif
                                                            </span>
                                                        </div>
                                                        <div class="cart-calculator__item--head">
                                                            <span>Grandtotal</span>
                                                        </div>
                                                        <div class="cart-calculator__item--value">
                                                            <span>$<?php echo $grand_total = $total_amount - Session::get('CouponAmount'); ?></span>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="checkout-payment">
                                                    <form name="paymentForm" id="paymentForm" action="{{ url('/place-order') }}" method="post" class="payment-form">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="grand_total" value="{{ $grand_total }}">
                                                                                                                <input type="hidden" name="grand_total" value="{{ $grand_total }}">

                                                        <div class="payment-group mb--10">
                                                            <div class="payment-radio">
                                                                
                                                                <label class="payment-label"><strong>Select Payment Mathod</strong></label>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="payment-group mb--10">
                                                            <div class="payment-radio">
                                                                <input type="radio" id="Paypal" value="Paypal" name="payment_method" id="cheque">
                                                                <label class="payment-label">
                                                                    Paypal
                                                                </label>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="payment-group mb--10">
                                                            <div class="payment-radio">
                                                                <input type="radio" id="COD" value="COD" name="payment_method" id="cash">
                                                                <label class="payment-label">
                                                                    CASH ON DELIVERY
                                                                </label>
                                                            </div>  
                                                        </div>
                                                        <div class="payment-group mt--20">
                                                            <p class="mb--15">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                                            <button type="submit" class="btn btn-fullwidth btn-bg-red btn-color-white btn-hover-2" onclick="return selectPaymentMethod();">Place Order</button>
                                                        </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                    </div>
                
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->






@endsection