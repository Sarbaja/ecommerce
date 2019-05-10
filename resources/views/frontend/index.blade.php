@extends('layouts.layoutfrontend.frontend_main')
@section('content')

<div class="main-content-wrapper">

        <!-- Slider area Start -->
        <section class="homepage-slider-wrapper mb--95">
                <div class="accordion-slider-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="accordion-slider">
                                        <div class="accordion-slider__item accordion-click bg-style active slider-height bg-image" data-bg-image="{{ asset('images/frontend-img/slider/slider-4.jpg') }}">
                                            <div class="slider-content text-center ml--40 ml-sm--0">
                                                <div class="transparent-bg-shape mb--50 ptb--50">
                                                    <h1 class="heading__primary color--white">
                                                        <span class="heading__primary--sub">Stay Warm</span>
                                                        <span class="heading__primary--main">Winter -2019</span>
                                                    </h1>
                                                </div>
                                                <a href="{{ url('/products') }}" class="btn btn-color-white">Shop Now →</a>
                                            </div>  
                                        </div>
                                        <div class="accordion-slider__item accordion-click bg-style slider-height bg-image" data-bg-image="{{ asset('images/frontend-img/slider/slider-5.jpg') }}">
                                            <div class="slider-content text-center ml--40 ml-sm--0">
                                                <div class="transparent-bg-shape mb--50 ptb--50">
                                                    <h1 class="heading__primary color--white">
                                                        <span class="heading__primary--sub">Stay Warm</span>
                                                        <span class="heading__primary--main">Winter -2019</span>
                                                    </h1>
                                                </div>
                                                <a href="{{ url('/products') }}" class="btn btn-color-white">Shop Now →</a>
                                            </div>  
                                        </div>
                                        <div class="accordion-slider__item accordion-click bg-style slider-height bg-image" data-bg-image="{{ asset('images/frontend-img/slider/slider-6.jpg') }}">
                                            <div class="slider-content text-center ml--40 ml-sm--0">
                                                <div class="transparent-bg-shape mb--50 ptb--50">
                                                    <h1 class="heading__primary color--white">
                                                        <span class="heading__primary--sub">Stay Warm</span>
                                                        <span class="heading__primary--main">Winter -2019</span>
                                                    </h1>
                                                </div>
                                                <a href="{{ url('/products') }}" class="btn btn-color-white">Shop Now →</a>
                                            </div>  
                                        </div>
                                        <div class="accordion-slider__item accordion-click bg-style slider-height bg-image" data-bg-image="{{ asset('images/frontend-img/slider/slider-7.jpg') }}">
                                            <div class="slider-content text-center ml--40 ml-sm--0">
                                                <div class="transparent-bg-shape mb--50 ptb--50">
                                                    <h1 class="heading__primary color--white">
                                                        <span class="heading__primary--sub">Stay Warm</span>
                                                        <span class="heading__primary--main">Winter -2019</span>
                                                    </h1>
                                                </div>
                                                <a href="{{ url('/products') }}" class="btn btn-color-white">Shop Now →</a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            <!--<div class="zakas-element-carousel homepage-slider"
            data-slick-options='{
                "arrows": true,
                "isCustomArrow": true,
                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-double-left" },
                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-double-right" },
                "appendArrows": ".slick-btn-wrapper"
            }'>
                <div class="single-slide slider-height bg-style d-flex align-items-center" style="background-image: url(assets/img/slider/slider-1.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-md-7 col-sm-8">
                                <div class="slider-content bg-shape text-center ptb--100 ptb-xl--70">
                                    <h1 class="heading__primary mb--30 mb-xl--20">
                                        <span class="heading__primary--sub" data-animation="fadeInUp" data-duration=".4s" data-delay=".7s">Stay Warm</span>
                                        <span class="heading__primary--main" data-animation="fadeInUp" data-duration=".4s" data-delay="1s">Winter -2019</span>
                                    </h1>
                                    <a href="shop.html" class="btn" data-animation="fadeInUp" data-duration=".4s" data-delay="1.2s">Shop Now <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide slider-height bg-style d-flex align-items-center" style="background-image: url(assets/img/slider/slider-2.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-md-7 col-sm-8">
                                <div class="slider-content bg-shape text-center ptb--100 ptb-xl--70">
                                    <h1 class="heading__primary mb--30 mb-xl--20">
                                        <span class="heading__primary--sub" data-animation="fadeInUp" data-duration=".4s" data-delay=".7s">Stay Warm</span>
                                        <span class="heading__primary--main" data-animation="fadeInUp" data-duration=".4s" data-delay="1s">Winter -2019</span>
                                    </h1>
                                    <a href="shop.html" class="btn" data-animation="fadeInUp" data-duration=".4s" data-delay="1.2s">Shop Now <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide slider-height bg-style d-flex align-items-center" style="background-image: url(assets/img/slider/slider-3.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-md-7 col-sm-8">
                                <div class="slider-content bg-shape text-center ptb--100  ptb-xl--80">
                                    <h1 class="heading__primary mb--30">
                                        <span class="heading__primary--sub" data-animation="fadeInUp" data-duration=".4s" data-delay=".7s">Stay Warm</span>
                                        <span class="heading__primary--main" data-animation="fadeInUp" data-duration=".4s" data-delay="1s">Winter -2019</span>
                                    </h1>
                                    <a href="shop.html" class="btn" data-animation="fadeInUp" data-duration=".4s" data-delay="1.2s">Shop Now <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slick-btn-wrapper"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Slider area End -->

        <!-- Banner Area Start -->
        <div class="banner-area mb--45">
            <div class="container-fluid">
                <div class="row gutter-50 gutter-md-40">

                    @foreach($categories as $maincat)
                        <div class="col-md-6 mb--50">
                            <div class="banner-box">
                                <div class="banner-inner banner-hover-2 banner-info-over-img banner-info-left-top">
                                    <figure class="banner-image">
                                        <img src="{{ asset('images/frontend-img/banner/banner-15.jpg') }}" alt="Banner">
                                    </figure>
                                    <div class="banner-info">
                                        <div class="banner-info--inner pl--50 pt--150">
                                            <p class="banner-paragraph-1 color--white">Coolest Collection</p>
                                            <p class="banner-title-2 color--white font-weight-light mb--0">{{$maincat->name}}</p>
                                            <a href="{{ url('/products/'. $maincat->url) }}" class="btn btn-no-bg btn-color-white">Shop Now <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                    <a href="{{ url('/products') }}" class="banner-link"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Banner Area End -->


        <!-- Product Tab area Start -->
        @include('includes.frontendinclude.frontend_indexproduct')
        <!-- Product Tab area End -->

        <!-- Banner Area Start -->
        <div class="banner-area home_01_banner_01 position-relative">
            <div class="conntainer-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="banner-box">
                            <div class="banner-inner banner-bg-shape banner-info-over-img banner-info-center">
                                <figure class="banner-image">
                                    <img src="{{ asset('images/frontend-img/banner/banner-1.jpg') }}" alt="Banner">
                                </figure>
                                <div class="banner-info">
                                    <div class="banner-info--inner text-center">
                                        <p class="banner-title-1 color--white">Up Coming Discount</p>
                                        <p class="banner-title-2 color--white mb--20 mb-lg--10">On Winter Clothing</p>
                                        <a href="{{ url('/shop') }}" class="btn banner-btn">Shop Now <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                                <a href="{{ url('/products') }}" class="banner-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="banner-box">
                            <div class="banner-inner banner-bg-shape banner-info-over-img banner-info-center">
                                <figure class="banner-image">
                                    <img src="{{ asset('images/frontend-img/banner/banner-2.jpg') }}" alt="Banner">
                                </figure>
                                <div class="banner-info">
                                    <div class="banner-info--inner text-center">
                                        <p class="banner-title-1 color--white">Up Coming Discount</p>
                                        <p class="banner-title-2 color--white mb--20 mb-lg--10">On Winter Clothing</p>
                                        <a href="{{ url('/shop') }}" class="btn banner-btn">Shop Now <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                                <a href="{{ url('/products') }}" class="banner-link"></a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-badge-wrapper abs-center">
                        <span class="banner-badge">
                            <span>30%</span>
                            Off
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->

        <!-- Method area Start -->
        <section class="method-area bg-color ptb--80 mb--95" data-bg-color="#f6f6f6">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-5 col-9 mb-md--50">
                        <div class="method-box">
                            <i class="fas fa-sync-alt"></i>
                            <h4>90 days return</h4>
                            <p>3 days for free return</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5 col-9 mb-md--50">
                        <div class="method-box">
                            <i class="far fa-paper-plane"></i>
                            <h4>Free Shipping</h4>
                            <p>Free shipping on order</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5 col-9 mb-xs--50">
                        <div class="method-box">
                            <i class="fas fa-user-tie"></i>
                            <h4>Proffesional Support</h4>
                            <p>info@company.com</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5 col-9">
                        <div class="method-box">
                            <i class="fas fa-gifts"></i>
                            <h4>Gift Card</h4>
                            <p>Gift Card On Purchage</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Method area End -->

        <!-- Newsletter Area Start -->
        <section class="newsletter-area mb--100">
            <div class="container">
                <div class="row mb--40 pb--1">
                    <div class="col-12 text-center">
                        <h2 class="heading__secondary mb--10">Subscribe To Our Newsletter</h2>
                        <p class="max-w-60 max-w-sm-95 mx-auto">Lorem og elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <form class="newsletter-form mc-form" action="https://company.us19.list-manage.com/subscribe/post?u=2f2631cacbe4767192d339ef2&amp;id=24db23e68a" method="post" target="_blank">
                            <input type="email" name="newsletter_email" id="newsletter_email" class="newsletter-form__input" placeholder="Enter Your E-mail Address">
                            <input type="submit" value="Subscribe Now" class="newsletter-form__submit">
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter Area End -->

</div>

@endsection