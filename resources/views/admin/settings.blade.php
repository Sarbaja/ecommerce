@extends('layouts.layoutbackend.backend_main')

@section('content')

<!-- MAIN -->
<div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                        <h3>Hello, {{$adminDetails->username}}</h3>
                        <div class="col-md-6">
                                <div class="white-box">
                                        <h3 class="settings-heading">Update Password</h3>
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
                                        
                                        <form class="form-horizontal form-material" name="password_validate" id="password_validate" method="post" action="{{ url('/admin/update-password')}}">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label class="col-md-12">Current Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" class="form-control form-control-line" name="current_pwd" id="current_pwd" required=""> </div>
                                                    <span id="chkPwd" style="padding-left:20px;font-weight:bold;"></span>
                                            </div>
                                            
                                            <div class="form-group">
                                                    <label class="col-md-12">New Password</label>
                                                    <div class="col-md-12">
                                                        <input type="password" class="form-control form-control-line" name="new_pwd" id="new_pwd" required=""> </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="col-md-12">Confirm Password</label>
                                                    <div class="col-md-12">
                                                        <input type="password" class="form-control form-control-line" name="confirm_pwd" id="confirm_pwd" required=""> </div>
                                            </div>
                                    
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn passbtn">Update Password</button>
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