
<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    
<!-- Mirrored from laravel.designstream.co.in/pick/ltr/page-blank by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Mar 2021 12:33:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="UTF-8">
        <title>Framer Specialist </title>
        <meta name="csrf" value="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset('admin/')}}/dist/images/favicon.ico" />
        <meta name="viewport" content="width=device-width,initial-scale=1"> 

        <link rel="stylesheet" href="{{asset('admin/')}}/dist/vendors/bootstrap/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('admin/')}}/dist/vendors/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="{{asset('admin/')}}/dist/vendors/jquery-ui/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="{{asset('admin/')}}/dist/vendors/simple-line-icons/css/simple-line-icons.css"> 
     
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
        
        <link rel="stylesheet" href="{{asset('admin/')}}/dist/css/main.css">
        <link rel="stylesheet" href="{{asset('admin/')}}/dist/vendors/datatable/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="{{asset('admin/')}}/dist/vendors/datatable/buttons/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="{{asset('admin/')}}/dist/vendors/summernote/summernote-bs4.css">
        {{-- new css --}}
    </head>
    <!-- END Head-->
    <body class="">
        <!-- START: Pre Loader-->
       
        <!-- END: Pre Loader-->
        <!-- START: Header-->
<div id="header-fix" class="header fixed-top">
    <div class="site-width">
        <nav class="navbar navbar-expand-lg  p-0">
            <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">  
                <a href="http://laravel.designstream.co.in/pick/ltr" class="horizontal-logo text-left">
                    <svg height="20pt" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512" width="20pt" xmlns="http://www.w3.org/2000/svg">
                        <g transform="matrix(.1 0 0 -.1 0 512)" fill="#1e3d73">
                            <path d="m1450 4481-1105-638v-1283-1283l1106-638c1033-597 1139-654 1139-619 0 4-385 674-855 1489-470 814-855 1484-855 1488 0 8 1303 763 1418 822 175 89 413 166 585 190 114 16 299 13 408-5 100-17 231-60 314-102 310-156 569-509 651-887 23-105 23-331 0-432-53-240-177-460-366-651-174-175-277-247-738-512-177-102-322-189-322-193s104-188 231-407l231-400 46 28c26 15 360 207 742 428l695 402v1282 1282l-1105 639c-608 351-1107 638-1110 638s-502-287-1110-638z"/><path d="m2833 3300c-82-12-190-48-282-95-73-36-637-358-648-369-3-3 580-1022 592-1034 5-5 596 338 673 391 100 69 220 197 260 280 82 167 76 324-19 507-95 184-233 291-411 320-70 11-89 11-165 0z"/>
                        </g>
                    </svg> <span class="h4 font-weight-bold align-self-center mb-0 ml-auto">PICK</span>              
                </a>                   
            </div>
            <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar">
                <a href="#" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>
            </div>

            <form class="float-left d-none d-lg-block search-form">
                <div class="form-group mb-0 position-relative">
                    <input type="text" class="form-control border-0 rounded bg-search pl-5" placeholder="Search anything...">
                        <div class="btn-search position-absolute top-0">
                            <a href="#"><i class="h6 icon-magnifier"></i></a>
                        </div>
                        <a href="#" class="position-absolute close-button mobilesearch d-lg-none" data-toggle="dropdown" aria-expanded="false"><i class="icon-close h5"></i>                               
                        </a>

                </div>
            </form>
            <div class="navbar-right ml-auto h-100">
                <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
                    <li class="d-inline-block align-self-center  d-block d-lg-none">
                        <a href="#" class="nav-link mobilesearch" data-toggle="dropdown" aria-expanded="false"><i class="icon-magnifier h4"></i>                               
                        </a>
                    </li>                        

                    <li class="dropdown align-self-center">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i class="icon-reload h4"></i>
                            <span class="badge badge-default"> <span class="ring">
                                </span><span class="ring-point">
                                </span> </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right border  py-0">
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <p class="mb-0">john</p>
                                                <span class="text-success">New user registered.</span>
                                            </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <p class="mb-0">Peter</p>
                                                <span class="text-success">Server #12 overloaded.</span>
                                            </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author3.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <p class="mb-0">Bill</p>
                                                <span class="text-danger">Application error.</span>
                                            </div>
                                    </div>
                                </a>
                            </li>

                            <li><a class="dropdown-item text-center py-2" href="#"> See All Tasks <i class="icon-arrow-right pl-2 small"></i></a></li>
                        </ul>

                    </li>
                    <li class="dropdown align-self-center d-inline-block">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i class="icon-bell h4"></i>
                            <span class="badge badge-default"> <span class="ring">
                                </span><span class="ring-point">
                                </span> </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right border   py-0">
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle w-50">
                                            <div class="media-body">
                                                <p class="mb-0 text-success">john send a message</p>
                                                12 min ago
                                            </div>
                                    </div>
                                </a>
                            </li>
                            <li >
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <p class="mb-0 text-danger">Peter send a message</p>
                                                15 min ago
                                            </div>
                                    </div>
                                </a>
                            </li>
                            <li >
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author3.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                            <div class="media-body">
                                                <p class="mb-0 text-warning">Bill send a message</p>
                                                5 min ago
                                            </div>
                                    </div>
                                </a>
                            </li>

                            <li><a class="dropdown-item text-center py-2" href="#"> Read All Message <i class="icon-arrow-right pl-2 small"></i></a></li>
                        </ul>
                    </li>


                    
                    <li class="dropdown user-profile align-self-center d-inline-block">
                        <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false"> 
                            <div class="media">                                   
                                <img src="dist/images/author.jpg" alt="" class="d-flex img-fluid rounded-circle" width="29">
                            </div>
                        </a>

                        <div class="dropdown-menu border dropdown-menu-right p-0">
                            <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                            <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-support mr-2 h6  mb-0"></span> Help Center</a>
                            <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-globe mr-2 h6 mb-0"></span> Forum</a>
                            <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-settings mr-2 h6 mb-0"></span> Account Settings</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"class="dropdown-item px-2 text-danger align-self-center d-flex">
                                <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </a>
                                   
                        </div>

                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- END: Header-->

<!-- START: Main Menu-->
<div class="sidebar">
    <div class="site-width">

        <!-- START: Menu-->
        <ul id="side-menu" class="sidebar-menu">
        
     

            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"class="dropdown-item px-2 text-danger align-self-center d-flex">
                <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </a>
            
            
        </ul>
        <!-- END: Menu-->
        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
            <li class="breadcrumb-item"><a href="#">Application</a></li>
            <li class="breadcrumb-item active">Calendar</li>
        </ol>
    </div>
</div>
<!-- END: Main Menu-->

@yield('content')
@yield('details')
      
<!-- START: Main Content-->

<!-- END: Content-->

<!-- START: Footer-->
<footer class="site-footer">
      
    Copyright © 2021 Shomick Hassan iTs- All Rights Reserved. 
</footer>
<!-- END: Footer-->
        <!-- START: Back to top-->
        <a href="#" class="scrollup text-center"> 
            <i class="icon-arrow-up"></i>
        </a>
        <script src="{{asset('admin/')}}/dist/vendors/jquery/jquery-3.3.1.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/moment/moment.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>    
        <script src="{{asset('admin/')}}/dist/vendors/slimscroll/jquery.slimscroll.min.js"></script>
        <!-- END: Template JS-->
        <!-- START: APP JS-->
        <script src="{{asset('admin/')}}/dist/js/app.js"></script>
        <!-- END: APP JS-->
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <!-- START: Page JS-->
                <!-- END: Page JS-->

        <!-- datatable js -->
         <script src="{{asset('admin/')}}/dist/vendors/datatable/js/jquery.dataTables.min.js"></script> 
        <script src="{{asset('admin/')}}/dist/vendors/datatable/js/dataTables.bootstrap4.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/jszip/jszip.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/pdfmake/pdfmake.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/pdfmake/vfs_fonts.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/buttons/js/buttons.colVis.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/buttons/js/buttons.flash.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/buttons/js/buttons.html5.min.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/datatable/buttons/js/buttons.print.min.js"></script>              
        <script src="{{asset('admin/')}}/dist/js/datatable.script.js"></script>
        <script src="{{asset('admin/')}}/dist/vendors/summernote/summernote-bs4.js"></script>
        <script src="{{asset('admin/')}}/dist/js/summernote.script.js"></script>
        <!-- START: Template JS-->
        
        <!-- new JS-->

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

<!-- Mirrored from laravel.designstream.co.in/pick/ltr/page-blank by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Mar 2021 12:33:45 GMT -->
</html>