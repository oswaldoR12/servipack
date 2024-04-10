@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'home')

@section('content')


<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

    @include('web.layouts.header')

    @if($pais->slug == 'colombia')
        @include('web.avisos-legales.avisos-legales-co')
    @endif
    @if($pais->slug == 'usa')
        @include('web.avisos-legales.avisos-legales-us')
    @endif

    @if($pais->slug == 'ecuador')
        @include('web.avisos-legales.avisos-legales-ec')
    @endif
    @if($pais->slug == 'europa')
        @include('web.avisos-legales.avisos-legales-eu')
    @endif
    @if($pais->slug == 'venezuela')
        @include('web.avisos-legales.avisos-legales-ve')
    @endif

    <div class="prefooter"></div>

    @include('web.layouts.footer')

</body>
