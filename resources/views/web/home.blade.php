@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'home')

@section('content')




<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    @include('web.layouts.header')

    <input type="hidden" id="dataFecha" value="{{$calendario}}">
    <main class="content">
        <!-- Slider -->
        <div class="block block-447b1972-2ca7-433c-9c3c-8b5fcdafa8d6 block-slider view-1 block-slider-size-full boxed"
            data-block="447b1972-2ca7-433c-9c3c-8b5fcdafa8d6">
            <div class="block-slider-swiper swiper-container swiper-container-size-full boxed swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight swiper-backface-hidden"
                data-mode="boxed" data-animation="normal" data-time="5000" data-size="full">
                <div class="swiper-wrapper"
                    style="transition-duration: 0ms; transform: translate3d(-3903px, 0px, 0px); height: 309px;"
                    id="swiper-wrapper-bb296d397a9ec335" aria-live="off">
                    
                    <div class="slide slide-creatividad slide-0 slide-cover swiper-slide-duplicate-next"
                        data-swiper-slide-index="0" style="width: 1291px; margin-right: 10px;" role="group"
                        aria-label="1 / 3"><img width="1440" height="500" sizes="100vw"
                            class="swiper-lazy blurred swiper-lazy-loaded" alt=""><a
                            href="{{$sliders[0]['url']}}" target="_self"
                            class="slide-img slide-img-cover">
                            <picture>
                                <source media="(max-width: 768px)" sizes="100vw" class="swiper-lazy swiper-lazy-loaded"
                                srcset="{{ asset($sliders[0]['url_img_m'].'?format=webp') }} 480w,
                                    {{ asset($sliders[0]['url_img_m'].'?format=webp') }} 576w,
                                    {{ asset($sliders[0]['url_img_m'].'?format=webp') }} 768w,
                                    {{ asset($sliders[0]['url_img_m'].'?format=webp') }} 1536w">
                                <source media="(min-width: 768px)" sizes="(min-width: 1440px) 1440px, 100vw"
                                    class="swiper-lazy swiper-lazy-loaded"
                                    srcset="{{ asset($sliders[0]['url_img_d'].'?format=webp') }} 1,
                                    {{ asset($sliders[0]['url_img_d'].'?format=webp') }} 1,
                                    {{ asset($sliders[0]['url_img_d'].'?format=webp') }} 1"
                            src="{{ asset($sliders[0]['url_img_d'].'?format=webp') }}">
                                <img class="swiper-lazy img-fluid swiper-lazy-loaded 2051" alt="Slide"
                                src="{{ asset($sliders[0]['url_img_d'].'?format=webp') }}">
                            </picture>
                        </a>
                    </div>
                    <div class="slide slide-creatividad slide-1 slide-cover swiper-slide-prev"
                        data-swiper-slide-index="1" style="width: 1291px; margin-right: 10px;" role="group"
                        aria-label="2 / 3"><img width="1440" height="500" sizes="100vw"
                            class="swiper-lazy blurred swiper-lazy-loaded" alt=""><a
                            href="$sliders[1]['url']" target="_self" class="slide-img slide-img-cover">
                            <picture>
                                <source media="(max-width: 768px)" sizes="100vw" class="swiper-lazy swiper-lazy-loaded"
                                srcset="{{ asset($sliders[1]['url_img_m'].'?format=webp') }} 480w,
                                    {{ asset($sliders[1]['url_img_m'].'?format=webp') }} 576w,
                                    {{ asset($sliders[1]['url_img_m'].'?format=webp') }} 768w,
                                    {{ asset($sliders[1]['url_img_m'].'?format=webp') }} 1536w">
                                <source media="(min-width: 768px)" sizes="(min-width: 1440px) 1440px, 100vw"
                                    class="swiper-lazy swiper-lazy-loaded"
                                    srcset="{{ asset($sliders[1]['url_img_d'].'?format=webp') }} 992w,
                                    {{ asset($sliders[1]['url_img_d'].'?format=webp') }} 1200w,
                                    {{ asset($sliders[1]['url_img_d'].'?format=webp') }} 1440w,
                                    {{ asset($sliders[1]['url_img_d'].'?format=webp') }} 2880w"
                            >
                                <img class="swiper-lazy img-fluid swiper-lazy-loaded 2051" alt="Slide"
                                    src=" {{ asset($sliders[1]['url_img_d'].'?format=webp') }} 2880w">
                            </picture>
                            </a>
                    </div>
                    <div class="slide slide-creatividad slide-2 slide-cover swiper-slide-active"
                        data-swiper-slide-index="2" style="width: 1291px; margin-right: 10px;" role="group"
                        aria-label="3 / 3">
                        <img width="1440" height="500" sizes="100vw"
                            class="swiper-lazy blurred swiper-lazy-loaded" alt=""
                            >
                        <a href="$sliders[2]['url']" target="_self" class="slide-img slide-img-cover">
                            <picture>
                                <source media="(max-width: 768px)" sizes="100vw" class="swiper-lazy swiper-lazy-loaded"
                                        srcset="{{ asset($sliders[2]['url_img_m'].'?format=webp') }} 480w,
                                                {{ asset($sliders[2]['url_img_m'].'?format=webp') }} 576w,
                                                {{ asset($sliders[2]['url_img_m'].'?format=webp') }} 768w,
                                                {{ asset($sliders[2]['url_img_m'].'?format=webp') }} 1536w">
                                <source media="(min-width: 768px)" sizes="(min-width: 1440px) 1440px, 100vw"
                                        class="swiper-lazy swiper-lazy-loaded"
                                        srcset="{{ asset($sliders[2]['url_img_d'].'?format=webp') }} 992w,
                                                {{ asset($sliders[2]['url_img_d'].'?format=webp') }} 1200w,
                                                {{ asset($sliders[2]['url_img_d'].'?format=webp') }} 1440w,
                                                {{ asset($sliders[2]['url_img_d'].'?format=webp') }} 2880w">
                                <img class="swiper-lazy img-fluid swiper-lazy-loaded 2051" alt="Slide"
                                    src="{{ asset($sliders[2]['url_img_d'].'?format=webp') }}">
                            </picture>
                        </a>
                    </div>

                  
                </div>
                <div
                    class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                    <span class="swiper-pagination-bullet" tabindex="0" role="button"
                        aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0"
                        role="button" aria-label="Go to slide 2"></span><span
                        class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                        aria-label="Go to slide 3" aria-current="true"></span></div>
                <div class="swiper-navigation">
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Diapositiva anterior"
                        aria-controls="swiper-wrapper-bb296d397a9ec335">
                    <!-- <img src="{{ asset('img/icon/izq.png') }}" alt=""> -->
                    </div>
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Diapositiva siguiente"
                        aria-controls="swiper-wrapper-bb296d397a9ec335"></div>
                </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
        <!-- Slider -->
        <!-- Primera Sección -->
        <div class="block block-ffa8bf94-b3e6-4adc-b67e-1d7b9cd8cb1b block-templates-servicios-expresos-home-hacer-envios"
            data-block="ffa8bf94-b3e6-4adc-b67e-1d7b9cd8cb1b">
            <div class="ad-hoc-home-1">
                <div class="container">
                    <div class="ad-hoc-home-1-blocks">

                        <div id="primer_cuadro" class="ad-hoc-home-1-blocks-block envio block-adhoc-envio" style="--imagen-fondo-c1: url('{{ asset($block_adhoc_envio->galeriaBack->ruta) }}');">
                            {!! $block_adhoc_envio->html !!}
                            @if(!empty($block_adhoc_envio->boton_1))
                                <a href="{{ $block_adhoc_envio->url_1 }}" class="saber-mas-btn">{{ $block_adhoc_envio->boton_1 }}</a>
                            @endif
                        </div>
                        <div id="segundo_cuadro" class="ad-hoc-home-1-blocks-block my-casillero" style="--imagen-fondo-c2: url('{{ asset($my_casillero_ico->galeriaBack->ruta) }}');">
                            <img 
                            src="{{ asset($my_casillero_ico->galeriaIco->ruta) }}"
                                alt="MyCasillero">

                            {!! $my_casillero_ico->html !!}

                            @if(!empty($my_casillero_ico->boton_1))
                                <a href="{{ $my_casillero_ico->url_1 }}" class="saber-mas-btn">{{ $my_casillero_ico->boton_1 }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Primera Sección -->
        <!-- Calculadora y calendario -->
        <div class="block block-2dd0159e-86b1-4ca9-a09c-17c9cf0b5784 block-templates-servicios-expresos-home-calculadora-mapa"
            data-block="2dd0159e-86b1-4ca9-a09c-17c9cf0b5784">
            <div id="webCalendarData" data-calendar="[]" data-first="10"></div>
            <div id="ad-hoc-home-2" class="ad-hoc-home-2">
                <div class="container">
                    <div class="ad-hoc-home-2-blocks">
                        
                    

                    
                        @if($pais->slug == 'colombia')
                            @include('web.calculadoras.calculadora-co')
                        @endif
                        @if($pais->slug == 'usa')
                            @include('web.calculadoras.calculadora-usa')
                        @endif
                        @if($pais->slug == 'ecuador')
                            @include('web.calculadoras.calculadora-ec')
                        @endif
                        @if($pais->slug == 'europa')
                            @include('web.calculadoras.calculadora-es')
                        @endif
                        @if($pais->slug == 'venezuela')
                            @include('web.calculadoras.calculadora-ve')
                        @endif
                        <div class="ad-hoc-home-2-blocks-block salidas">
                            <div id="calendar">
                                <div class="month-country">
                                    <div class="month">
                                            
                                        <ul>
                                        <li id="prev" class="first">❮</li>
                                        <li id="month"></li>
                                        <li id="year"></li>
                                        <li id="next">❯</li>
                                        </ul>
                                        <div class="titular text-highlight-alt">Próximas salidas</div>
                                    </div>
                                    <div class="country">
                                        <div class="form">
                                            <div class="input select required">

                                            <select name="route_id" id="route_id" class="form-control" required="required"
                                                    ng-options="option.rutas_id as option.descripcion for option in rutas"
                                                    data-size="1" ng-model="rutas_id" ng-change="onSelectChange()">
                                            </select>


                                               
                                            
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <ul id="weekdays">
                                    <li>L</li>
                                    <li>M</li>
                                    <li>X</li>
                                    <li>J</li>
                                    <li>V</li>
                                    <li>S</li>
                                    <li>D</li>
                                </ul>

                                <ul id="days">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Calculadora y calendario -->

        <!-- Oficinas y FAQs -->
        <div class="block block-75d5e4ac-0cfa-4742-87f3-84a119976b9b block-templates-servicios-expresos-home-oficinas-mapas"
            data-block="75d5e4ac-0cfa-4742-87f3-84a119976b9b">
            <div class="ad-hoc-home-3">
                <div class="container">
                    <div class="ad-hoc-home-3-blocks">
                        <div class="ad-hoc-home-3-blocks-block oficinas">
                            <img 
                            src="{{ asset('img/icon/oficinas-' . $pais->class . '.png') }}"
                             alt="CO">
                            <p class="titular">Oficinas en <span class="text-highlight">{{$pais->descripcion}}</span></p>
                            <p class="subtitular CO"></p>
                            <a href="/oficinas" class="saber-mas-btn">Saber más</a>
                        </div>
                        <div class="ad-hoc-home-3-blocks-block faqs">
                            <img 
                            src="{{ asset('img/inicio/question.png') }}" alt="">
                            <p class="titular">FAQs</p>
                            <a href="/faqs" class="saber-mas-btn">Saber más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Oficinas y FAQs -->

        <!-- Que dicen de nosotros? -->
        <div class="block block-82676327-3a36-48af-9663-900128e80483 block-entity view-1 testimonios-ultimos ultimos"
            data-block="82676327-3a36-48af-9663-900128e80483">
            <div class="container">
                <div class="block-entity-header">
                    <div class="block-entity-header-texts">
                        <h2 class="titular">¿Qué dicen de <span class="text-highlight">nosotros?</span></h2>
                    </div>
                </div>
                <div class="block-entity-body swiper">
                    <div class="swiper-container swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                        data-slidesperview="1">
                        <div class="swiper-wrapper" id="swiper-wrapper-af3851c3a12e4a0c" aria-live="polite"
                            style="transform: translate3d(0px, 0px, 0px);">
                            <article class="card testimonios-card slide view-4 swiper-slide-active"
                                style="width: 1052px; margin-right: 20px;" role="group" aria-label="1 / 5">
                                <div class="card-img testimonios-card-img">
                                    <picture>
                                        <img 
                                        src="{{ asset('img/inicio/avatar3.webp') }}?format=webp"
                                            class="img" title="Karla Alejandra Torrealba Balza"
                                            alt="Karla Alejandra Torrealba Balza"
                                            data-src="{{ asset('img/inicio/avatar3.webp') }}?format=webp"
                                            width="100" height="100" loading="lazy"> </picture>
                                </div>
                                <div class="card-content testimonios-card-content no-hover">
                                    <header class="card-content-header testimonios-card-content-header">
                                        <div class="testimonios-stars stars" style="--rating: 5" aria-label="5 sobre 5">
                                        </div>
                                        <h3 class="titular">Karla Alejandra Torrealba Balza</h3>
                                    </header>
                                    <div class="card-content-body testimonios-card-content-body rte">
                                        <p>Excelente servicio.</p>

                                        <p>En todo momento dispuesto ayudar. Me resolvieron un envío súper impórtate q
                                            tenia q hacer con urgencia y me facilitaron en buscarlo hasta la puerta de
                                            mi ubicación. Y todo esto a última hora por mi parte. De verdad que
                                            agradecida con todo el personal. En especial a Maria Alejandra... Gracias
                                            nuevamente. 100% recomendable</p>
                                    </div>
                                </div>
                            </article>
                            <article class="card testimonios-card slide view-4 swiper-slide-next"
                                style="width: 1052px; margin-right: 20px;" role="group" aria-label="2 / 5">
                                <div class="card-img testimonios-card-img">
                                    <picture>
                                        <img src="{{ asset('img/inicio/avatar1.webp') }}?format=webp"
                                            class="img" title="Adriana de ois" alt="Adriana de ois"
                                            data-src="{{ asset('img/inicio/avatar1.webp') }}?format=webp"
                                            width="100" height="100" loading="lazy"> </picture>
                                </div>
                                <div class="card-content testimonios-card-content no-hover">
                                    <header class="card-content-header testimonios-card-content-header">
                                        <div class="testimonios-stars stars" style="--rating: 5" aria-label="5 sobre 5">
                                        </div>
                                        <h3 class="titular">Adriana de ois</h3>
                                    </header>
                                    <div class="card-content-body testimonios-card-content-body rte">
                                        <p>Excelente servicio y rapidez a la hora de solicitar cotización y la recogida,
                                            siempre están activos y te responden muy rápido.</p>
                                    </div>
                                </div>
                            </article>
                            <article class="card testimonios-card slide view-4"
                                style="width: 1052px; margin-right: 20px;" role="group" aria-label="3 / 5">
                                <div class="card-img testimonios-card-img">
                                    <picture>
                                        <img src="{{ asset('img/inicio/avatar3.webp') }}?format=webp"
                                            class="img" title="Patricia Vallejo" alt="Patricia Vallejo"
                                            data-src="{{ asset('img/inicio/avatar3.webp') }}?format=webp"
                                            width="100" height="100" loading="lazy"> </picture>
                                </div>
                                <div class="card-content testimonios-card-content no-hover">
                                    <header class="card-content-header testimonios-card-content-header">
                                        <div class="testimonios-stars stars" style="--rating: 5" aria-label="5 sobre 5">
                                        </div>
                                        <h3 class="titular">Patricia Vallejo</h3>
                                    </header>
                                    <div class="card-content-body testimonios-card-content-body rte">
                                        <p>Atención de primera, la carga llega en buen tiempo a cualquier ciudad de
                                            Venezuela y todo llego perfecto. Los recomiendo</p>
                                    </div>
                                </div>
                            </article>
                            <article class="card testimonios-card slide view-4"
                                style="width: 1052px; margin-right: 20px;" role="group" aria-label="4 / 5">
                                <div class="card-img testimonios-card-img">
                                    <picture>
                                        <img src="{{ asset('img/inicio/avatar2.webp') }}?format=webp"
                                            class="img" title="Jesús Molina" alt="Jesús Molina"
                                            data-src="{{ asset('img/inicio/avatar2.webp') }}?format=webp"
                                            width="100" height="100" loading="lazy"> </picture>
                                </div>
                                <div class="card-content testimonios-card-content no-hover">
                                    <header class="card-content-header testimonios-card-content-header">
                                        <div class="testimonios-stars stars" style="--rating: 5" aria-label="5 sobre 5">
                                        </div>
                                        <h3 class="titular">Jesús Molina</h3>
                                    </header>
                                    <div class="card-content-body testimonios-card-content-body rte">
                                        <p>La atención al cliente es excelente y la monitorización, estoy muy contento,
                                            realice un pedido en Shein y acaba de llegar a mi casillero, en espera de
                                            que llegue a Venezuela.</p>

                                        <p>Los recomiendo 100%</p>
                                    </div>
                                </div>
                            </article>
                            <article class="card testimonios-card slide view-4" role="group" aria-label="5 / 5"
                                style="width: 1052px; margin-right: 20px;">
                                <div class="card-img testimonios-card-img">
                                    <picture>
                                        <img src="{{ asset('img/inicio/avatar5.webp') }}?format=webp"
                                            class="img" title="Hannly Valera" alt="Hannly Valera"
                                            data-src="{{ asset('img/inicio/avatar5.webp') }}?format=webp"
                                            width="100" height="100" loading="lazy"> </picture>
                                </div>
                                <div class="card-content testimonios-card-content no-hover">
                                    <header class="card-content-header testimonios-card-content-header">
                                        <div class="testimonios-stars stars" style="--rating: 5" aria-label="5 sobre 5">
                                        </div>
                                        <h3 class="titular">Hannly Valera</h3>
                                    </header>
                                    <div class="card-content-body testimonios-card-content-body rte">
                                        <p>Los recomiendos excelente servicio y confiables ya he enviado varias cajas de
                                            España a Venezuela y super bien los recomiendo mucho.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div
                            class="swiper-pagination swiper-pagination-outer swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                role="button" aria-label="Go to slide 1" aria-current="true"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0"
                                role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 4"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 5"></span></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <div class="swiper-navigation swiper-navigation-outer">
                        <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button"
                            aria-label="Diapositiva anterior" aria-controls="swiper-wrapper-af3851c3a12e4a0c"
                            aria-disabled="true"></div>
                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Diapositiva siguiente"
                            aria-controls="swiper-wrapper-af3851c3a12e4a0c" aria-disabled="false"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Que dicen de nosotros? -->
   
   
    </main>
    <div class="prefooter"></div>
    
    @include('web.layouts.footer')
    @include('web.layouts.cookies')

</body>


@endsection

@section('ngFile')
<script src="{{ asset('js/web/controladores/home.js') }}"></script>

@endsection

@section('scripts')

<script>
    var calendario = @json($calendario);
</script>
<!-- <script src="/js/js-service/calendario.js"></script> -->

<script src="/js/js-service/frontend.js"></script>
<script src="/js/js-service/main.js"></script>
<script src="/js/js-service/redirreciones-co.js"></script>
<script src="/js/js-service/sliderSwiper.js"></script>
<script src="/js/js-service/swiper-bundle.min.js"></script>
<script src="/js/js-service/toastr.min.js"></script>
<script src="/js/js-service/tracking.js"></script>
<script src="/js/js-service/ultimo.js"></script>

@if($pais->slug == 'colombia')
<script src="/js/calculadoras/calculadora-co.js"></script>
@endif
@if($pais->slug == 'usa')
<script src="/js/calculadoras/calculadora-usa.js"></script>
@endif

@if($pais->slug == 'ecuador')
<script src="/js/calculadoras/calculadora-ec.js"></script>
@endif
@if($pais->slug == 'europa')
<script src="/js/calculadoras/calculadora-es.js"></script>
@endif

@if($pais->slug == 'venezuela')
<script src="/js/calculadoras/calculadora-ve.js"></script>
@endif

<!-- 
<script>
    $(document).ready(function () {
    // Mensaje de éxito
    toastr.success('¡Bien hecho!', 'Operación exitosa');

    // Mensaje de error
    toastr.error('Ocurrió un error', 'Error');

    // Mensaje de información
    toastr.info('Información adicional', 'Información');

    // Mensaje de advertencia
    toastr.warning('Cuidado', 'Advertencia');
}); -->

</script>
@endsection