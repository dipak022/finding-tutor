@php  
  $category=DB::table('category')->get();
@endphp
@php
	$settings=DB::table('settings')->where('id',1)->first();
@endphp
<!DOCTYPE html>
<html>
  
<!-- Mirrored from designarc.biz/demos/landscaping/Demo_4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Dec 2021 17:09:29 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Aggriculturel Problem</title>
    <!-- mobile responsive meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- main stylesheet-->
    <link rel="stylesheet" href="{{ asset('users/')}}/css/style.css">
    <link rel="stylesheet" href="plugins/Stroke-Gap-Icons-Webfont/style.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- Header Topbar Start-->
    <div class="hdr_top_variation4">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a href="index.html" class="logo fl"><img src="{{ asset($settings->logo)}}" alt="image" style="height:50px;width:150px;"></a></div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <ul>
              <li class="hdr4_msg_icon">
                <h6>Mail us :</h6>
                <p>{{$settings->email}}</p>
              </li>
              <li class="hdr4_call_icon">
                <h6>Call Us Now :</h6>
                <p class="p_20">{{$settings->phone}}</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Header Topbar End-->
    <!-- Navbar Start-->
    <nav id="main-navigation-wrapper" class="variation2_navbar variation4_navbar navbar navbar-default finance-navbar">
      <div class="thm-container">
        <div class="navbar-header">
          <div class="logo-menu"><img src="images/common_in_all/logo.png" alt=""></div>
          <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div id="main-navigation" class="collapse navbar-collapse nav_variation4">
          <div class="nav_variation4_in">
            <ul class="nav navbar-nav">
              <li class="dropdown"><a href="{{ url('/') }}">Home</a></li>
              
              <li class="dropdown"><a href="" class="nav_drop_ar">Services</a>
                <ul class="dropdown-submenu">
                @foreach($category as $cat)
                  <li><a href="{{ url('service/'.$cat->id) }}">{{$cat->categoty_name}}</a></li>
                @endforeach  
                </ul>
              </li>
              <li class="dropdown"><a href="{{route('gallery')}}" class="">Gallery</a></li>
              <li><a href="{{route('contact')}}">Contact</a></li>
			        <li class="dropdown"><a  class="">Account</a>
              @guest
                <ul class="dropdown-submenu">
                  <li><a href="{{ route('register') }}">Registation</a></li>
                  <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
                @else
                <ul class="dropdown-submenu">
                  <li><a href="{{ route('profile') }}">Profile</a></li>
                  <li><a href="{{ route('user.logout') }}">Log Out</a></li>
                </ul>
                @endguest
              </li>
            </ul><a href="#" class="var4_request_btn">Get a quote</a>
            <div class="responsive_btn"><a href="request_quote.html" class="view-all hvr-bounce-to-right mobile_view request_quote">Request a quote</a></div>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End-->



	@yield('content')


	
    <!-- Footer_Wrapper Start-->
    <footer class="wdt_100">
      <!-- Footer_Container Start-->
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ftr_txt_div"><img src="{{ asset($settings->logo)}}" style="height:50px;width:250px;" alt="image">
            <p>
              Fermer problem solution 
            </p>
            <ul class="ftr_social">
              <li><a href="{{$settings->twitter}}"><i aria-hidden="true" class="fa fa-tumblr"></i></a></li>
              <li><a href="{{$settings->facebook}}"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
              <li><a href="{{$settings->linkdin}}"><i aria-hidden="true" class="fa fa-linkedin"></i></a></li>
              <li><a href="{{$settings->google}}"><i aria-hidden="true" class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 ftr_nav">
            <h6>Usefull Links</h6>
            <ul>
              <li><a href="about_us.html"><i aria-hidden="true" class="fa fa-angle-right"></i>About Us</a></li>
              <li><a href="request_quote.html"><i aria-hidden="true" class="fa fa-angle-right"></i>Make an Appoint</a></li>
              <li><a href="contact.html"><i aria-hidden="true" class="fa fa-angle-right"></i>Get Free Quote</a></li>
              <li><a href="#"><i aria-hidden="true" class="fa fa-angle-right"></i>Documentation</a></li>
              <li><a href="gallery.html"><i aria-hidden="true" class="fa fa-angle-right"></i>Gallery</a></li>
              <li><a href="blogs.html"><i aria-hidden="true" class="fa fa-angle-right"></i>Blogs</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ftr_nav ftr_pad_30">
            <h6>Our Services</h6>
            <ul>
              <li><a href="planting_removal.html"><i aria-hidden="true" class="fa fa-angle-right"></i>Planting & Removal</a></li>
              <li><a href="irrigation_drainage.html"><i aria-hidden="true" class="fa fa-angle-right"></i>Irrigation & Drainage</a></li>
              <li><a href="spring_fallcleanup.html"><i aria-hidden="true" class="fa fa-angle-right"></i>Spring & Fall Cleanup</a></li>
              <li><a href="stone_hardscaping.html"><i aria-hidden="true" class="fa fa-angle-right"></i>Stone & Hardscaping</a></li>
              <li><a href="snow_ice_removal.html"><i aria-hidden="true" class="fa fa-angle-right"></i>Snow & Ice Removal</a></li>
              <li><a href="services.html"><i aria-hidden="true" class="fa fa-angle-right"></i>See all Services</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ftr_nav get_in_touch">
            <h6>Get In Touch</h6>
            <ul>
              <li class="ftr_location_icon"><span class="txt-big">Landscaping & Gardening</span> {{$settings->address}}</li>
              <li class="ftr_phn_icon ftr_call_txt">{{$settings->phone_optional}}</li>
              <li class="ftr_msg_icon">{{$settings->email_second}}</li>
              <li class="ftr_clock_icon">{{$settings->off_day}}</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Footer_Container End-->
      <!-- Copyright Start-->
      <div class="ftr_btm">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
              <p>Copyright ©  2021. All rights reserved. </p>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-4 col-xs-12 text-right">
              <p>Created by: Anika  </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End-->
    </footer>
    <!-- Footer_Wrapper End-->
    <!-- helper js-->
    <script src="{{ asset('users/')}}/js/jquery.min.js"></script>
    <script src="{{ asset('users/')}}/js/bootstrap.min.js"></script>
    <script src="{{ asset('users/')}}/js/jquery.touchSwipe.min.js"></script>
    <script src="{{ asset('users/')}}/js/theme.js"></script>
    <script src="{{ asset('users/')}}/js/responsive_bootstrap_carousel.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
            @if(Session::has('message'))
                  var type="{{Session::get('alert-type','info')}}"
      
            
                  switch(type){
                        case 'info':
                           toastr.info("{{ Session::get('message') }}");
                           break;
                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;
                  case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;
                    case 'error':
                          toastr.error("{{ Session::get('message') }}");
                          break;
                  }
            @endif
      </script>

  </body>

<!-- Mirrored from designarc.biz/demos/landscaping/Demo_4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Dec 2021 17:10:17 GMT -->
</html>