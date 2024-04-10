@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'home')

@section('content')


<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    
    @include('web.layouts.header')
    
    @if($pais->slug == 'colombia')
        @include('web.servi-tarifas.servi-tarifa-colombia')
    @endif
    @if($pais->slug == 'usa')
        @include('web.servi-tarifas.servi-tarifa-usa')
    @endif
    @if($pais->slug == 'ecuador')
        @include('web.servi-tarifas.servi-tarifa-ecuador')
    @endif
    @if($pais->slug == 'europa')
        @include('web.servi-tarifas.servi-tarifa-europa')
    @endif
    @if($pais->slug == 'venezuela')
        @include('web.servi-tarifas.servi-tarifa-venezuela')
    @endif


    <div class="prefooter"></div>

    @include('web.layouts.footer')

</body>
