@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'home')

@section('content')


<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

    @include('web.layouts.header')


    <main class="content">
        <div class="block block-a2d3be50-5acc-4a8d-b08f-dbcc68d1fbf7 block-heading view-1"
            data-block="a2d3be50-5acc-4a8d-b08f-dbcc68d1fbf7">
            <div class="container">
                <h1 class="titular">Condiciones de envíos comerciales</h1>
            </div>
        </div>

        @if($pais->slug == 'colombia')
            @include('web.condiciones.condiciones-co')
        @endif
        @if($pais->slug == 'usa')
            @include('web.condiciones.condiciones-us')
        @endif

        @if($pais->slug == 'ecuador')
            @include('web.condiciones.condiciones-ec')
        @endif
        @if($pais->slug == 'europa')
            @include('web.condiciones.condiciones-eu')
        @endif
        @if($pais->slug == 'venezuela')
            @include('web.condiciones.condiciones-ve')
        @endif


    </main>

    <div class="prefooter"></div>

    @include('web.layouts.footer')

</body>
