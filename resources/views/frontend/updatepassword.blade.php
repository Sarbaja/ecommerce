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
                        <h1 style="margin-bottom:40px;">Update Password</h1>
                        <div class="user-dashboard-tab flex-column flex-md-row">
                            
                            <fieldset class="form__fieldset mb--20">
                                <legend class="form__legend">Password Settings</legend>
                                <div>
                                    <form action="{{ url('/update-password') }}" method="post" id="passwordForm" name="passwordForm" class="form form--account">
                                        {{ csrf_field() }}
                    
                                        
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label form__label--2" for="cur_pass">Current password</label>
                                                        <input type="password" name="current_pwd" id="current_pwd" class="form__input">
                                                        <span id="chkPwd"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label form__label--2" for="new_pass">New password</label>
                                                        <input type="password" name="new_pwd" id="new_pwd" class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label form__label--2" for="conf_new_pass">Confirm new password</label>
                                                        <input type="password" name="confirm_pwd" id="confirm_pwd" class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                       
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