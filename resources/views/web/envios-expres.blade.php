@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'envios_expres')

@section('content')


<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    @include('web.layouts.header')

    @if($pais->slug == 'colombia')
        <style>
            @media only screen and (min-width: 601px) {
                .bloque-agencia-receptora-content-envio-block-blocks-1 {
                    grid-template-columns: 1fr 1fr ;
                }
            }
        </style>
        @include('web.envios-express.envios-express-co')
    @endif
    @if($pais->slug == 'usa')
        @include('web.envios-express.envios-express-us')
    @endif

    @if($pais->slug == 'ecuador')
       

        @include('web.envios-express.envios-express-ec')
    @endif
    @if($pais->slug == 'europa')
        @include('web.envios-express.envios-express-eu')
    @endif
    @if($pais->slug == 'venezuela')
        @include('web.envios-express.envios-express-ve')
    @endif

    <div class="prefooter"></div>

    @include('web.layouts.footer')

</body>



@section('ngFile')
<script src="{{ asset('js/web/controladores/envios_expres.js') }}"></script>
@endsection