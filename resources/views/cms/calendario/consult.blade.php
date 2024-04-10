@extends('cms.layouts.main-cms')

@section('page-title', 'CMS')
@section('ngApp', 'ContentManagerApp')
@section('ngController', 'calendarioConsultasController')

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
        <div class="container-fluid" ng-controller="calendarioConsultasController">
            <div class="row page-titles">
                <div class="col-md-5 col-8 align-self-center titulo-dashboard">
                    <h3 class="text-themecolor">Calendario</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Calendario</li>
                        <li class="breadcrumb-item active">Consultar Eventos</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">@{{titulo_pagina}}</h4>
                            <div class="table-responsive m-t-40">
                                <form id="formConsultaColores" name="formConsultaColores" method="POST" target="_self">
                                    <input type="hidden" id="id_color" name="id_color" ng-model="id_color">
                                    
                                    <div class="col-lg-12 mg-b30">
                                        <a href="{{ route('cms.calendario') }}">
                                            <div class="btn btn-success btn-new">Nuevo</div>
                                        </a>
                                    </div>
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Acciones</th>
                                                <th>Rutas</th>
                                                <th>Fecha</th>
                                                <th>Evento</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat="calendario in calendario track by $index">
                                                <td class="">@{{$index+1}}</td>
                                                <td class="centrado">
                                                    <div class="form-group flotar_izquierda">
                                                        
                                                        <div id="btn_eliminar@{{$index}}" name="btn_eliminar@{{$index}}"
                                                            class="btn btn-danger flotar_izquierda2" title="Eliminar"
                                                            data-ng-click="eliminar_registro($event)"
                                                            data="@{{calendario['calendario_id']}}|2">
                                                            <i class="fa fa-window-close" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="">@{{calendario.text_pais}}</td>
                                                <td class="">@{{calendario.fecha_formateada}}</td>
                                                <td class="">@{{calendario.evento}}</td>

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
<script src="{{ asset('js/cms/controladores/calendarioConsultasController.js') }}"></script>

@endsection
