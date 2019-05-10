@extends('layouts.layoutfrontend.frontend_main')
@section('content')

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
                    <div class="col-lg-12">
                        <h1 style="margin-bottom:40px;">Update Account</h1>
                        <div class="user-dashboard-tab flex-column flex-md-row">
                            
                            <fieldset class="form__fieldset mb--20">
                                <legend class="form__legend">Account Settings</legend>
                                <div>
                                    <form action="{{ url('/my-account') }}" method="post" id="accountForm" name="accountForm" class="form form--account">
                                        {{ csrf_field() }}
                    
                                        <div class="row mb--20">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <label class="form__label form__label--2" for="d_name">Full Name <span class="required">*</span></label>
                                                    <input value="{{$userDetails->name}}" type="text" name="name" id="name" class="form__input">
                                                    <span class="suggestion"><em>This will be how your name will be displayed in the account section and in reviews</em></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb--20">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <label class="form__label form__label--2" for="d_name">Address<span class="required">*</span></label>
                                                    <input value="{{$userDetails->address}}" type="text" name="address" id="address" class="form__input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb--20">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <label class="form__label form__label--2" for="d_name">City<span class="required">*</span></label>
                                                    <input value="{{$userDetails->city}}" type="text" name="city" id="city" class="form__input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb--20">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <label class="form__label form__label--2" for="d_name">State<span class="required">*</span></label>
                                                    <input value="{{$userDetails->state}}" type="text" name="state" id="state" class="form__input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb--20">
                                            <div class="form__group col-12">
                                                <label for="billing_country" class="form__label form__label--2">Country <span class="required">*</span></label>
                                                <select id="country" name="country" class="form__input form__input--2 nice-select">
                                                    <option value="">Select a country…</option>
                                                    @foreach($country as $place)
                                                        <option value="{{$place->country_name}}" @if($place->country_name == $userDetails->country) selected @endif>{{$place->country_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb--20">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <label class="form__label form__label--2" for="d_name">Pincode<span class="required">*</span></label>
                                                    <input value="{{$userDetails->pincode}}" value="{{$userDetails->name}}" type="text" name="pincode" id="pincode" class="form__input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb--20">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <label class="form__label form__label--2" for="d_name">Mobile No<span class="required">*</span></label>
                                                    <input value="{{$userDetails->mobile}}" type="text" name="mobile" id="mobile" class="form__input">
                                                </div>
                                            </div>
                                        </div>
                                        <!--<fieldset class="form__fieldset mb--20">
                                            <legend class="form__legend">Password change</legend>
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label form__label--2" for="cur_pass">Current password (leave blank to leave unchanged)</label>
                                                        <input type="password" name="cur_pass" id="cur_pass" class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label form__label--2" for="new_pass">New password (leave blank to leave unchanged)</label>
                                                        <input type="password" name="new_pass" id="new_pass" class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label form__label--2" for="conf_new_pass">Confirm new password</label>
                                                        <input type="password" name="conf_new_pass" id="conf_new_pass" class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>-->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <input type="submit" value="Save Changes" class="btn btn-style-1 btn-submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->






@endsection