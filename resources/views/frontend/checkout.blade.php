@extends('layouts.layoutfrontend.frontend_main')
@section('content')

     <!-- Breadcrumb area Start -->
     <div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                        <h1 class="page-title">Checkout</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Checkout</span></li>
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
        <div class="page-content-inner">
            <div class="container">
                <div class="row pt--50 pt-md--40 pt-sm--20">
                    
                </div> 
                <form action="{{ url('/checkout') }}" method="post" class="form form--checkout">
                    {{ csrf_field() }}
                    <div class="row pb--80 pb-md--60 pb-sm--40">
                                <!-- Checkout Area Start --> 
                                <!-- Billing Form --> 
                                <div class="col-lg-6">
                                    <div class="checkout-title mt--10">
                                        <h2>Billing Details</h2>
                                    </div>
                                    <div class="checkout-form">
                                            <div class="form-row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="billing_company" class="form__label form__label--2">Billing Name</label>
                                                    <input type="text" name="billing_name" id="billing_name" @if(!empty($userDetails->name)) value="{{$userDetails->name}}" @endif class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                    <div class="form__group col-12">
                                                        <label for="billing_company" class="form__label form__label--2">Billing Address</label>
                                                        <input type="text" name="billing_address" id="billing_address"  @if(!empty($userDetails->address)) value="{{$userDetails->address}}" @endif class="form__input form__input--2">
                                                    </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                    <div class="form__group col-12">
                                                        <label for="billing_company" class="form__label form__label--2">Billing City</label>
                                                        <input type="text"name="billing_city" id="billing_city"  @if(!empty($userDetails->city)) value="{{$userDetails->city}}" @endif class="form__input form__input--2">
                                                    </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                    <div class="form__group col-12">
                                                        <label for="billing_company" class="form__label form__label--2">Billing State</label>
                                                        <input type="text" name="billing_state" id="billing_state"  @if(!empty($userDetails->state)) value="{{$userDetails->state}}" @endif class="form__input form__input--2">
                                                    </div>
                                            </div>
                                            <!-- Select Option -->
                                            <div class="form-row mb--20">
                                                    <div class="form__group col-12">
                                                        <label for="billing_country" class="form__label form__label--2">Billing Country <span class="required">*</span></label>
                                                        <select id="billing_country" name="billing_country" class="form__input form__input--2 nice-select">
                                                            <option value="">Select a country…</option>
                                                            @foreach($countries as $country)
                                                                <option value="{{$country->country_name}}" @if(!empty($userDetails->country) && $country->country_name == $userDetails->country) selected @endif>{{$country->country_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                    <div class="form__group col-12">
                                                        <label for="billing_company" class="form__label form__label--2">Billing Pincode</label>
                                                        <input type="text" name="billing_pincode" id="billing_pincode"  @if(!empty($userDetails->pincode)) value="{{$userDetails->pincode}}" @endif class="form__input form__input--2">
                                                    </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                    <div class="form__group col-12">
                                                        <label for="billing_company" class="form__label form__label--2">Billing Mobile</label>
                                                        <input type="text" name="billing_mobile" id="billing_mobile"  @if(!empty($userDetails->mobile)) value="{{$userDetails->mobile}}" @endif class="form__input form__input--2">
                                                    </div>
                                            </div> 
                                            <!-- Material unchecked -->
                                            <div class="form-row mb--20">
                                                <div class="form__group col-12">
                                                    <div class="form-check">
                                                            <input value="{{ $userDetails->name }}" type="checkbox" class="form-check-input" id="billtoship">
                                                            <label class="form-check-label" for="billtoship">Shipping Address same as Billing Address</label>
                                                    </div>   
                                                </div>
                                            </div>
                                    </div>
                                </div>

                                <!-- Shipping Form -->
                                <div class="col-lg-6">
                                    <div class="checkout-title mt--10">
                                        <h2>Shipping Details</h2>
                                    </div>
                                    <div class="checkout-form">
                                        
                                                <div class="form-row mb--20">
                                                    <div class="form__group col-12">
                                                        <label for="billing_company" class="form__label form__label--2">Shipping Name</label>
                                                        <input  @if(!empty($shippingDetails->name)) value="{{$shippingDetails->name}}" @endif type="text" name="shipping_name" id="shipping_name" class="form__input form__input--2">
                                                    </div>
                                                </div>
                                                <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_company" class="form__label form__label--2">Shipping Address</label>
                                                            <input @if(!empty($shippingDetails->address)) value="{{$shippingDetails->address}}" @endif type="text" name="shipping_address" id="shipping_address" class="form__input form__input--2">
                                                        </div>
                                                </div>
                                                <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_company" class="form__label form__label--2">Shipping City</label>
                                                            <input @if(!empty($shippingDetails->city)) value="{{$shippingDetails->city}}" @endif type="text"name="shipping_city" id="shipping_city" class="form__input form__input--2">
                                                        </div>
                                                </div>
                                                <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_company" class="form__label form__label--2">Shipping State</label>
                                                            <input @if(!empty($shippingDetails->state)) value="{{$shippingDetails->state}}" @endif type="text" name="shipping_state" id="shipping_state" class="form__input form__input--2">
                                                        </div>
                                                </div>
                                                <!-- Select Option -->
                                                <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_country" class="form__label form__label--2">Shipping Country <span class="required">*</span></label>
                                                            <select id="shipping_country" name="shipping_country" class="form__input form__input--2 nice-select">
                                                                <option value="">Select a country…</option>
                                                                @foreach($countries as $country)
                                                                    <option value="{{ $country->country_name }}"  @if(!empty($shippingDetails->country) && $country->country_name == $shippingDetails->country) selected @endif>{{ $country->country_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_company" class="form__label form__label--2">Shipping Pincode</label>
                                                            <input @if(!empty($shippingDetails->pincode)) value="{{$shippingDetails->pincode}}" @endif type="text" name="shipping_pincode" id="shipping_pincode" class="form__input form__input--2">
                                                        </div>
                                                </div>
                                                <div class="form-row mb--20">
                                                        <div class="form__group col-12">
                                                            <label for="billing_company" class="form__label form__label--2">Shipping Mobile</label>
                                                            <input @if(!empty($shippingDetails->mobile)) value="{{$shippingDetails->mobile}}" @endif type="text" name="shipping_mobile" id="shipping_mobile" class="form__input form__input--2">
                                                        </div>
                                                </div>
                                                
                                                <div class="payment-group mt--20">
                                                        <p class="mb--15">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                                        <button type="submit" class="btn btn-fullwidth btn-bg-red btn-color-white btn-hover-2">Place Order</button>
                                                </div>
                                    </div>
                                </div>
                                <!-- Checkout Area End -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->


@endsection