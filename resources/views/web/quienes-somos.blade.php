@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'home')

@section('content')


<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    
    @include('web.layouts.header')
    

    @if($pais->slug == 'colombia')
        @include('web.quienes-somos.quienes-somos-co')
    @endif
    @if($pais->slug == 'usa')
        @include('web.quienes-somos.quienes-somos-us')
    @endif

    @if($pais->slug == 'ecuador')
        @include('web.quienes-somos.quienes-somos-ec')
    @endif
    @if($pais->slug == 'europa')
        @include('web.quienes-somos.quienes-somos-eu')
    @endif
    @if($pais->slug == 'venezuela')
        @include('web.quienes-somos.quienes-somos-ve')
    @endif


    <div class="prefooter"></div>

    @include('web.layouts.footer')

</body>
