@extends('layouts.layoutfrontend.frontend_main')
@section('content')

    <!-- Breadcrumb area Start -->
    <div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                        <h1 class="page-title">Forgot Password</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Forgot Password</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area End -->

    <div class="container">
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
    </div>

    <!-- Main Content Wrapper Start -->
    <div class="main-content-wrapper">
        <div class="page-content-inner pt--75 pb--80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-sm--50">
                        <div class="login-box">
                            <h3 class="heading__tertiary mb--30">Forgot Password</h3>
                            <form class="form form--login" method="post" action="{{ url('/forgot-password')}}" id="forgotPasswordForm" name="forgotPasswordForm">
                                {{ csrf_field() }}
                                <div class="form__group mb--20">
                                    <label class="form__label form__label--2" for="username_email">Username or email address <span class="required">*</span></label>
                                    <input name="email" type="email" class="form__input form__input--2" id="email" name="email" required="">
                                </div>
                               
                                <div class="d-flex align-items-center mb--20">
                                    <div class="form__group mr--30">
                                        <input type="submit" value="Update" class="btn-submit">
                                        
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->


@endsection