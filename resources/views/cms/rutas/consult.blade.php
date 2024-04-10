@extends('cms.layouts.main-cms')

@section('page-title', 'CMS')
@section('ngApp', 'ContentManagerApp')
@section('ngController', 'rutasConsultasController')

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
        <div class="container-fluid" ng-controller="rutasConsultasController">
            <div class="row page-titles">
                <div class="col-md-5 col-8 align-self-center titulo-dashboard">
                    <h3 class="text-themecolor">Rutas</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Rutas</li>
                        <li class="breadcrumb-item active">Consultar Rutas</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">@{{titulo_pagina}}</h4>
                            <div class="table-responsive m-t-40">
                                
                                <form id="formConsultaRutas" name="formConsultaRutas" method="GET" target="_self"
                                >
                                    <input type="hidden" id="ruta_id" name="ruta_id" ng-model="ruta_id">
                                    

                                    <div class="col-lg-12 mg-b30">
                                        <a href="{{ route('cms.rutas') }}">
                                            <div class="btn btn-success btn-new">Nuevo</div>
                                        </a>
                                    </div>
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th> #</th>
                                                <th>Acciones</th>
                                                <th>Descripción</th>
                                                <th>Vizualizar en destino</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat="ruta in rutas track by $index">
                                            <td class="">@{{$index+1}}</td>
                                                <td class="centrado">
                                                    <div class="form-group flotar_izquierda">
                                                        <div id="ver@{{$index}}" ng-click="ver_ruta($index)"
                                                            data="@{{ruta.rutas_id}}"
                                                            class="btn btn-primary flotar_izquierda2" title="modificar">
                                                            <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                                                        </div>
                                                        <div id="btn_activar@{{$index}}_a"
                                                            name="btn_activar@{{$index}}_a"
                                                            class="btn btn-warning flotar_izquierda2"
                                                            ng-class="{visible:ruta.activo=='1',invisible:ruta.activo!=1}"
                                                            title="Inactivar" data-ng-click="activar_registro($event)"
                                                            data="@{{ruta.rutas_id}}|@{{ruta.activo}}">
                                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                                        </div>
                                                        <div id="btn_activar@{{$index}}_b"
                                                            name="btn_activar@{{$index}}_b"
                                                            class="btn btn-success flotar_izquierda2"
                                                            ng-class="{visible:ruta.activo!='1',invisible:ruta.activo==1}"
                                                            title="Publicar" data-ng-click="activar_registro($event)"
                                                            data="@{{ruta.rutas_id}}|@{{ruta.activo}}">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                        </div>
                                                        <div id="btn_eliminar@{{$index}}" name="btn_eliminar@{{$index}}"
                                                            class="btn btn-danger flotar_izquierda2" title="Eliminar"
                                                            data-ng-click="eliminar_registro($event)"
                                                            data="@{{ruta.rutas_id}}|2">
                                                            <i class="fa fa-window-close" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">@{{ruta.descripcion}}</td>
                                                <td class="">@{{ruta.text_ruta_inversa}}</td>

                                        </tbody>
                                    </table>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



@endsection


@section('ngFile')
<script src="{{ asset('js/cms/controladores/rutasConsultasController.js') }}"></script>

@endsection
