@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'envios_expres')

@section('content')




<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    @include('web.layouts.header')

    <main class="content">
        <div class="block block-3c406910-6964-4554-a5fc-9da52c9884cd block-heading view-1"
            data-block="3c406910-6964-4554-a5fc-9da52c9884cd">
            <div class="container">
                <h1 class="titular">Reempaque de envíos de España a Venezuela</h1>
                <p class="subtitular">Reorganizamos y aseguramos tu paquete para aprovechar al máximo el espacio y
                    garantizar su seguridad.</p>
            </div>
        </div>
        <div class="block block-934757e8-a623-49ea-8095-ab89545b80a8 block-landing view-1"
            data-block="934757e8-a623-49ea-8095-ab89545b80a8">
            <div class="container">
                <div class="landing-info row">
                    <div class="col">
                        <div class="landing-info-img rte">
                            <img
                                src="{{asset('img\inicio\params_landing_imagen_desktop_reempaque.png') }}"
                                class="landing-info-img-desktop" title=""
                                alt=""
                                data-src="{{asset('img\inicio\params_landing_imagen_desktop_reempaque.png') }}"
                                loading="lazy"></div>
                        <div class="landing-info-texto rte">
                            <h3>¿Qué es el servicio de <span style="color:#e74c3c;">reempaque</span>?</h3>

                            <p>Nuestro servicio de reempaque para compras online es un servicio para clientes que
                                compran a través de Casillero para envíos a Venezuela, Colombia y Dominicana.</p>

                            <p>Puedes solicitar reempaque cuando haces múltiples compras, para que nosotros consolidemos
                                todos tus paquetes en una sola caja.</p>

                            <p>&nbsp;</p>

                            <h4 style="margin-left: 40px;"><strong>&gt;¿Por qué solicitar reempaque?</strong></h4>

                            <p>&nbsp;</p>

                            <ul>
                                <li>Al consolidar tus compras online internacionales, <strong>ahorras espacio</strong>
                                    haciendo tu <strong>envío más económico</strong>.</li>
                                <li>Nos aseguramos de que tu envío va seguro y bien empaquetado, <strong>evitando
                                        roturas</strong> o derrames.</li>
                                <li>Utilizamos los <strong>materiales adecuados</strong> para que tus envíos lleguen en
                                    perfectas condiciones.</li>
                                <li>Es <span style="color:#e74c3c;"><strong>GRATIS</strong></span></li>
                            </ul>

                            <p>&nbsp;</p>
                        </div>
                    </div>

                    <div class="col" id="moveable-wrapper">
                        <div id="moveable">
                            <div class="form-content form-content-desktop">
                                <div class="form">
                                <form method="post" accept-charset="utf-8"
                                    class="form-gtm form-c6031baf-990c-49ec-9e3a-cd15d9313b8f"
                                    action="/frontend/frontend-ajax/contact-form/c6031baf-990c-49ec-9e3a-cd15d9313b8f">
                                    <div style="display:none;"><input type="hidden" name="_csrfToken" autocomplete="off"
                                            value="ck08xlyslefogZg59i9GSah9lahdtr/mCp+Hq/2l72TcGrf3NeRnb7txTXpqUOiGUhGNaD8JxYjlcHF27BIcpg==">
                                    </div><input type="hidden" name="form_uuid"
                                        value="c6031baf-990c-49ec-9e3a-cd15d9313b8f"><input type="hidden" name="referer"
                                        value=""><input
                                        type="hidden" name="web_entidad_id"><input type="hidden"
                                        name="entidad_id"><input type="hidden" name="pagina_id" value="5372">
                                    <h2 class="form-titular titular">Haz tu <span class="text-highlight">consulta
                                            gratuita</span></h2>
                                    <div class="input text required"><label title="Nombre y apellidos"
                                            for="nombre"><span class="label-text">Nombre y
                                                apellidos</span></label><input type="text" name="nombre"
                                             class="form-control" id="nombre" onKeyPress="return valida(event,this,18,100)"
                                                onBlur="valida2(this,18,100);" ng-model="envios.nombre" aria-required="true"
                                            maxlength="255"></div>
                                    <div class="input email required"><label title="Email" for="email"><span
                                                class="label-text">Email</span></label><input type="email" name="email"
                                             class="form-control" id="email" ng-model="envios.email" onKeyPress="return valida(event,this,5,100)"
                                                onBlur="valida2(this,5,100);" aria-required="true"
                                            maxlength="255"></div>
                                    <div class="input tel"><label title="Teléfono" for="telefono"><span
                                                class="label-text">Teléfono</span></label><input type="tel"
                                            name="telefono" class="form-control" id="telefono" ng-model="envios.telefono" onKeyPress="return valida(event,this,10,100)" maxlength="255"></div>
                                    <div class="input textarea"><label title="Comentarios" for="comentarios"><span
                                                class="label-text">Comentarios</span></label><textarea
                                            name="comentarios" class="form-control" id="comentarios" ng-model="envios.comentarios"
                                            rows="5"></textarea></div>
                                    <div class="input checkbox required"><input type="hidden" name="condiciones-uso"
                                            value="0"><label
                                            title="Autorizo que mis datos personales sean tratados conforme a la política de tratamiento de datos personales del GRUPO ServiPack COLOMBIA SAS y lo indicado en este Aviso de Privacidad. HAZ CLICK AQUÍ"
                                            for="condiciones-uso"><input type="checkbox" ng-model="envios.avisoLegal" name="condiciones-uso"
                                                value="1"  id="condiciones-uso"
                                                aria-required="true"><span class="label-text">Autorizo que mis datos
                                                personales sean tratados conforme a la política de tratamiento de datos
                                                personales del GRUPO ServiPack COLOMBIA SAS y lo indicado en
                                                este Aviso de Privacidad.<a href="/politica-de-privacidad"> HAZ CLICK
                                                    AQUÍ</a></span></label></div>
                                    <div class="input checkbox"><input type="hidden" name="condiciones-envios"
                                            value="0"><label
                                            title="He leído y acepto las las condiciones legales de envíos comerciales"
                                            for="condiciones-envios"><input type="checkbox" ng-model="envios.condiciones" name="condiciones-envios"
                                                value="1" id="condiciones-envios"><span class="label-text">He leído y
                                                acepto las <a href="/condiciones-de-envios-comerciales">las condiciones
                                                    legales</a> de envíos comerciales</span></label></div>
                                    <div class="rte compliance small  ">
                                        <p style="color: #FFFFFF;">.</p>
                                    </div>
                                    <div style="display: none"><input type="text" name="email_homepage" value=""></div>
                                    <div class="btn-group"><button type="button" ng-click="enviarFormulario()">Enviar</button></div>
                                    <div class="message-wrapper"></div>
                                    <div style="display:none;"><input type="hidden" name="_Token[fields]"
                                            autocomplete="off"
                                            value="a78fafb76672fee133ea54935007bfe6582a12d8%3Aentidad_id%7Cform_uuid%7Cpagina_id%7Creferer%7Cweb_entidad_id"><input
                                            type="hidden" name="_Token[unlocked]" autocomplete="off" value=""></div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="moveable-boundary"></div>
                </div>
            </div>

            <div class="form-content form-content-mobile">
                <div class="form">
                <form  method="post" accept-charset="utf-8" class="form-gtm form-c6031baf-990c-49ec-9e3a-cd15d9313b8f"
                    >
                    <div style="display:none;"><input type="hidden" name="_csrfToken" autocomplete="off"
                            value="ck08xlyslefogZg59i9GSah9lahdtr/mCp+Hq/2l72TcGrf3NeRnb7txTXpqUOiGUhGNaD8JxYjlcHF27BIcpg==">
                    </div><input type="hidden" name="form_uuid" value="c6031baf-990c-49ec-9e3a-cd15d9313b8f"><input
                        type="hidden" name="referer"
                        value=""><input type="hidden"
                        name="web_entidad_id"><input type="hidden" name="entidad_id"><input type="hidden"
                        name="pagina_id" value="5372">
                    <h2 class="form-titular titular">Haz tu <span class="text-highlight">consulta gratuita</span></h2>
                    <div class="input text required"><label title="Nombre y apellidos" for="nombre"><span
                                class="label-text">Nombre y apellidos</span></label><input type="text" name="nombre"
                             class="form-control" id="nombre" onKeyPress="return valida(event,this,18,100)"
                                                onBlur="valida2(this,18,100);" ng-model="envios.nombre" aria-required="true" maxlength="255">
                    </div>
                    <div class="input email required"><label title="Email" for="email"><span
                                class="label-text">Email</span></label>
                                <input type="email" name="email"
                                             class="form-control" id="email" ng-model="envios.email" onKeyPress="return valida(event,this,5,100)"
                                                onBlur="valida2(this,5,100);" aria-required="true"
                                            maxlength="255">
                    </div>
                    <div class="input tel"><label title="Teléfono" for="telefono"><span
                                class="label-text">Teléfono</span></label><input type="tel" name="telefono"
                            class="form-control" id="telefono" ng-model="envios.telefono"                                                 onBlur="valida2(this,10,100);" maxlength="255"></div>
                    <div class="input textarea"><label title="Comentarios" for="comentarios"><span
                                class="label-text">Comentarios</span></label><textarea name="comentarios"
                            class="form-control" id="comentarios" ng-model="envios.comentarios" rows="5"></textarea></div>
                    <div class="input checkbox required"><input type="hidden" name="condiciones-uso" value="0"><label
                            title="Autorizo que mis datos personales sean tratados conforme a la política de tratamiento de datos personales del GRUPO ServiPack COLOMBIA SAS y lo indicado en este Aviso de Privacidad. HAZ CLICK AQUÍ"
                            for="condiciones-uso"><input type="checkbox" name="condiciones-uso" value="1"
                                 id="condiciones-uso" ng-model="envios.avisoLegal" aria-required="true"><span
                                class="label-text">Autorizo que mis datos personales sean tratados conforme a la
                                política de tratamiento de datos personales del GRUPO ServiPack COLOMBIA SAS y
                                lo indicado en este Aviso de Privacidad.<a href="/politica-de-privacidad"> HAZ CLICK
                                    AQUÍ</a></span></label></div>
                    <div class="input checkbox"><input type="hidden" name="condiciones-envios" value="0"><label
                            title="He leído y acepto las las condiciones legales de envíos comerciales"
                            for="condiciones-envios"><input type="checkbox" name="condiciones-envios" value="1"
                                id="condiciones-envios" ng-model="envios.condiciones"><span class="label-text">He leído y acepto las <a
                                    href="/condiciones-de-envios-comerciales">las condiciones legales</a> de envíos
                                comerciales</span></label></div>
                    <div class="rte compliance small  ">
                        <p style="color: #FFFFFF;">.</p>
                    </div>
                    <div style="display: none"><input type="text" name="email_homepage" value=""></div>
                    <div class="btn-group"><button type="button" ng-click="enviarFormulario()">Enviar</button></div>
                    <div class="message-wrapper"></div>
                    <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off"
                            value="a78fafb76672fee133ea54935007bfe6582a12d8%3Aentidad_id%7Cform_uuid%7Cpagina_id%7Creferer%7Cweb_entidad_id"><input
                            type="hidden" name="_Token[unlocked]" autocomplete="off" value=""></div>
                </form>
                </div>
            </div>
        </div>
        <div class="block block-22dbcab2-3f5f-4280-a529-78c51f8a3a8c block-texto view-1 block-links-box block-links-box-no-gap rte"
            data-block="22dbcab2-3f5f-4280-a529-78c51f8a3a8c">
            <div class="container">
                <div class="content rte clearfix">
                    <div class="links-box">
                        <div class="box oficina">
                            <p class="titular"><span class="text-highlight">Servicios</span> y <span
                                    class="text-highlight">Tarifas</span></p>
                            <a class="saber-mas-btn" href="/servicios">Saber más</a>
                        </div>

                        <div class="box servicios-tarifas"><img alt="ES"
                                src="{{asset('img\inicio\servicios-tarifas.webp') }}"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-084e1654-a60e-402b-869e-94cb13a1e9fb block-texto view-1 block-links-box rte"
            data-block="084e1654-a60e-402b-869e-94cb13a1e9fb">
            <div class="container">
                <div class="content rte clearfix">
                    <p></p>
                    <div class="links-box">
                        <div class="box oficina">
                            <img src="{{asset('img\icon\oficinas-ES.png') }}" alt="ES">
                            <p class="titular">Oficinas en España</p>
                            <a href="/oficinas" class="saber-mas-btn">Saber más</a>
                        </div>
                        <div class="box faqs">
                            <img src="{{asset('img\inicio\question.png') }}" alt="ES">
                            <p class="titular">FAQs</p>
                            <a href="/faqs" class="saber-mas-btn">Saber más</a>
                        </div>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="block block-80b7f637-c4e0-4b97-84aa-af1ae644805a block-texto view-1 rte"
            data-block="80b7f637-c4e0-4b97-84aa-af1ae644805a">
            <div class="content rte clearfix">
                <div class="block-articulos-prohibidos">
                    <div class="container"><img alt="mycasillero"
                            src="{{asset('img\inicio\articulos-prohibidos-icon.png')}}">
                        <p class="titular">Artículos prohibidos y requisitos</p>

                        <p><a class="saber-mas-btn" href="articulos-prohibidos">Saber más</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-ab7dba8a-cf78-4f6f-ac0b-469aa30458d3 block-texto view-1 rte"
            data-block="ab7dba8a-cf78-4f6f-ac0b-469aa30458d3">
            <div class="content rte clearfix">
                <div class="block-oficinas-footer">
                    <div class="container"><img src="{{ asset('img\inicio\mycasillero-logo.png') }}">

                        <p class="titular">Únete a nuestro <span class="text-highlight">Casillero<br>
                                GRATUITO</span> para realizar tus envíos</p>

                        <p>Comprar desde España estés donde estés y mucho más.</p>
                        <a class="saber-mas-btn" href="">Saber más</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-1e7ece87-0424-4b0e-95cf-4bc2c51b9afe block-seo_tags view-1 space-top-0 space-bottom-0"
            data-block="1e7ece87-0424-4b0e-95cf-4bc2c51b9afe">
            <div class="container">
                <div class="content">
                    <div class="block-seo-tag-head">
                        <h2 class="titular">Paquete a Venezuela desde España con envío tipo...</h2>
                    </div>
                    <div class="block-seo-tag-listado">
                        <a href="/recogida-paquetes-a-domicilio" class="seo-tag-item">A domicilio</a> <a
                            href="/envios-puerta-a-puerta" class="seo-tag-item">Puerta a puerta</a> <a
                            href="/reempaque-envios" class="seo-tag-item">Reempaquetado</a> </div>
                </div>
            </div>
        </div>
    </main>
    <div class="prefooter"></div>

    @include('web.layouts.footer')

</body>


@endsection

@section('ngFile')
<script src="{{ asset('js/web/controladores/envios_expres.js') }}"></script>

@endsection
