<div class="modal-selector-casilleros" data-site-country="CO">
    <div class="modal-selector-casilleros-content">
        <p class="modal-selector-casilleros-content-close"><i class="fa-solid fa-circle-xmark"></i></p>
        <div class="modal-selector-casilleros-pais" data-country="ES">
            <p>En España</p>
            <ul>
                <li><a href="" target="_blank">San
                        Sebastián de los Reyes (Madrid)</a></li>
                <li><a href="" target="_blank">Carabanchel</a>
                </li>
                <li><a href="" target="_blank">Avenida de
                        América</a></li>
                <li><a href="" target="_blank">Valencia</a>
                </li>
                <li><a href="" target="_blank">Barcelona</a></li>
                <li><a href="" target="_blank">Santa Cruz de
                        Tenerife</a></li>
            </ul>
        </div>
        <div class="modal-selector-casilleros-pais" data-country="US">
            <p>USA</p>
            <ul>

                <li><a href="" target="_blank">Miami</a></li>

            </ul>
        </div>

        <div class="modal-selector-casilleros-pais" data-country="CO">
            <p>{{$pais->descripcion}}</p>

            <ul>
                <li><a href="" target="_blank">Bogotá</a></li>
            </ul>
        </div>
        <div class="modal-selector-casilleros-pais" data-country="EC">
            <p>Ecuador</p>
            <ul>
                <li><a href="" target="_blank">Ecuador</a></li>
            </ul>
        </div>


    </div>
</div>
<header class="header">
    <nav class="header-top" style="">
        <div class="container-fluid">
            <div class="row">
                <div class="col logos">
                    <h1 class="logo"><a href="/"><img src="{"
                                title=""
                                alt="" class="web logo-black"
                                loading="lazy"></a></h1>
                </div>
                <div class="col formulario">
                    <a href="/envios-servicios-expresos" class="btn btn-envio">Haz tu envío con nosotros</a>
                    <form method="post" accept-charset="utf-8" id="tracking" class="tracking-form" action="/">
                        <div style="display:none;"><input type="hidden" name="_csrfToken" autocomplete="off"
                                value="6qphcdejCG2frGMl1kxx6HXGRzQVKI7vsF0N4U4fGA7hLYapA+NsnZqqUoI8kaH0w4ZRcT3LJQqXLSlwqK+EVw==">
                        </div>
                        <div class="input text"><label title="Envío" for="envio">Envío</label><input type="text"
                                name="envio" placeholder="Sigue tu envío" id="envio"></div><button type="submit"
                            title="Buscar"><i class="fa-light fa-arrow-right"></i></button>
                        <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off"
                                value="e82d8eed0feab9f344d2a8fd1010cf866e9999b8%3A"><input type="hidden"
                                name="_Token[unlocked]" autocomplete="off" value=""></div>
                    </form>
                </div>
                <div class="col header-top-social">
                    @if($pais->slug == 'colombia')
                    <ul class="social-menu">
                        <li><a href="https://www.facebook.com/people/Servicios-Expresos-Ecuador/100064027000391/"
                                class="facebook" title="Ir a Facebook" target="_blank"><span>Facebook</span></a>
                        </li>
                        <li><a href="/" class="instagram"
                                title="Ir a Instagram" target="_blank"><span>Instagram</span></a>
                        </li>
                    </ul>

                    @endif
                    @if($pais->slug == 'usa')
                    <ul class="social-menu">
                        <li><a href="https://www.facebook.com/people/Servicios-Expresos-Ecuador/100064027000391/"
                                class="facebook" title="Ir a Facebook" target="_blank"><span>Facebook</span></a>
                        </li>
                        <li><a href="/" class="instagram"
                                title="Ir a Instagram" target="_blank"><span>Instagram</span></a>
                        </li>
                    </ul>
                    @endif
                    @if($pais->slug == 'ecuador')
                    <ul class="social-menu">
                        <li><a href="https://www.facebook.com/people/Servicios-Expresos-Ecuador/100064027000391/"
                                class="facebook" title="Ir a Facebook" target="_blank"><span>Facebook</span></a>
                        </li>
                        <li><a href="/" class="instagram"
                                title="Ir a Instagram" target="_blank"><span>Instagram</span></a>
                        </li>
                    </ul>

                    @endif
                    @if($pais->slug == 'europa')
                    <ul class="social-menu">
                        <li><a href="https://www.facebook.com/people/Servicios-Expresos-Ecuador/100064027000391/"
                                class="facebook" title="Ir a Facebook" target="_blank"><span>Facebook</span></a>
                        </li>
                        <li><a href="/" class="instagram"
                                title="Ir a Instagram" target="_blank"><span>Instagram</span></a>
                        </li>
                    </ul>

                    @endif
                    @if($pais->slug == 'venezuela')
                    <ul class="social-menu">
                        <li><a href="https://www.facebook.com/people/Servicios-Expresos-Ecuador/100064027000391/"
                                class="facebook" title="Ir a Facebook" target="_blank"><span>Facebook</span></a>
                        </li>
                        <li><a href="/" class="instagram"
                                title="Ir a Instagram" target="_blank"><span>Instagram</span></a>
                        </li>
                    </ul>

                    @endif
                </div>
            </div>
        </div>
    </nav>
    <nav class="header-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col logos">
                    <h1 class="logo"><a href="/"><img src="{"
                                title=""
                                alt="" class="web logo-black"
                                loading="lazy"></a></h1>
                </div>
                <div class="col menus">
                    <div class="navbar-collapse offcanvas-collapse">
                        <ul class="main-menu menu-level-0">
                            <li
                                class="level-0 menu-elemento-11301f05-1267-41b4-b40e-eaf817ef4735 {{ $seccion['activate'] == 'home' ? 'active' : '' }}">
                                <a href="/" target="_self">Home</a>
                            </li>
                            <li
                                class="level-0 menu-elemento-5bbd9ab5-09a3-41ea-b926-6e2211f71c56 {{ $seccion['activate'] == 'oficina' ? 'active' : '' }}">
                                
                                @if($dominioActual == '5')
                                <a href="/agencias" target="_self">Agencias</a>
                                @else
                                <a href="/oficinas" target="_self">Oficinas</a>
                                @endif
                                
                            </li>
                            <li
                                class="level-0 menu-elemento-17adbae2-f75e-4aac-a847-d733a820ee42 {{ $seccion['activate'] == 'servcios' ? 'active' : '' }}">
                                <a href="/servicios" target="_self">Servicios y tarifas</a>
                            </li>
                            <li
                                class="level-0 menu-elemento-932603a8-1044-4088-85b9-591dcd318a10 {{ $seccion['activate'] == 'quienes-somos' ? 'active' : '' }}">
                                <a href="/quienes-somos" target="_self">Quiénes somos</a>
                            </li>
                            <li
                                class="level-0 menu-elemento-dac5c475-5e04-4bb9-a9dc-f649c5af9565 {{ $seccion['activate'] == 'corporativos' ? 'active' : '' }}">
                                

                                @if($dominioActual == '5')
                                <a href="/corporativos" target="_self">Corporativos</a>
                                @else
                                <a href="/corporativos-y-franquiciados" target="_self">Corporativos y franquiciados</a>
                                @endif


                            </li>
                            <li
                                class="level-0 menu-elemento-875507a2-8b18-4ab9-a989-4f191dc663cd {{ $seccion['activate'] == 'contacto' ? 'active' : '' }}">
                                <a href="/contacto" target="_self">Contacto</a>
                            </li>
                        </ul><a href="/envios-servicios-expresos" class="btn btn-envio">Haz tu envío con
                            nosotros</a>
                        <div class="header-bottom-my-casillero">

                            <a href="{{$pais->url_casillero}}" target="_self"><img
                                    src="{{ asset('img/inicio/mycasillero-mobile.webp') }}?format=webp"></a>
                            <a href="#" class="modal-selector-casilleros-toggler d-none"><i
                                    class="fa-solid fa-chevron-down"></i></a>
                        </div>
                        <div class="header-bottom-language">
                            <div class="dropdown locale-dropdown">
                                <button aria-expanded="false" aria-haspopup="true"
                                    class="locale-picker locale-es_{{ $pais->class }}  dropdown-toggle"
                                    data-toggle="dropdown" id="locale-dropdown-button" type="button"></button>
                                <div aria-labelledby="locale-dropdown-button"
                                    class="dropdown-menu dropdown-menu-right locale-list">
                                    <!-- <a class="locale locale-es_ES"
                                            href="{{ env('APP_LOCALE') }}">España</a> -->


                                            
                                    @if($pais->slug !== 'venezuela')
                                    <a class="locale locale-es_VE" href="{{ route('venezuela.home') }}">
                                        Venezuela
                                    </a>
                                    @endif
                                    @if($pais->slug !== 'ecuador')
                                    <a class="locale locale-es_EC" href="{{ route('ecuador.home') }}">
                                        Ecuador
                                    </a>
                                    @endif
                                    @if($pais->slug !== 'colombia')
                                    <a class="locale locale-es_CO" href="{{ route('colombia.home') }}">Colombia</a>
                                    @endif


                                    @if($pais->slug !== 'usa')
                                    <a class="locale locale-es_US" href="{{ route('usa.home') }}">USA</a>
                                    @endif

                                    @if($pais->slug !== 'europa')
                                    <a class="locale locale-es_ES" href="{{ route('europa.home') }}">España</a>
                                    @endif
                                    

                                    <a class="locale locale-grupo" href="{{ route('inicio') }}  ">Grupo SE</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="hamburger" data-toggle="offcanvas">
                    <div class="bar top"></div>
                    <div class="bar middle"></div>
                    <div class="bar bottom"></div>
                </div>
            </div>
        </div>

    </nav>
</header>

<div class="tracking-mobile">
    <form method="post" accept-charset="utf-8" id="tracking" class="tracking-form" action="/">
        <div style="display:none;"><input type="hidden" name="_csrfToken" autocomplete="off"
                value="6qphcdejCG2frGMl1kxx6HXGRzQVKI7vsF0N4U4fGA7hLYapA+NsnZqqUoI8kaH0w4ZRcT3LJQqXLSlwqK+EVw==">
        </div>
        <div class="input text"><label title="Envío" for="envio">Envío</label><input type="text" name="envio"
                placeholder="Sigue tu envío" id="envio"></div><button type="submit" title="Buscar"><i
                class="fa-light fa-arrow-right"></i></button>
        <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off"
                value="e82d8eed0feab9f344d2a8fd1010cf866e9999b8%3A"><input type="hidden" name="_Token[unlocked]"
                autocomplete="off" value=""></div>
    </form>
</div>