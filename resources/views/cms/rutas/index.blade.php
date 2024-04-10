@extends('cms.layouts.main-cms')

@section('page-title', 'CMS')
@section('ngApp', 'ContentManagerApp')
@section('ngController', 'rutasController')

@section('content')

@include('cms.layouts.nav')

<body>

</body>
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
<section id="wrapper">
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-5 col-8 align-self-center titulo-dashboard">
                    <h3 class="text-themecolor">Registro de Rutas</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Rutas</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">@{{titulo_pagina}}</h4>
                            <h6 class="card-subtitle">@{{subtitulo_pagina}}</h6>
                            <hr>
                            <form class="form-material m-t-40" name="formularioMarca" id="formularioMarca">
                                <div class="row p-20">
                                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                        <div class="form-group">
                                            <div class='asterisco_rojo'><i class='fa fa-asterisk'
                                                    aria-hidden='true'></i>
                                            </div>
                                            <label class="">País de origen:</label>
                                            <div class="controls">
                                                <select name="pais_origen" id="pais_origen"
                                                    class="form-control m-bot15 select-picker" data-done-button="true"
                                                    data-actions-box="true"
                                                    data-live-search-placeholder="Seleccione el país de origen"
                                                    placholder="Seleccione tipo de país" data-style="btn-fff "
                                                    data-live-search="true"
                                                    ng-options="option.descripcion for option in paises track by option.pais_id"
                                                    ng-model="ruta.pais_origen" data-size="1">
                                                    <option value="">--Seleccione origen--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                        <div class="form-group">
                                            <div class='asterisco_rojo'><i class='fa fa-asterisk'
                                                    aria-hidden='true'></i>
                                            </div>
                                            <label class="">País de destino:</label>
                                            <div class="controls">
                                                <select name="pais_destino" id="pais_destino"
                                                    class="form-control m-bot15 select-picker" data-done-button="true"
                                                    data-actions-box="true"
                                                    data-live-search-placeholder="Seleccione el pais de destino"
                                                    placholder="Seleccione tipo de país" data-style="btn-fff "
                                                    data-live-search="true"
                                                    ng-options="option.descripcion for option in paises track by option.pais_id"
                                                    ng-model="ruta.pais_destino" data-size="1">
                                                    <option value="">--Seleccione destino--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 padding0_min "
                                        style="padding-top: 5px; ">
                                        <div class="form-group">
                                            <!-- <div class='asterisco_rojo'><i class='fa fa-asterisk'
                                                    aria-hidden='true'></i></div> -->

                                            <div class="checkbox checkbox-primary p-t-0">
                                                <input id="checkbox-signup" name="ruta-inversa"
                                                    ng-model="ruta.ruta_inversa" type="checkbox"
                                                    ng-checked="ruta.ruta_inversa == '1'">
                                                <label for="checkbox-signup"> ¿Visualizar ruta en el destino? </label>
                                            </div>



                                        </div>
                                    </div>

                                </div>

                                <div class="row p-20">

                                </div>
                                <div class="row button-group">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div id="div_mensaje"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            
                                            <!-- <div class="col-lg-4 col-md-4" ng-if="ruta_id!=''">
                                                <a href="{{ route('cms.rutas') }}">
                                                    <button id="btn-nuevo" type="button"
                                                        class="btn waves-effect waves-light btn-block btn-success">Nuevo</button>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4" ng-if="ruta_id==''">
                                                <button id="btn-limpiar" type="button"
                                                    class="btn waves-effect waves-light btn-block btn-success"
                                                    ng-click="limpiar_cajas_color()">Limpiar</button>
                                            </div> -->
                                            <div class="col-lg-4 col-md-4">
                                                <a href="{{ route('cms.rutas.consultar') }}">
                                                    <button id="btn-consultar" type="button"
                                                        class="btn waves-effect waves-light btn-block btn-danger">@{{titulo_cons}}</button>
                                                </a>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <button id="btn-registrar" type="button"
                                                    class="btn waves-effect waves-light btn-block btn-info"
                                                    ng-click="registrarRuta()">@{{titulo_registrar}}</button>
                                            </div>
                                            @if(isset($ruta_id))
                                            <input id="ruta_id" type="hidden" name="ruta_id" value="{{$ruta_id}}">
                                            @endif
                                            <input type="hidden" name="base_url" id="base_url" value="">

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="wisiModal" name="wisiModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel1">Ingrese el contenido</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-group">
                                            <textarea id="textarea_editor" name="textarea_editor"
                                                class="textarea_editor form-control" rows="15"
                                                placeholder="Ingrese texto..."></textarea>
                                        </div>
                                    </form>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button id="cerrarModal" type="button" class="btn btn-danger"
                                data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" ng-click="agregarWisi()">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal_img1" name="modal_img1" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg .modal-sm">
                    <div class="modal-content">
                        <div class="modal-header header_conf">
                            <button type="button" id="cerrar_mensaje2" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                            <p id="cabecera_mensaje" name="cabecera_mensaje"><b> Información:</b> Seleccione uma imagen
                            </p>
                        </div>
                        <div class="modal-body" id="cuerpo_mensaje" name="cuerpo_mensaje">
                            <!--Modal body -->
                            <div class="centrar_galeria" ng-show="galery.length ==0">Galería de imágenes Slider</div>
                            <div id="" ng-show="galery.length!=0" class="fade-in-out">
                                <div>
                                    <div class="form-group">
                                        <input type='text' name='filtro_marcas' id='filtro_marcas'
                                            placeholder='Ingrese el valor a filtrar' class="form-control"
                                            ng-model="searchMarcas">
                                    </div>
                                    <div class="col-lg-12" padding="0px;">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 divbiblioteca"
                                                ng-repeat="imagen in galery|filter:searchMarcas track by $index">
                                                <img class="imgbiblioteca" id="img_biblioteca@{{$index}}"
                                                    ng-src="@{{base_url}}/@{{imagen.ruta}}" height="115"
                                                    data="@{{imagen.id}}|@{{imagen.ruta}}"
                                                    data-ng-click="seleccionar_imagen($event)">
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
                            <button type="button" name="modal_reporte_salir" id="modal_reporte_salir"
                                class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <!-- Fin footter del modal -->
                        </div>
                        <div style="clear:both"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection


@section('ngFile')
<script src="{{ asset('js/cms/controladores/rutasController.js') }}"></script>

@endsection
