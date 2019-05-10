<?php

    use App\Http\Controllers\Controller;
    $mainCategories = Controller::mainCategories();
    use App\Product;
    $cartCount = Product::cartCount();
?>

<header class="header">
        <!--<div class="container-fluid" style="background-color:#f1b8c4;color:white;padding:8px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p style="color:white;">adhikari.sarbaja@gmail.com</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p style="color:white;">Select Language</p>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="header-inner fixed-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 col-lg-9 col-3">
                        <nav class="main-navigation">
                            <div class="site-branding">
                                <a href="index.html" class="logo" style="font-family: Vivaldi !important;color: #f1b8c4;font-size:30px;">
                                    <!--<figure class="logo--transparent">
                                        <img src="assets/img/logo/logo-white.png" alt="Logo">
                                    </figure>
                                    <figure class="logo--normal">
                                        <img src="assets/img/logo/logo.png" alt="Logo">
                                    </figure>-->
                                   Burgeon
                                </a>
                            </div>
                            <div class="mainmenu-nav d-none d-lg-block">
                                <ul class="mainmenu">
                                    <li class="mainmenu__item menu-item-has-children active">
                                        <a href="{{ url('/')}}" class="mainmenu__link">
                                            <span class="mm-text">Home</span>
                                        </a>
                                        
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children">
                                        <a href="{{url('/products')}}" class="mainmenu__link">
                                            <span class="mm-text">Shop</span>
                                        </a>
                                        <ul class="megamenu">
                                            @foreach($mainCategories as $cat)
                                                <li>
                                                    <a class="megamenu-title" href="{{ url('/products/' .$cat->url )}}">
                                                        <span class="mm-text">{{$cat->name}}</span>
                                                    </a>
                                                    <ul>
                                                        @foreach($cat->categories as $subcat)
                                                            @if($subcat->status == "1")
                                                                <li>
                                                                    <a href="{{ url('/products/'. $subcat->url) }}">
                                                                        <span class="mm-text">{{ $subcat->name }}</span>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                   
                                    <li class="mainmenu__item menu-item-has-children">
                                        <a href="#" class="mainmenu__link">
                                            <span class="mm-text">Pages</span>
                                        </a>
                                        
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ url('/my-account') }}">
                                                    <span class="mm-text">My Account</span>
                                                </a>
                                            </li>
                                            <li>
                                                    <a href="{{ url('/update-password') }}">
                                                        <span class="mm-text">Settings</span>
                                                    </a>
                                            </li>
                                            
                                            <li>
                                                <a href="{{ url('/cart') }}">
                                                    <span class="mm-text">Cart {{$cartCount}}</span>
                                                </a>
                                            </li>
                                          
                                            <li>
                                                <a href="#">
                                                    <span class="mm-text">Wishlist</span>
                                                </a>
                                            </li>
                                            <li><a href="{{ url('page/about-us')}}">About Us</a></li>
                                        <li><a href="{{ url('page/terms-conditions')}}">Terms &amp; Conditions</a></li>
                                        <li><a href="{{ url('page/policy')}}">Policy</a></li>
                                        <li><a href="{{ url('page/help')}}">Help</a></li>
                                        <li><a href="{{ url('page/contact-us')}}">Contact Us</a></li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="{{url('/contact')}}" class="mainmenu__link">
                                            <span class="mm-text">Contact Us</span>
                                        </a>
                                    </li>
                                    <li class="mainmenu__item">
                                        
                                                <div class="search-container">
                                                        <form action="{{ url('/search-products')}}" method="POST">
                                                          {{ csrf_field() }}
                                                          <input type="text" placeholder="Search Product" name="product">
                                                          <button type="submit"><i class="fas fa-search"></i></button>
                                                        </form>
                                                </div>
                                        
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-9 text-right">
                        <ul class="header-toolbar">
                            <li class="header-toolbar__item">
                                <a href="{{ url('/cart') }}" class="header-toolbar__btn">
                                        <i class="far fa-heart"></i>
                                </a>
                            </li>
                            <li class="header-toolbar__item"> <!-- Here you have deleted the overlay function see down it is in comment section do check it out-->
                                <a href="{{ url('/cart') }}" class="header-toolbar__btn">
                                        <i class="fas fa-shopping-cart"></i> <span style="color:#f1b8c4;font-size:16px;">({{$cartCount}})</span>
            
                                </a>
                            </li>
                            @if(empty(Auth::check()))
                                <li class="header-toolbar__item user-info">
                                    <a href="#" class="header-toolbar__btn">
                                        <i class="far fa-user"></i>
                                    </a>
                                    <ul class="user-info-menu">
                                        <li>
                                            <a href="{{ url('/login-register') }}">LogIn</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/login-register') }}">SignUp</a>
                                        </li>
                                    </ul>
                                </li>
                            @else

                                <li class="header-toolbar__item user-info">
                                    <a href="#" class="header-toolbar__btn">
                                        <i class="far fa-user"></i>
                                    </a>
                                    <ul class="user-info-menu"> 
                                        <li>
                                            <a href="{{ url('/my-account') }}"><strong>{{Auth::user()->name}}</strong></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/my-account') }}">My Account</a>
                                        </li>
                                        <li>
                                                    <a href="{{ url('/update-password') }}">
                                                        <span class="mm-text">Settings</span>
                                                    </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/user-logout') }}">LogOut</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/orders') }}">Orders</a>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                            <!--<li class="header-toolbar__item">
                                This contains the search area
                            </li>-->
                            <li class="header-toolbar__item d-lg-none">
                                <a href="#" class="header-toolbar__btn menu-btn">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>