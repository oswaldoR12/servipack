@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'home')

@section('content')


<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    @include('web.layouts.header')

    <main class="content">
        <div class="block block-a0fdb73d-1854-49b0-86df-d7fe1425794e block-heading view-1"
            data-block="a0fdb73d-1854-49b0-86df-d7fe1425794e">
            <div class="container">
                <h1 class="titular">Oficinas</h1>
            </div>
        </div>
        <div class="block block-eab719ab-c058-4295-9679-313132f633a0 block-templates-servicios-expresos-oficinas-buscador"
            data-block="eab719ab-c058-4295-9679-313132f633a0">
            <div id="total-markers">
            </div>
            <div class="block-oficinas-buscador">
                @if($pais->slug == 'colombia')
                @include('web.map.map-colombia')
                @endif
                @if($pais->slug == 'usa')
                @include('web.map.map-usa')
                @endif

                @if($pais->slug == 'ecuador')
                @include('web.map.map-ecuador')
                @endif
                @if($pais->slug == 'europa')
                @include('web.map.map-europa')
                @endif

                @if($pais->slug == 'venezuela')
                @include('web.map.map-venezuela')
                @endif
            </div>
        </div>
        <div class="block block-ff45c4b8-3296-40f5-9cbf-f9b0822e2596 block-texto view-1 rte"
            data-block="ff45c4b8-3296-40f5-9cbf-f9b0822e2596">
            <div class="content rte clearfix">
                <div class="block-oficinas-footer">
                    <div class="container"><img alt="mycasillero" src="{{ asset('img\inicio\mycasillero-logo.png') }}">
                        <p class="titular">Únete a nuestro <span class="text-highlight">Casillero<br>
                                GRATUITO</span> para realizar tus envíos,
                            <br>comprar estés donde estés y mucho más</p>


                        @if($pais->slug == 'colombia')

                        <a class="saber-mas-btn" href="">Saber más</a>
                        @endif
                        @if($pais->slug == 'usa')

                        <a class="saber-mas-btn" href="">Saber más</a>
                        @endif

                        @if($pais->slug == 'ecuador')

                        <a class="saber-mas-btn" href="">Saber más</a>
                        @endif
                        @if($pais->slug == 'europa')

                        <a class="saber-mas-btn" href="">Saber más</a>
                        @endif

                        @if($pais->slug == 'venezuela')

                        <a class="saber-mas-btn" href="">Saber más</a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('web.layouts.footer')

</body>



@endsection

@section('ngFile')
<script src="{{ asset('js/web/controladores/home.js') }}"></script>

@endsection

@section('scripts')
<script src="/js/js-service/frontend.js"></script>
<script src="/js/js-service/main.js"></script>
<script src="/js/js-service/redirreciones-co.js"></script>
<script src="/js/js-service/toastr.min.js"></script>
<script src="/js/web/map/leaflet.js"></script>
<script src="/js/web/map/leaflet2.js"></script>
<script src="/js/web/map/oficinas.js"></script>
<script src="/js/web/map/popper.min.js"></script>
<script src="/js/web/map/sweetalert.js"></script>



@endsection