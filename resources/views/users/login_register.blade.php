@extends('layouts.layoutfrontend.frontend_main')
@section('content')

    <!-- Breadcrumb area Start -->
    <div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                        <h1 class="page-title">Login &amp; Register</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Login &amp; Register</span></li>
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
                            <h3 class="heading__tertiary mb--30">Login</h3>
                            <form class="form form--login" method="post" action="{{ url('/user-login')}}" id="LoginForm" name="LoginForm">
                                {{ csrf_field() }}
                                <div class="form__group mb--20">
                                    <label class="form__label form__label--2" for="username_email">Username or email address <span class="required">*</span></label>
                                    <input name="email" type="email" class="form__input form__input--2" id="username_email" name="username_email">
                                </div>
                                <div class="form__group mb--20">
                                   <label class="form__label form__label--2" for="login_password">Password <span class="required">*</span></label>
                                    <input name="password" type="password" class="form__input form__input--2" id="login_password" name="login_password">
                                </div>
                                <div class="d-flex align-items-center mb--20">
                                    <div class="form__group mr--30">
                                        <input type="submit" value="Log in" class="btn-submit">
                                        <a href="{{ url('forgot-password')}}">Forgot Password</a>
                                    </div>
                                    <div class="form__group">
                                        <label class="form__label checkbox-label" for="store_session">
                                            <input type="checkbox" name="store_session" id="store_session">
                                            <span>Remember me</span>
                                        </label>
                                    </div>
                                </div>
                                <a class="forgot-pass" href="#">Lost your password?</a>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="register-box">
                            <h4 class="heading__tertiary mb--30">Register</h4>
                            <form class="form form--login" id="registerForm" method="post" name="registerForm" action="{{ url('/user-register')}}">
                                {{ csrf_field() }}
                                <div class="form__group mb--20">
                                    <label class="form__label form__label--2" for="name">Full Name<span class="required">*</span></label>
                                    <input type="text" class="form__input form__input--2" id="name" name="name">
                                </div>
                                <div class="form__group mb--20">
                                    <label class="form__label form__label--2" for="email">Email address <span class="required">*</span></label>
                                    <input type="email" class="form__input form__input--2" id="email" name="email">
                                </div>
                                <div class="form__group mb--20">
                                   <label class="form__label form__label--2" for="register_password">Password <span class="required">*</span></label>
                                    <input type="password" class="form__input form__input--2" id="myPassword" name="password">
                                </div>
                                <p class="privacy-text mb--20">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
                                <div class="form__group">
                                    <input type="submit" value="Register" class="btn btn-submit btn-style-1">
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