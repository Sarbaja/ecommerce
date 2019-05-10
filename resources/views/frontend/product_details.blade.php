@extends('layouts.layoutfrontend.frontend_main')
@section('content')

<!-- Breadcrumb area Start -->
    <div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                        <h1 class="page-title">Shop</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Product Details</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area End -->

    <!-- Success and error meesage -->
    <div class="container" style="padding:10px;">
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
        <div class="page-content-inner ptb--80">
            <div class="container">
                <div class="row no-gutters mb--80">
                    <div class="col-lg-7 product-main-image">
                        <div class="product-image">
                            <div class="product-gallery vertical-slide-nav">
                                <div class="product-gallery__large-image mb-md--30">
                                    <div class="product-gallery__wrapper">
                                        <div class="zakas-element-carousel main-slider image-popup"
                                        data-slick-options='{
                                            "slidesToShow": 1,
                                            "slidesToScroll": 1,
                                            "infinite": true,
                                            "arrows": false, 
                                            "asNavFor": ".nav-slider"
                                        }'>
                                            <figure class="product-gallery__image zoom"> <!-- I have removed zoom class from here jquery slight zoom features -->
                                                <img src="{{ asset('images/backend-img/products/large/' .$productDetails->image) }}" alt="Product">
                                                <div class="product-gallery__actions">
                                                    <button class="action-btn btn-zoom-popup"><i class="far fa-eye"></i></button>
                                                    <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="action-btn video-popup"><i class="fab fa-youtube"></i></a>
                                                </div>
                                            </figure>
                                            
                                            @foreach($productAltImages as $img)
                                                <figure class="product-gallery__image zoom">
                                                    <img src="{{ asset('images/backend-img/products/large/' .$img->image) }}" alt="Product">
                                                    <div class="product-gallery__actions">
                                                            <button class="action-btn btn-zoom-popup"><i class="far fa-eye"></i></button>
                                                            <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="action-btn video-popup"><i class="fab fa-youtube"></i></a>
                                                    </div>
                                                </figure>
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="product-gallery__nav-image">
                                    <div class="zakas-element-carousel nav-slider slick-vertical product-slide-nav" 
                                    data-slick-options='{
                                        "spaceBetween": "30px",
                                        "slidesToShow": 3,
                                        "slidesToScroll": 1,
                                        "vertical": true,
                                        "swipe": true,
                                        "verticalSwiping": true,
                                        "infinite": true,
                                        "focusOnSelect": true,
                                        "asNavFor": ".main-slider",
                                        "arrows": true, 
                                        "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-up" },
                                        "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-down" }
                                    }'
                                    data-slick-responsive='[
                                        {
                                            "breakpoint":767, 
                                            "settings": {
                                                "slidesToShow": 4,
                                                "vertical": false
                                            } 
                                        },
                                        {
                                            "breakpoint":575, 
                                            "settings": {
                                                "slidesToShow": 3,
                                                "vertical": false
                                            } 
                                        },
                                        {
                                            "breakpoint":480, 
                                            "settings": {
                                                "slidesToShow": 2,
                                                "vertical": false
                                            } 
                                        }
                                    ]'>
                                        <figure class="product-gallery__nav-image--single">
                                            <img src="{{ asset('images/backend-img/products/large/' .$productDetails->image) }}" alt="Products">
                                        </figure>

                                        @foreach($productAltImages as $img)
                                            <figure class="product-gallery__nav-image--single">
                                                <img src="{{ asset('images/backend-img/products/large/' .$img->image) }}" alt="Products">
                                            </figure>
                                        @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                            <!--<span class="product-badge sale">Sale</span> -->
                        </div>
                    </div>

                
                        <!-- product details add to cart -->
                        <div class="col-xl-4 offset-xl-1 col-lg-5 product-main-details mt-md--50">
                            <form name="addtocartForm" id="addtocartForm" method="post" action="{{ url('add-cart')}}">
                                {{ csrf_field() }}
                
                                <input type="hidden" name="product_id" value="{{ $productDetails->id }}">
                                <input type="hidden" name="product_name" value="{{ $productDetails->name }}">
                                <input type="hidden" name="product_code" value="{{ $productDetails->code }}">
                                <input type="hidden" name="product_color" value="{{ $productDetails->color }}">
                                <input type="hidden" name="price" id="price" value="{{ $productDetails->price }}">
                            
                                <div class="product-summary pl-lg--30 pl-md--0">
                                    <!--
                                    <div class="product-navigation text-right mb--20">
                                        <a href="#" class="prev"><i class="fa fa-angle-double-left"></i></a>
                                        <a href="#" class="next"><i class="fa fa-angle-double-right"></i></a>
                                    </div> -->
                                    <div class="product-rating d-flex mb--20">
                                        
                                        
                                            <!--<button class="action-btn btn-zoom-popup"><i class="far fa-eye"></i></button>
                                            <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="action-btn video-popup"><i class="fab fa-youtube"></i></a>-->
                                        
                                    </div>
                                    <h3 class="product-title mb--20">{{ $productDetails->name }}</h3>
                                    
                                    <p class="product-short-description mb--20">Product Code: {{ $productDetails->code }}</p>
                                    <div class="product-price-wrapper mb--25">
                                        <!--<span class="money">$200.00</span>
                                        <span class="price-separator">-</span>
                                        <span class="money">$400.00</span>-->
                                        <p id="getPrice">${{ $productDetails->price }}</p>
                                    </div>

                                    <!-- This is default size area -->
                                    <!--<div class="variation-form mb--20">
                                        <div class="product-size-variations d-flex align-items-center mb--15">
                                            <p class="variation-label">Size:</p>   
                                            <div class="product-size-variation variation-wrapper">
                                                <div class="variation">
                                                    <a href="/" class="product-size-variation-btn selected" data-toggle="tooltip" data-placement="top" title="S">
                                                        <span class="product-size-variation-label">S</span>
                                                    </a>
                                                </div>
                                                <div class="variation">
                                                    <a href="/" class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="M">
                                                        <span class="product-size-variation-label">M</span>
                                                    </a>
                                                </div>
                                                <div class="variation">
                                                    <a href="/" class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="L">
                                                        <span class="product-size-variation-label">L</span>
                                                    </a>
                                                </div>
                                                <div class="variation">
                                                    <a href="/" class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="XL">
                                                        <span class="product-size-variation-label">XL</span>
                                                    </a>
                                                </div>
                                            </div>                                 
                                        </div>
                                        <a href="#" class="reset_variations">Clear</a>
                                    </div>-->

                                    <div class="variation-form mb--20">
                                        <div class="product-size-variations d-flex align-items-center mb--15">
                                            <p class="variation-label">Size:</p>
                                            <div class="product-size-variation variation-wrapper">
                                                <div class="variation">
                                                    <select id="selSize" name="size" style="padding:10px;border-color:#eeeeee;">
                                                        <option value="">Select</option>
                                                        @foreach($productDetails->attributes as $size)
                                                            <option value="{{$productDetails->id}}-{{$size->size}}">{{$size->size}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-action d-flex flex-sm-row align-items-sm-center flex-column align-items-start mb--30">
                                        <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                            <label class="quantity-label" for="qty">Quantity:</label>
                                            <div class="quantity">
                                                <input type="number" class="quantity-input" name="quantity" id="qty" value="1" min="1">
                                            </div>
                                        </div>
                                        @if($total_stock>0)
                                            <button id="cartButton" type="submit" class="btn btn-small btn-bg-red btn-color-white btn-hover-2">
                                                Add To Cart
                                            </button>
                                        @endif
                                    </div>  
                                    <div class="product-footer-meta">
                                        <!--<p><span>Category:</span> 
                                            <a href="shop.html">Full Sweater</a>,
                                            <a href="shop.html">SweatShirt</a>,
                                            <a href="shop.html">Jacket</a>,
                                            <a href="shop.html">Blazer</a>
                                        </p>-->
                                    
                                        <p><span>Availability:</span><span id="Availability">   @if($total_stock>0) In Stock @else Out of Stock @endif</span></p>
                                        <p>Delivery: </p>
                                        <input type="text" name="pincode" id="chkPincode" placeholder="Check Pincode">
                                        <button type="button" onclick="return checkPincode();">Go</button><br/>
                                        <span id="pincodeResponse"></span>
                                        <br/><br/>
                                        <div class="sharethis-inline-share-buttons"></div>
                                    </div> 
                                </div>

                            </form>

                        </div>

                </div>

                <!--product review and extra information -->
                <div class="row justify-content-center mb--80">
                    <div class="col-12">
                        <div class="product-data-tab tab-style-3">
                            <div class="nav nav-tabs product-data-tab__head mb--35 mb-sm--25" id="product-tab" role="tablist">
                                <a class="product-data-tab__link nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-selected="true"> 
                                    <span>Description</span>
                                </a>
                                <a class="product-data-tab__link nav-link" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-selected="true">
                                    <span>Additional Information</span>
                                </a>
                                <a class="product-data-tab__link nav-link" id="nav-reviews-tab" data-toggle="tab" href="#material-care" role="tab" aria-selected="true">
                                    <span>Material and Care</span>
                                </a>
                                <a class="product-data-tab__link nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="true">
                                    <span>Reviews(1)</span>
                                </a>
                                
                            </div>

                            <div class="tab-content product-data-tab__content" id="product-tabContent">
                                <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                                    <div class="product-description">
                                        <p>{{ $productDetails->description }}</p>
                                        <h5 class="product-description__heading">Characteristics :</h5>
                                        <ul>
                                            <li>-<span>Rsit amet, consectetur adipisicing elit, sed do eiusmod tempor inc.</span></li>
                                            <li>-</i><span>sunt in culpa qui officia deserunt mollit anim id est laborum. </span></li>
                                            <li>-<span>Lorem ipsum dolor sit amet, consec do eiusmod tincididu. </span></li>
                                        </ul>
                                        
                                    </div>
                                </div>

                                <div class="tab-pane fade show active" id="material-care" role="tabpanel" aria-labelledby="material-care">
                                    <div class="product-description">
                                           <p> It’s also a question of quantity versus quality. When purchasing kids’ clothes, you usually want to go for quantity, since the items are only going to fit for a few seasons. However, when purchasing professional clothes for yourself or a pair of jeans to wear daily, it’s better to invest in one quality item than five poorly made pieces that may need to be replaced in a few months.</p>

                                    </div>
                                </div>

                                <div class="tab-pane" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                                    <div class="table-content table-responsive">
                                        <table class="table shop_attributes">
                                            <tbody>
                                                <tr>
                                                    <th>Weight</th>
                                                    <td>57 kg</td>
                                                </tr>
                                                <tr>
                                                    <th>Dimensions</th>
                                                    <td>160 × 152 × 110 cm</td>
                                                </tr>
                                                <tr>
                                                    <th>Color</th>
                                                    <td>
                                                        <a href="shop.html">Black</a>,
                                                        <a href="shop.html">Gray</a>,
                                                        <a href="shop.html">Red</a>,
                                                        <a href="shop.html">Violet</a>,
                                                        <a href="shop.html">Yellow</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                                    <div class="product-reviews">
                                        <h3 class="review__title">1 review for Black Blazer</h3>
                                        <ul class="review__list">
                                            <li class="review__item">
                                                <div class="review__container">
                                                    
                                                    <div class="review__text">
                                                        <div class="d-flex flex-sm-row flex-column justify-content-between">
                                                            <div class="review__meta">
                                                                <strong class="review__author">John Snow </strong>
                                                                <span class="review__dash">-</span>
                                                                <span class="review__published-date">November 20, 2018</span>
                                                            </div>
                                                            <div class="product-rating">
                                                                <div class="star-rating star-five">
                                                                    <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="review__description">Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="review-form-wrapper">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <span class="reply-title">Add a review</span>
                                                    <form action="#" class="form pr--30">
                                                        <div class="form-notes mb--20">
                                                            <p>Your email address will not be published. Required fields are marked <span class="required">*</span></p>
                                                        </div>
                                                        <div class="form__group mb--10 pb--1">
                                                            <label class="form__label d-block" >Your Ratings</label>
                                                            <div class="rating">
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="form__group mb--10">
                                                            <label class="form__label d-block" for="email">Your Review<span class="required">*</span></label>
                                                            <textarea name="review" id="review" class="form__input form__input--textarea"></textarea>
                                                        </div>
                                                        <div class="form__group mb--20">
                                                            <label class="form__label d-block" for="name">Name<span class="required">*</span></label>
                                                            <input type="text" name="name" id="name" class="form__input">
                                                        </div>
                                                        <div class="form__group mb--20">
                                                            <label class="form__label d-block" for="email">Email<span class="required">*</span></label>
                                                            <input type="email" name="email" id="email" class="form__input">
                                                        </div>
                                                        <div class="form__group">
                                                            <div class="form-row">
                                                                <div class="col-12">
                                                                    <input type="submit" value="Submit Now" class="btn-submit">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recomemnded product section -->
                <div class="row" style="padding-bottom:20px;">
                    <div class="col-md-12">
                        <h3>You may also like</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="zakas-element-carousel nav-vertical-center" data-slick-options='{
                            "spaceBetween": 30,
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-double-left" },
                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-double-right" }
                        }'
                        data-slick-responsive= '[
                            {"breakpoint":1199, "settings": {
                                "slidesToShow": 3
                            }},
                            {"breakpoint":991, "settings": {
                                "slidesToShow": 2
                            }},
                            {"breakpoint":575, "settings": {
                                "slidesToShow": 1
                            }}
                        ]'>
                            @foreach($relatedProducts as $related)
                            <div class="item">
                                <div class="zakas-product">
                                    <div class="product-inner">
                                        <figure class="product-image">
                                            <a href="{{ url('/product/'.$related->id)}}">
                                                <img src="{{ asset('images/backend-img/products/medium/' .$related->image) }}" alt="Products">
                                            </a>
                                            <div class="zakas-product-action">
                                                <div class="product-action d-flex">
                                                    <a href="wishlist.html" class="action-btn">
                                                        <i class="far fa-heart"></i>
                                                    </a>
                                                    <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                        <i class="far fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <span class="product-badge">Recomended</span>
                                        </figure>
                                        <div class="product-info">
                                            <h3 class="product-title mb--15">
                                                <a href="product-details.html">{{$related->name}}</a>
                                            </h3>
                                            <div class="product-price-wrapper mb--30">
                                                <!--<span class="money">$80</span>
                                                <span class="money-separator">-</span>
                                                <span class="money">$200</span>-->
                                                <p>$ {{ $related->price }}</p>
                                            </div>
                                            <a href="{{url('/product/{id}')}}" class="btn btn-small btn-bg-sand btn-color-dark">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper End -->

@endsection