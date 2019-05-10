@extends('layouts.layoutfrontend.frontend_main')
@section('content')

    <!-- Breadcrumb area Start -->
    <div class="breadcrumb-area bg-color ptb--90" data-bg-color="#f6f6f6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                        <h1 class="page-title">Contact</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Contact</span></li>
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
                                <h3 class="heading__tertiary mb--30">Enquiry</h3>
                                <form class="form form--login" method="post" action="{{ url('/contact')}}" id="contactForm" name="contactForm">
                                    {{ csrf_field() }}
                                    <div class="form__group mb--20">
                                            <label class="form__label form__label--2" for="login_password">Name<span class="required">*</span></label>
                                             <input name="name" type="text" class="form__input form__input--2" id="name" required="">
                                        </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="username_email">Email address <span class="required">*</span></label>
                                        <input type="email" class="form__input form__input--2" id="email" name="email" required="">
                                    </div>
                                    <div class="form__group mb--20">
                                       <label class="form__label form__label--2" for="login_password">Subject<span class="required">*</span></label>
                                        <input name="subject" type="text" class="form__input form__input--2" id="subject" required="">
                                    </div>
                                    <div class="form__group mb--20">
                                            <label class="form__label form__label--2" for="login_password">Message<span class="required">*</span></label>
                                             <textarea class="form__input form__input--textarea" name="message" id="message" required=""></textarea>
                                    </div>
                                    <div class="d-flex align-items-center mb--20">
                                        <div class="form__group mr--30">
                                            <input type="submit" value="Send" class="btn-submit">
                                            
                                        </div>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 pl--50 pl-sm--30">
                                <h2 class="heading__secondary mb--50">Contact info</h2>
                                
                                <!-- Contact info widget start here -->
                                <div class="contact-info-widget mb--45">
                                    <div class="contact-info">
                                        <h3 class="heading__tertiary">Postal Address</h3>
                                        <p>PO Box 16122 Orchid Street<br> Kalanki 8007 Nepal</p>
                                    </div>
                                </div>
                                <!-- Contact info widget end here -->
    
                                <!-- Contact info widget start here -->
                                <div class="contact-info-widget mb--45">
                                    <div class="contact-info">
                                        <h3 class="heading__tertiary">Burgeon HQ</h3>
                                        <p>Postal Address <br> PO Box 16122 Orchid Street <br> Kalanki 8007 Nepal</p>
                                    </div>
                                </div>
                                <!-- Contact info widget end here -->
    
                                <!-- Contact info widget start here -->
                                <div class="contact-info-widget two-column-list sm-one-column mb--45">
                                    <div class="contact-info mb-sm--35">
                                        <h3 class="heading__tertiary">Business Phone</h3>
                                        <a href="#">+977 9840562003 </a>
                                    </div>
                                    <div class="contact-info">
                                        <h3 class="heading__tertiary">Say Hello</h3>
                                        <a href="mailto:info@la-studioweb.com">adhikari.sarbaja@gmail.com</a>
                                    </div>
                                </div>
                                <!-- Contact info widget end here -->
    
                                <!-- Social Icons Start Here -->
                                <ul class="social social-sharing">
                                    <li class="social__item">
                                        <a href="twitter.com" class="social__link twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="social__item">
                                        <a href="plus.google.com" class="social__link google-plus">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="social__item">
                                        <a href="facebook.com" class="social__link facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="social__item">
                                        <a href="instagram.com" class="social__link instagram">
                                        <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Social Icons End Here -->
                            </div>
                    </div>
                    <div class="row">
                            <div id="map" style="height: 400px;width:100%;"></div>
                            <script>
                                function initMap() {
                        
                                    //map options
                                    var options = {
                                        center: {lat: 27.7172, lng: 85.3240},
                                        zoom: 8,
                                        zoomControl: true,
                                        zoomControlOptions: {
                                            position: google.maps.ControlPosition.LEFT_BOTTOM
                                        },
                                        scaleControl: true,
                                        streetViewControl: true,
                                        streetViewControlOptions: {
                                            position: google.maps.ControlPosition.RIGHT_BOTTOM
                                        },
                                        mapTypeControl: true,
                                        mapTypeControlOptions: {
                                            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                        
                                        },
                                        fullscreenControl: false
                        
                                    }
                        
                                    //new map
                                    var map= new google.maps.Map(document.getElementById('map'), options);
                        
                                    var som= [ new google.maps.LatLng(27.7172, 85.3240), new google.maps.LatLng(29.7172, 86.3240), new google.maps.LatLng(30.7172, 87.3240), new google.maps.LatLng(31.7172, 88.3240)];
                                    var draw = new google.maps.Polygon({
                                        paths: som,
                                        strokeColor:'#FF0000',
                                        strokeOpacity:0.8,
                                        strokeWeight:3,
                                        fillColor:'#ff0000',
                                        fillOpacity:'.35'
                                    });
                        
                                    draw.setMap(map);
                        
                                    map.addListener('center_changed', function() {
                                        // 3 seconds after the center of the map has changed, pan back to the
                                        // marker.
                                        window.setTimeout(function() {
                                            map.panTo(marker.getPosition());
                                        }, 2000);
                                    });
                        
                        
                                    //add marker
                                    var marker= new google.maps.Marker({
                                        position: {lat: 27.7172, lng: 85.3240},
                                        map:map,
                                        icon: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
                                    });
                        
                                    var infowindow = new google.maps.InfoWindow({
                                        content: '<h6>E-Kantipur</h6><br/><p>The Katmandu Post - Your daily newspaper</p>'
                                    });
                        
                                    marker.addListener('click', function(){
                                        infowindow.open(map, marker);
                                    });
                                }
                            </script>
                        
                            <script async defer
                                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOrxAYLrUscDz15XCiTxtpDNRdu90H3Xg &callback=initMap"
                            ></script>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->

   


@endsection