

@extends('layouts.farmer.apppanding')

 @section('details')

        <!-- START: Template CSS-->
        <link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-ui/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/simple-line-icons/css/simple-line-icons.css"> 
        <!-- END Template CSS--> 

        <!-- START: Page CSS-->
               
<link rel="stylesheet"  href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/chartjs/Chart.min.css">        
<link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/morris/morris.css">
<link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/weather-icons/css/pe-icon-set-weather.min.css">
<link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/chartjs/Chart.min.css">
<link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/starrr/starrr.css">
<link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/fontawesome/css/all.min.css">
<link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css">     
        <!-- END: Page CSS-->

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="http://laravel.designstream.co.in/pick/ltr/dist/css/main.css">

<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
    <!-- START: Breadcrumbs-->
    <div class="row">
        <div class="col-12  align-self-center">
            <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                <div class="w-sm-100 mr-auto"><h4 class="mb-0">Farmer Specialist Account Create Successfully.</h4> <p>Welcome to  Farmer Specialist panel</p></div>

                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- END: Breadcrumbs-->

    <div class="w-sm-100 mr-auto"><h4 class="mb-0">Panding for andin checked you account please wait !! and try again .</h4> <p>Welcome to  Farmer Specialist panel</p></div>
                            <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"class="dropdown-item px-2 text-danger align-self-center d-flex">
                                <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </a>

              
</div>
</main>
<!-- END: Content-->


        <!-- START: Page JS-->
               
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/raphael/raphael.min.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/morris/morris.min.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/chartjs/Chart.min.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/starrr/starrr.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.canvaswrapper.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.colorhelpers.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.flot.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.flot.saturated.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.flot.browser.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.flot.drawSeries.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.flot.uiConstants.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.flot.legend.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-flot/jquery.flot.pie.js"></script>        
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/chartjs/Chart.min.js"></script>  
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-jvectormap/jquery-jvectormap-de-merc.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/jquery-jvectormap/jquery-jvectormap-us-aea.js"></script>
<script src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/apexcharts/apexcharts.min.js"></script>
<script  src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/lineprogressbar/jquery.lineProgressbar.js"></script>
<script  src="http://laravel.designstream.co.in/pick/ltr/dist/vendors/lineprogressbar/jquery.barfiller.js"></script>

<script src="http://laravel.designstream.co.in/pick/ltr/dist/js/home.script.js"></script> 
@endsection
