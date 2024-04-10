@extends('web.layouts.main')

@section('page-title', 'Servicios Venezuela')
@section('ngApp', 'webExpress')
@section('ngController', 'home')

@section('content')




<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

    <header class="header landing-header">
        <h1>
            <a href="/" class="logo"><img
                    src="{"
                    title="" alt=""
                    class="web"
                    data-src="{"
                    loading="lazy"></a> </h1>
    </header>

    <main class="content">
        <div class="block block-4de5615e-ac9e-45c3-bc74-f09814d1b6e5 block-texto view-1 home-venezuela rte"
            data-block="4de5615e-ac9e-45c3-bc74-f09814d1b6e5">
            <div class="content rte clearfix">
                <div class="home-venezuela-content">
                    <div class="home-venezuela-content-listado">
                        <div class="home-venezuela-content-listado-item"><img alt=" Venezuela"
                                src="{{ asset('img/inicio/mrw.png') }}">
                            <p class="slogan">¡Nos movemos por ti!</p>

                            <p class="claim">Tu empresa de <span class="text-highlight">envios nacionales</span> en toda
                                Venezuela</p>
                            <a class="btn" href="">Ir</a>
                        </div>

                        <div class="home-venezuela-content-listado-item"><img alt="ServiPack"
                                src="{{ asset('img/inicio/servicios-expresos.png') }}">
                            <p class="slogan">Importaciones y exportaciones</p>

                            <p class="claim">Nos encargamos del <span class="text-highlight">proceso integral</span> de
                                tus envíos internacionales</p>
                            <a class="btn" href="{{ route('venezuela.home') }}">Ir</a>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="prefooter"></div>


    <footer class="landing-footer">
        <div class="container">
            <div class="landing-footer-top">
                <div class="landing-footer-logos">
                    <a href="/" class="logo"><img
                            src="{{ asset('img/inicio/params_logotipo_negativo.png') }}?format=webp"
                            title=""
                            alt="" class="web"
                            data-src="{{ asset('img/inicio/params_logotipo_negativo.png') }}?format=webp"
                            loading="lazy"></a> </div>
            </div>
            <div class="landing-footer-bottom">
                <p>©  2023 - Todos los derechos reservados</p>
            </div>
        </div>

        
    </footer>
</body>


@endsection

@section('ngFile')
<script src="{{ asset('js/web/controladores/home.js') }}"></script>

@endsection

@section('scripts')
<script src="/js/js-service/calendario.js"></script>
<script src="/js/js-service/frontend.js"></script>
<script src="/js/js-service/main.js"></script>
<script src="/js/js-service/redirreciones-co.js"></script>
<script src="/js/js-service/sliderSwiper.js"></script>
<script src="/js/js-service/swiper-bundle.min.js"></script>
<script src="/js/js-service/toastr.min.js"></script>
<script src="/js/js-service/tracking.js"></script>
<script src="/js/js-service/ultimo.js"></script>

@endsection
