@extends('layouts.layoutbackend.backend_main')

@section('content')

    <!-- MAIN -->
    <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                            <div class="col-md-6">
                                    <div class="white-box">
                                            <h3 class="settings-heading">Add Couponss</h3>
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
                                            <form class="form-horizontal form-material" name="add_coupon" id="add_coupon" method="post" action="{{ url('/admin/add-coupon') }}">
                                                {{ csrf_field() }}
                                                
                                        
                                                <div class="form-group">
                                                        <label class="col-md-12">Coupon Code</label>
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control form-control-line" name="coupon_code" id="coupon_code" minlength="5" maxlength="15" required=""> </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Amount</label>
                                                    <div class="col-md-12">
                                                        <input type="number" class="form-control form-control-line" min="0" name="amount" id="amount" required=""> </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="col-sm-12">Amount Type</label>
                                                        <div class="col-sm-12">
                                                            <select name="amount_type" id="amount_type" class="form-control form-control-line" required="">
                                                                
                                                                <option value="Percentage">Percentage</option>
                                                                <option value="Fixed">Fixed</option>
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-12">Expiry Date</label>
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control form-control-line" name="expiry_date" id="expiry_date" required="" autocomplete="off"> </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="col-md-2">Enable</label>
                                                        <div class="col-md-6">
                                                            <input type="checkbox" class="" name="status" id="status" value="1"> 
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <button type="submit" class="btn passbtn">Add Coupon</button>
                                                    </div>
                                                </div>
                                            </form>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

@endsection