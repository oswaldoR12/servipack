@extends('cms.layouts.main-cms')

@section('page-title', 'CMS')
@section('ngApp', 'ContentManagerApp')
@section('ngController', 'mainController')

@section('content')

@include('cms.layouts.nav')


<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid" ng-controller="mainController">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center titulo-dashboard">
                <h3 class="text-themecolor">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <!--<div class="col-md-7 col-4 align-self-center">
                <div class="d-flex m-t-10 justify-content-end">
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i
                                class="ti-settings text-white"></i></button>
                    </div>
                </div>
            </div>-->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-material m-t-40" name="formDashboard">
                            <div class="container">
                                <div class="col-lg-12">
                                </div>
                                <div class="col-lg-12 titulo-dashboard">
                                    <h2>Bienvenido a ContentManager </h2>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <div class="modal fade" id="wisiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">Ingrese el contenido</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="card-body">
                                <form method="post">
                                    <div class="form-group">
                                        <textarea class="textarea_editor form-control text_editor" rows="15" placeholder="Ingrese texto..." id="text_editor"></textarea>
                                    </div>
                                </form>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button id="cerrarModal" type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" ng-click="agregarWisi()">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!--Bloque modal del sistema -->
        <div class="modal fade" id="modal_img1" name="modal_img1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-lg .modal-sm">
              <div class="modal-content">
                <div class="modal-header header_conf">
                    <button type="button" id="cerrar_mensaje2" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <p id="cabecera_mensaje" name="cabecera_mensaje"> Seleccione una imagen</p>
                </div>
                <div class="modal-body" id="cuerpo_mensaje" name="cuerpo_mensaje">
                    <!--Modal body -->
                    <div class="centrar_galeria" ng-show="galery.length ==0">Galería de imágenes noticias</div>
                    <div id="" ng-show="galery.length!=0" class="fade-in-out">
                        <div>
                            <div class="form-group">
                                <input type='text' name='filtro_noticias' id='filtro_noticias' placeholder='Ingrese el valor a filtrar' class="form-control" ng-model="searchNoticias">
                            </div>
                            <div class="col-lg-12" padding="0px;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 divbiblioteca" ng-repeat="imagen in galery|filter:searchNoticias track by $index">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <!-- modal body-->
                </div>
                <div class="modal-footer footer_conf">
                    <!-- Footter del modal -->
                      <button type="button" name="modal_reporte_salir" id="modal_reporte_salir" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <!-- Fin footter del modal -->
                </div>
                <div style="clear:both"></div>
              </div>
            </div>
        </div>
        <!-- ============================================================== -->
    </div>
</div>




@endsection


@section('ngFile')
<script src="{{ asset('js/cms/controladores/mainController.js') }}"></script>

@endsection