<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @if(!empty($meta_title))
        {{ $meta_title }}
        @else
        Burgeon.com: Online Marketplace for fashion and beauty
        @endif
    </title>
    @if(!empty($meta_description))
        <meta name="description" content="{{ $meta_description }}">
    @else 
        <meta name="description" content="Burgeon.com: Online Marketplace for fashion and beauty">
    @endif
    @if(!empty($meta_keywords))
        <meta name="keywords" content="{{ $meta_keywords }}">
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="assets/img/icon.png">


    <!-- ************************* CSS Files ************************* -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('css/frontend-css/vendor.css') }}">

    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/frontend-css/main.css') }}">

    <!-- CUSTOM CSS -->
	<link rel="stylesheet" href="{{ asset('css/frontend-css/form.css') }}">

    <!-- Password Strength css-->
    <link rel="stylesheet" href="{{ asset('css/frontend-css/passtrength.css') }}">

    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5cd428c73f59c700126badeb&product='inline-share-buttons' async='async'></script>

</head>

<body>

    <!-- Preloader Start -->
    <div class="zakas-preloader active">
        <div class="zakas-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="zakas-child zakas-bounce1"></div>
            <div class="zakas-child zakas-bounce2"></div>
            <div class="zakas-child zuka-bounce3"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Main Wrapper Start -->
    <div class="wrapper">

        <!-- Header Start -->
        @include('includes.frontendinclude.frontend_header')
        <!-- Header End -->
        
        <!-- Main Content Wrapper Start : This is index page content -->
        @yield('content')
        <!-- Main Content Wrapper End -->

        <!-- Footer Start-->
        @include('includes.frontendinclude.frontend_footer')
        <!-- Footer End-->

        <!-- Searchform Popup Start
        <div class="searchform__popup" id="searchForm">
            <a href="#" class="btn-close"><i class="flaticon flaticon-cross"></i></a>
            <div class="searchform__body">
                <p>Start typing and press Enter to search</p>
                <form class="searchform">
                    <input type="text" name="popup-search" id="popup-search" class="searchform__input" placeholder="Search Entire Store...">
                    <button type="submit" class="searchform__submit"><i class="flaticon flaticon-magnifying-glass-icon"></i></button>
                </form>
            </div>
        </div>
        Searchform Popup End -->

        
        <!-- Global Overlay Start 
        <div class="zakas-global-overlay"></div>
        <!-- Global Overlay End -->

        <!-- Qicuk View Modal Start -->
        <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="flaticon flaticon-cross"></i></span>
                </button>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="zakas-element-carousel nav-vertical-center"
                        data-slick-options='{
                            "slidesToShow": 1,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-double-left" },
                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-double-right" }
                        }'
                        >
                            <div class="product-image">
                                <div class="product-image--holder">
                                    <a href="product-details.html">
                                        <img src="assets/img/products/prod-9-1.jpg" alt="Product Image" class="primary-image">
                                    </a>
                                </div>
                                <span class="product-badge sale">sale</span>
                            </div>
                            <div class="product-image">
                                <div class="product-image--holder">
                                    <a href="product-details.html">
                                        <img src="assets/img/products/prod-9-1.jpg" alt="Product Image" class="primary-image">
                                    </a>
                                </div>
                                <span class="product-badge sale">sale</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="modal-box product-summary">
                            <div class="product-navigation text-right mb--20">
                                <a href="#" class="prev"><i class="fa fa-angle-double-left"></i></a>
                                <a href="#" class="next"><i class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="product-rating d-flex mb--20">
                                <div class="star-rating star-three">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                                </div>
                            </div>
                            <h3 class="product-title mb--20">Black Blazer</h3>
                            <p class="product-short-description mb--25">Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                            <div class="product-price-wrapper mb--25">
                                <span class="money">$200.00</span>
                                <span class="price-separator">-</span>
                                <span class="money">$400.00</span>
                            </div>
                            <form action="#" class="variation-form mb--30">
                                <div class="product-color-variations d-flex align-items-center mb--20">
                                    <p class="variation-label">Color:</p>
                                    <div class="product-color-variation variation-wrapper">
                                        <div class="variation">
                                            <a class="product-color-variation-btn red selected" data-toggle="tooltip" data-placement="top" title="Red">
                                                <span class="product-color-variation-label">Red</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-color-variation-btn black" data-toggle="tooltip" data-placement="top" title="Black">
                                                <span class="product-color-variation-label">Black</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-color-variation-btn pink" data-toggle="tooltip" data-placement="top" title="Pink">
                                                <span class="product-color-variation-label">Pink</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-color-variation-btn blue" data-toggle="tooltip" data-placement="top" title="Blue">
                                                <span class="product-color-variation-label">Blue</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-size-variations d-flex align-items-center mb--15">
                                    <p class="variation-label">Size:</p>   
                                    <div class="product-size-variation variation-wrapper">
                                        <div class="variation">
                                            <a class="product-size-variation-btn selected" data-toggle="tooltip" data-placement="top" title="S">
                                                <span class="product-size-variation-label">S</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="M">
                                                <span class="product-size-variation-label">M</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="L">
                                                <span class="product-size-variation-label">L</span>
                                            </a>
                                        </div>
                                        <div class="variation">
                                            <a class="product-size-variation-btn" data-toggle="tooltip" data-placement="top" title="XL">
                                                <span class="product-size-variation-label">XL</span>
                                            </a>
                                        </div>
                                    </div>                                 
                                </div>
                                <a href="#" class="reset_variations">Clear</a>
                            </form>
                            <div class="product-action d-flex flex-sm-row flex-column align-items-sm-center align-items-start mb--30">
                                <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                    <label class="quantity-label" for="quick-qty">Quantity:</label>
                                    <div class="quantity">
                                        <input type="number" class="quantity-input" name="qty" id="quick-qty" value="1" min="1">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-small btn-bg-red btn-color-white btn-hover-2" onclick="window.location.href='cart.html'">
                                    Add To Cart
                                </button>
                            </div>  
                            <div class="product-footer-meta">
                                <p><span>Category:</span>
                                    <a href="shop.html">Full Sweater</a>,
                                    <a href="shop.html">SweatShirt</a>,
                                    <a href="shop.html">Jacket</a>,
                                    <a href="shop.html">Blazer</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Qicuk View Modal End -->

    </div>
    <!-- Main Wrapper End -->
 
   
    
    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="{{ asset('js/frontend-js/vendor.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('js/frontend-js/main.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>

    <!-- Datatables js -->
	<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <!-- Password strength js -->
    <script src="{{ asset('js/frontend-js/passtrength.js') }}"></script>

    <!-- Go to www.addthis.com/dashboard to customize your tools --> 
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cd38b96a0e9a154"></script>

    <script type="text/javascript">
        //alert('hello brodas');
        $(document).ready(function(){

        
            //choosiing price and stock according to product sizes
            $("#selSize").change(function(){
                //alert('hello brodas');
                var idSize = $(this).val();
                if(idSize == ""){
                    return false;
                }
                //alert(idSize);
                $.ajax({
                    type:'get',
                    url:'/get-product-price',
                    data:{idSize:idSize},
                    success:function(resp){
                        //alert(resp); return false;
                        var arr= resp.split('#');
                        $("#getPrice").html(arr[0]);
                        $("#price").val(arr[0]);
                        if(arr[1] == 0){
                            $("#cartButton").hide();
                            $("#Availability").text("Out Of Stock");
                        }else{
                            $("#cartButton").show();
                            $("#Availability").text("In Stock");
                        }
                    },error:function(){
                        alert("Error");
                    }
                });
            });
            

            //form  validation 
			$.validator.addMethod("alphabetsnspace", function(value, element) {
				return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
			},
			"Your name must consist of alphabets only"
            );
            

            //validate register form
            $("#registerForm").validate({
                rules:{
                    name:{
                        required: true,
                        minlength:5,
                        alphabetsnspace: true
                    },
                    password:{
                        required:true,
                        minlength:6
                    },
                    email:{
                        required:true,
                        email:true,
                        remote:"/check-email"
                    }
                },
                messages:{
                    name: {
                        required: "Please enter your name",
                        minlength: "Your name must be atleast 5 characters long"
                    },
                    password:{
                        required:"Please provide your Password",
                        minlength:"Your Password must be atleast 6 characters long"
                    },
                    email:{
                        required:"Please enter your email",
                        email:"Please enter valid email address",
                        remote:"Email already exists"
                    }
                }
            });

            //validate Login Form
            $("#LoginForm").validate({
                rules:{
                    password:{
                        required:true
                    },
                    email:{
                        required:true,
                        email:true
                    }
                },
                messages:{
                    password:{
                        required:"Please provide your Password"
                    },
                    email:{
                        required:"Please enter your email",
                        email:"Please enter valid email address"
                    }
                }
            });

            //validate account form
            $("#accountForm").validate({
                rules:{
                    name:{
                        required: true,
                        minlength:5,
                        alphabetsnspace: true
                    },
                    address:{
                        required: true,
                        minlength:6
                    },
                    city:{
                        required: true,
                        minlength:5
                    },
                    state:{
                        required: true,
                        minlength:5
                    },
                    country:{
                        required: true,
                        minlength:3
                    },
                    pincode:{
                        required: true,
                        minlength:5
                    },
                    mobile:{
                        required: true,
                        number: true,
                        maxlength: 10
                    }
                },
                messages:{
                    name: {
                        required: "Please enter your name",
                        minlength: "Your name must be atleast 5 characters long"
                    },
                    address: {
                        required: "Please enter your address",
                        minlength: "Your name must be atleast 6 characters long"
                    },
                    city:{
                        required: "Please enter your city",
                        minlength: "Your city name must be atleast 5 characters long"
                    },
                    state:{
                        required: "Please enter your state",
                        minlength: "Your country name must be atleast 5 characters long"
                    },
                    country:{
                        required: "Please enter your country",
                        minlength: "Your city name must be atleast 5 characters long"
                    },
                    pincode:{
                        required: "Please enter your pincode",
                        minlength: "Your pincode must be atleast 5 characters long"
                    },
                    mobile:{
                        required: "Please enter your mobileno",
                        number: "Mobile number must be numbers only",
                        maxlength: "Mobile number must be 10 digits long"
                    }
                    
                }
            });


            //validate update password form
            $("#passwordForm").validate({
                rules:{
                    current_pwd:{
                        required: true,
                        minlength:6,
                        maxlength:20
                    },
                    new_pwd:{
                        required:true,
                        minlength:6,
                        maxlength:20
                    },
                    confirm_pwd:{
                        required: true,
                        minlength: 6,
                        maxlength:20,
                        equalTo:"#new_pwd"
                    }
                }
            });   

            //Check current user password
            $('#current_pwd').keyup(function(){

                var current_pwd = $(this).val();
                //alert(current_pwd);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type:'post',
                    url: '/check-user-pwd',
                    data:{current_pwd: current_pwd},
                    success:function(resp){
                        //alert(resp);
                        if(resp == 'false'){
                                $('#chkPwd').html("<font color='red'>Current Password is incorrect</font>");
                        }else if(resp == 'true'){
                                $('#chkPwd').html("<font color='green'>Current Password is correct</font>");
                        }
                    },
                    error:function(){
                        //alert('error');
                    }
                });
            });


            //Password strength script
            $('#myPassword').passtrength({
                minChars: 6,
                passwordToggle: true,
                tooltip: true,
                eyeImg : "/images/frontend-img/eye.svg" // toggle icon
            });

            //Copy billing address to Shipping address Script
            $("#billtoship").on('click', function(){
                if(this.checked){
                    //alert('test');
                    $("#shipping_name").val($("#billing_name").val());
                    $("#shipping_address").val($("#billing_address").val());
                    $("#shipping_city").val($("#billing_city").val());
                    $("#shipping_state").val($("#billing_state").val());
                    $("#shipping_pincode").val($("#billing_pincode").val());
                    $("#shipping_mobile").val($("#billing_mobile").val());
                    $("#shipping_country").val($("#billing_country").val());
                }
                else{
                    $("#shipping_name").val('');
                    $("#shipping_address").val('');
                    $("#shipping_city").val('');
                    $("#shipping_state").val('');
                    $("#shipping_pincode").val('');
                    $("#shipping_mobile").val('');
                    $("#shipping_country").val('');
                }
            });

        });


        $(document).ready(function(){
            $('#table').DataTable();
        });

        function selectPaymentMethod(){
            if($("#Paypal").is(':checked') || $("#COD").is(':checked')){
                //alert('checked');
            }else{
                alert('Please select any one Payment Option');
                return false;
            }
        }

        function checkPincode(){
            var pincode = $("#chkPincode").val();
            if(pincode == ""){
                alert('Please enter pincode');
            }
            $.ajax({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'post',
                data:{pincode:pincode},
                url:'/check-pincode',
                success:function(resp){
                    //alert(resp);
                    if(resp == "This pincode is available for delivery"){
                        $('#pincodeResponse').html("<font color='green'>" +resp+ "</font");
                    }else{
                        $('#pincodeResponse').html("<font color='red'>" +resp+ "</font");

                    }
                    
                },
                error:function(){
                    alert('error');
                }
            });
            
        }

    </script>

</body>

</html>