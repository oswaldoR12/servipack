@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'home')

@section('content')


<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

    @include('web.layouts.header')


    <main class="content">
        <div class="block block-b014b842-1c61-4f9f-aab6-c60ab23e3048 block-heading view-1"
            data-block="b014b842-1c61-4f9f-aab6-c60ab23e3048">
            <div class="container">
                <h1 class="titular">Política de privacidad</h1>
            </div>
        </div>
        @if($pais->slug == 'colombia')
            @include('web.privacidad.privacidad-co')
        @endif
        @if($pais->slug == 'usa')
            @include('web.privacidad.privacidad-us')
        @endif

        @if($pais->slug == 'ecuador')
            @include('web.privacidad.privacidad-ec')
        @endif
        @if($pais->slug == 'europa')
            @include('web.privacidad.privacidad-eu')
        @endif
        @if($pais->slug == 'venezuela')
            @include('web.privacidad.privacidad-ve')
        @endif
    </main>



    <div class="prefooter"></div>

    @include('web.layouts.footer')

</body>
