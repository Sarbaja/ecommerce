@extends('layouts.layoutfrontend.frontend_main')
@section('content')

    <!-- Breadcrumb area Start -->
    <div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                        <h1 class="page-title">Cart</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Cart</span></li>
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

                    <div class="col-lg-8 mb-md--50">
                        <form class="cart-form" action="#">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="table-content table-responsive">
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th>&nbsp;</th>
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
                                                        <td class="product-remove text-left"><a href="{{ url('/cart/delete-product/' .$cart->id)}}"><i class="fas fa-times"></i></a></td>
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
                                                                @if($cart->quantity>1)
                                                                    <a href="{{ url('/cart/update-quantity/' .$cart->id. '/-1') }}" class="" style="padding:4px;">-</a>
                                                                @endif
                                                                <a href="{{ url('/cart/update-quantity/' .$cart->id. '/1') }}" class="" style="padding:4px;">+</a>
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
                        </form>
                            
                            <div class="row no-gutters border-top pt--20 mt--20">
                                
                                <div class="col-sm-6 text-sm-right">
                                    <button type="submit" class="cart-form__btn">Clear Cart</button>
                                    <button type="submit" class="cart-form__btn">Update Cart</button>
                                </div>
                            </div> 

                            <!-- User Action Start -->
                            <div class="user-actions user-actions__coupon" style="margin-top:100px;">
                                <div class="message-box mb--30">
                                    <p><i class="fas fa-exclamation-circle"></i> Have A Coupon? <a class="expand-btn" href="#coupon_info">Click Here To Enter Your Code.</a></p>
                                </div>
                                <div id="coupon_info" class="user-actions__form hide-in-default">
                                    <form action="{{ url('cart/apply-coupon')}}" method="post" class="form">
                                        {{ csrf_field() }}
                                        <p>If you have a coupon code, please apply it below.</p>
                                        <div class="form__group d-sm-flex">
                                            <input type="text" name="coupon_code" id="coupon_code" class="form__input form__input--2 mr--20 mr-xs--0" placeholder="Coupon Code">
                                            <input type="submit" value="Apply Coupon" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- User Action End -->
                            
    
                    </div>
                        <div class="col-lg-4">
                            <div class="cart-collaterals">
                                <div class="cart-totals">
                                    <h5 class="font-size-14 font-bold mb--15">Cart totals</h5>
                                    <div class="cart-calculator">
                                        <div class="cart-calculator__item">
                                            @if(!empty(Session::get('CouponAmount')))

                                                <div class="cart-calculator__item--head">
                                                    <span>Subtotal</span>
                                                </div>
                                                <div class="cart-calculator__item--value">
                                                    <span>$<?php echo $total_amount; ?></span>
                                                </div>
                                                <div class="cart-calculator__item--head">
                                                    <span>Coupon Discount</span>
                                                </div>
                                                <div class="cart-calculator__item--value">
                                                    <span>$<?php echo Session::get('CouponAmount'); ?></span>
                                                </div>
                                                <div class="cart-calculator__item--head">
                                                    <span>Grandtotal</span>
                                                </div>
                                                <div class="cart-calculator__item--value">
                                                    <span>$<?php echo $total_amount - Session::get('CouponAmount'); ?></span>
                                                </div>
                                            
                                            @else
                                                <div class="cart-calculator__item--head">
                                                    <span>Grandtotal</span>
                                                </div>
                                                <div class="cart-calculator__item--value">
                                                    <span>$<?php echo $total_amount; ?></span>
                                                </div>

                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <a href="{{url('/checkout')}}" class="btn btn-fullwidth btn-bg-red btn-color-white btn-hover-2">
                                    Proceed To Checkout
                                </a>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->

@endsection