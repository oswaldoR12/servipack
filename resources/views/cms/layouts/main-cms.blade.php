<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" ng-app="@yield('ngApp')">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page-title')</title>
   
    <!-- plugins CMS Servicios Express -->
        <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/cms/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cms/plugins/html5-editor/bootstrap-wysihtml5.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cms/plugins/toast-master/css/jquery.toast.css') }}" rel="stylesheet">

        <!-- Dropzone css -->
    <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{ asset('css/cms/plugins/dropzone-master/dist/dropzone.css') }}" rel="stylesheet">
        <!--alerts CSS -->
    <link href="{{ asset('css/cms/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
        <!-- select2 CSS -->
    <link href="{{ asset('css/cms/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet">
        <!-- css CMS Servicios Express -->
    <link href="{{ asset('css/cms/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cms/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cms/index2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cms/colors/blue.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/cms/colors/green-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cms/colors/default-dark.css') }}" rel="stylesheet"> -->
    

    <script src="{{ asset('js/cms/angular.min.js') }}"></script>


    
    <!-- Sweet Alert -->
    <script src="{{ asset('js/sweetalert2.1.2/sweetalert.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body ng-controller="@yield('ngController')" class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="">
                        <!-- Logo icon --><b>
                            <!-- Light Logo icon -->
                            
                            <img src="{{ asset('img/icon/espana.png') }}" alt="homepage" class="light-logo icono-principal" /> 
                            <!--
                            <i class="fa fa-rocket texto-blanco" aria-hidden="true"></i>-->
                            
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span  class="titulo-page">
                            <!--
                            <b class="titulo-uno"> C.M.S</b>-->
                            
                            <b class="titulo-uno">Content</b>Manager 
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                       
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="index.html" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img src="{{ asset('img/inicio/user.png') }}"  alt="user"
                                    class="profile-pic" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="{{ asset('img/inicio/user.png') }}" alt="user">
                                            </div> 
                                            <div class="u-text">
                                                <p class="text-muted">{{Auth::user()->nombres}} {{Auth::user()->apellidos}}</p>
                                            </div>
                                            <div class="dropdown-user">
                                                <li role="separator" class="divider"></li>
                                                 <li><a href="{{ route('cms.logout') }}"></i> Logout</a></li>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
    <main class="py-4">
        @yield('content')
    </main>
     <!-- .Js base -->
     <script src="{{ asset('js/jquery-3.5.1/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui-1.13.1/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/bootstrap-4.6.1/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('js/dirPagination.js') }}"></script>
    <script src="{{ asset('js/ng-table.min.js') }}"></script>

    <script src="{{ asset('js/fbasic.js') }}"></script>

    

    <script src="{{ asset('js/cms/plugins/slimscroll.js') }}"></script>
    <script src="{{ asset('js/cms/plugins/waves.js') }}"></script>
    <script src="{{ asset('js/cms/plugins/sidebarmenu.js') }}"></script>
    <script src="{{ asset('js/cms/plugins/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('js/cms/plugins/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/cms/custom.min.js') }}"></script>
    <script src="{{ asset('js/cms/plugins/jquery.toast.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select-1.13.14/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/cms/plugins/bootstrap/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('js/cms/plugins/bootstrap/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('js/cms/plugins/html5-editor/bootstrap-wysihtml5.js') }}"></script>
    <script src="{{ asset('js/cms/plugins/html5-editor/wysihtml5-0.3.0.js') }}"></script>

    <!-- AngularJS -->
    <script type="text/javascript" src="{{ asset('js/cms/angular.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/cms/angular-route.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/cms/app.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/cms/angular-sanitize.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/cms/directivas/directives.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/cms/servicios/services.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/cms/controladores/mainController.js')}}"></script>
    //cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css
    <!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<!-- ============================================================== -->
    <!-- Angular File -->
    @yield('ngFile')


    @yield('scripts')

</body>
</html>
//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js