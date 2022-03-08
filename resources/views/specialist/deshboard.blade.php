
@extends('layouts.farmer.app')

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
                <div class="w-sm-100 mr-auto"><h4 class="mb-0">Farmer Specialist Dashboard</h4> <p>Welcome to  Farmer Specialist panel</p></div>

                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- END: Breadcrumbs-->

    <!-- START: Card Data-->
    <div class="row">
        <div class="col-12 col-sm-6 col-xl-4 mt-3">
            <div class="card">
                <div class="card-body p-0">
                    <div class='p-4 align-self-center'>
                        <h2>22,390</h2>
                        <h6 class="card-liner-subtitle">Total Visits</h6>  
                    </div>
                    <div  class="barfiller" data-color="#1e3d73">
                        <div class="tipWrap">
                            <span class="tip rounded primary">
                                <span class="tip-arrow"></span>
                            </span>
                        </div>
                        <span class="fill" data-percentage="80"></span>
                    </div>                              
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mt-3">
            <div class="card">
                <div class="card-body p-0">
                    <div class='p-4 align-self-center'>
                        <h2>54,768</h2>
                        <h6 class="card-liner-subtitle">Total Sessions</h6>  
                    </div>
                    <div  class="barfiller" data-color="#17a2b8">
                        <div class="tipWrap">
                            <span class="tip rounded info">
                                <span class="tip-arrow"></span>
                            </span>
                        </div>
                        <span class="fill" data-percentage="92"></span>
                    </div>                              
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mt-3">
            <div class="card">
                <div class="card-body p-0">
                    <div class='p-4 align-self-center'>
                        <h2>4,236</h2>
                        <h6 class="card-liner-subtitle">Page Views</h6>  
                    </div>
                    <div  class="barfiller" data-color="#1ee0ac">
                        <div class="tipWrap">
                            <span class="tip rounded success">
                                <span class="tip-arrow"></span>
                            </span>
                        </div>
                        <span class="fill" data-percentage="67"></span>
                    </div>                              
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-8  mt-3">
            <div class="card">                           
                <div class="card-content">
                    <div class="card-body">
                        <div id="apex_analytic_chart" class="height-500"></div>
                    </div>
                </div>
            </div>
        </div>     
        <div class="col-12 col-md-6 col-lg-4 mt-3">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">                               
                    <h6 class="card-title">Visitors by Browser</h6>
                </div>
                <div class="card-content">
                    <div class="card-body p-0">
                        <ul class="list-group list-unstyled">
                            <li class="p-4 border-bottom">
                                <div class="w-100">
                                    <a href="#"><img src="{{ asset('public/admin') }}/dist/images/chrome.png" alt="" class="img-fluid ml-0 mb-2  rounded-circle" width="20"></a>                                                
                                    <div class="barfiller h-7 rounded" data-color="#1ee0ac">
                                        <div class="tipWrap">
                                            <span class="tip rounded success">
                                                <span class="tip-arrow"></span>
                                            </span>
                                        </div>
                                        <span class="fill" data-percentage="78"></span>
                                    </div>                                 
                                </div> 
                            </li>
                            <li class="p-4 border-bottom">
                                <div class="w-100">
                                    <a href="#"><img src="{{ asset('public/admin') }}/dist/images/firefox.png" alt="" class="img-fluid ml-0 mb-2  rounded-circle" width="20"></a>                                                
                                    <div class="barfiller h-7" data-color="#ffc107">
                                        <div class="tipWrap">
                                            <span class="tip rounded warning">
                                                <span class="tip-arrow"></span>
                                            </span>
                                        </div>
                                        <span class="fill" data-percentage="45"></span>
                                    </div>                                 
                                </div> 
                            </li>
                            <li class="p-4 border-bottom">
                                <div class="w-100">
                                    <a href="#"><img src="{{ asset('public/admin') }}/dist/images/internet_explorer.png" alt="" class="img-fluid ml-0 mb-2  rounded-circle" width="20"></a>                                                
                                    <div class="barfiller h-7" data-color="#17a2b8">
                                        <div class="tipWrap">
                                            <span class="tip rounded info">
                                                <span class="tip-arrow"></span>
                                            </span>
                                        </div>
                                        <span class="fill" data-percentage="56"></span>
                                    </div>                                 
                                </div> 
                            </li>
                            <li class="p-4 border-bottom">
                                <div class="w-100">
                                    <a href="#"><img src="{{ asset('public/admin') }}/dist/images/opera.png" alt="" class="img-fluid ml-0 mb-2  rounded-circle" width="20"></a>                                                
                                    <div class="barfiller h-7" data-color="#f64e60">
                                        <div class="tipWrap">
                                            <span class="tip rounded danger">
                                                <span class="tip-arrow"></span>
                                            </span>
                                        </div>
                                        <span class="fill" data-percentage="23"></span>
                                    </div>                                 
                                </div> 
                            </li>

                        </ul> 
                    </div>
                </div>
            </div>
        </div>                 

        <div class="col-12 col-md-6 col-lg-4 mt-3">
            <div class="card">                      
                <div class="card-content">
                    <div class="card-body">
                        <div id="world-map-gdp" class="w-100 " style="height:180px;"></div>
                        <div class="table-responsive">
                            <table class="table table-borderless pick-table mb-0">
                                <thead>
                                    <tr>
                                        <th>States</th>                                                  
                                        <th  class="text-right">Visits</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="zoom">
                                        <td>California</td>                                                   
                                        <td class="text-right">80,200</td>
                                    </tr>
                                    <tr class="zoom">
                                        <td>Texas</td>                                                  
                                        <td class="text-right">78,410</td>
                                    </tr>
                                    <tr class="zoom">
                                        <td>Wyoming</td>                                                   
                                        <td class="text-right">162,050</td>
                                    </tr>
                                    <tr class="zoom">
                                        <td>Florida</td>                                                   
                                        <td class="text-right">187,792</td>
                                    </tr>
                                    <tr class="zoom">
                                        <td>New York</td>                                                    
                                        <td class="text-right">13,087</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    </div>
    <!-- END: Card DATA-->                 
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
