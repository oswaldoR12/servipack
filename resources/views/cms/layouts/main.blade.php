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
    <link href="{{ asset('css/cms/plugins/datatables/media/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
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
    <link href="{{ asset('css/cms/colors/green-dark.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cms/colors/default-dark.css') }}" rel="stylesheet">
    

    <script src="{{ asset('js/cms/angular.min.js') }}"></script>


    
    <!-- Sweet Alert -->
    <script src="{{ asset('js/sweetalert2.1.2/sweetalert.min.js') }}"></script>


</head>
<body ng-controller="@yield('ngController')" class="fix-header fix-sidebar card-no-border">
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
   
    <!-- Angular File -->
    @yield('ngFile')


    @yield('scripts')

</body>
</html>
