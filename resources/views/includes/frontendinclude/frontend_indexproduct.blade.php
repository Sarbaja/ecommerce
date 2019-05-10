<section class="product-tab-area mb--50">
    <div class="container">
        <div class="row justify-content-center mb--45">
            <div class="col-xl-6 text-center">
                <h2 class="heading__secondary mb--10">New Arrival</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-tab tab-style-1">
                    <div class="tab-content" id="new-arrival-tab-content">
                        <div class="tab-pane fade show active" id="new-all" role="tabpanel" aria-labelledby="new-all-tab">
                            <div class="row">
                                @foreach($products as $product)
                                    <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                        <div class="zakas-product">
                                            <div class="product-inner">
                                                <figure class="product-image">
                                                    <a href="{{ url('/product/'.$product->id)}}">
                                                        <img src="{{ asset('images/backend-img/products/medium/'. $product->image) }}" alt="Products">
                                                    </a>
                                                    <div class="zakas-product-action">
                                                        <div class="product-action d-flex">
                                                            <a href="wishlist.html" class="action-btn">
                                                                <i class="far fa-heart"></i>
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <!--<span class="product-badge">New</span>-->
                                                </figure>
                                                <div class="product-info">
                                                    <h3 class="product-title mb--15">
                                                        <a href="product-details.html">{{ $product->name }}</a>
                                                    </h3>
                                                    <div class="product-price-wrapper mb--30">
                                                        <p>$ {{ $product->price }}</p>
                                                    </div>
                                                    <a href="{{ url('/product/'.$product->id)}}" class="btn btn-small btn-bg-sand btn-color-dark">View More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{$products->links()}}  
                            </div>
                        </div>
                        <!--<div class="tab-pane fade" id="new-men" role="tabpanel" aria-labelledby="new-all-tab">
                            <div class="row">
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-1.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">New</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-2.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-3.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">New</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-4.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">New</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-5.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-6.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">-15%</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="old-price">
                                                        <span class="money">$300</span>
                                                    </span>
                                                    <span class="money-separator">-</span>
                                                    <span class="new-price">
                                                        <span class="money">$150</span>
                                                    </span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-7.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-8.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="new-women" role="tabpanel" aria-labelledby="new-all-tab">
                            <div class="row">
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-1.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">New</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-2.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-3.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">New</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-4.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">New</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-5.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-6.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">-15%</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="old-price">
                                                        <span class="money">$300</span>
                                                    </span>
                                                    <span class="money-separator">-</span>
                                                    <span class="new-price">
                                                        <span class="money">$150</span>
                                                    </span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-7.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-8.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="new-kidz" role="tabpanel" aria-labelledby="new-all-tab">
                            <div class="row">
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-1.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">New</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-2.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-3.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">New</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-4.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">New</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-5.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-6.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">-15%</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="old-price">
                                                        <span class="money">$300</span>
                                                    </span>
                                                    <span class="money-separator">-</span>
                                                    <span class="new-price">
                                                        <span class="money">$150</span>
                                                    </span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-7.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-8.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="new-accessories" role="tabpanel" aria-labelledby="new-all-tab">
                            <div class="row">
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-1.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">New</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-2.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-3.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">New</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-4.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">New</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-5.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-6.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <span class="product-badge">-15%</span>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="old-price">
                                                        <span class="money">$300</span>
                                                    </span>
                                                    <span class="money-separator">-</span>
                                                    <span class="new-price">
                                                        <span class="money">$150</span>
                                                    </span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-7.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                                    <div class="zakas-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/prod-8.jpg" alt="Products">
                                                </a>
                                                <div class="zakas-product-action">
                                                    <div class="product-action d-flex">
                                                        <div class="product-size">
                                                            <a href="#" class="action-btn">
                                                                <span class="current">XL</span>
                                                            </a>
                                                            <div class="product-size-swatch">
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    L
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    M
                                                                </span>
                                                                <span class="product-size-swatch-btn variation-btn">
                                                                    S
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="product-color">
                                                            <a href="#" class="action-btn">
                                                                <span class="current abbey">Abbey</span>
                                                            </a>
                                                            <div class="product-color-swatch">
                                                                <span class="product-color-swatch-btn blue variation-btn">
                                                                    Blue
                                                                </span>
                                                                <span class="product-color-swatch-btn copper variation-btn">
                                                                    Copper
                                                                </span>
                                                                <span class="product-color-swatch-btn old-rose variation-btn">
                                                                    Old Rose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="wishlist.html" class="action-btn">
                                                            <i class="flaticon flaticon-like"></i>
                                                        </a>
                                                        <a data-toggle="modal" data-target="#productModal" class="action-btn quick-view">
                                                            <i class="flaticon flaticon-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info">
                                                <h3 class="product-title mb--15">
                                                    <a href="product-details.html">Long Cartigen</a>
                                                </h3>
                                                <div class="product-price-wrapper mb--30">
                                                    <span class="money">$80</span>
                                                    <span class="money-separator">-</span>
                                                    <span class="money">$200</span>
                                                </div>
                                                <a href="cart.html" class="btn btn-small btn-bg-sand btn-color-dark">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>