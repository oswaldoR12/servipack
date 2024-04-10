@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'envios_expres')

@section('content')




<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    @include('web.layouts.header')

    <main class="content">
        <div class="block block-fd82aa39-1aeb-4536-872e-b29e84f5141f block-heading view-1"
            data-block="fd82aa39-1aeb-4536-872e-b29e84f5141f">
            <div class="container">
                <h1 class="titular">Recogida de paquetes a domicilio de España a Venezuela</h1>
                <p class="subtitular">Recogemos tu envío en la puerta de tu casa</p>
            </div>
        </div>
        <div class="block block-f96ccf64-b794-4d95-add1-402b88e8e241 block-landing view-1"
            data-block="f96ccf64-b794-4d95-add1-402b88e8e241">
            <div class="container">
                <div class="landing-info row">
                    <div class="col">
                        <div class="landing-info-img rte"><img
                                src="{{asset('img\inicio\params_landing_imagen_desktop.jpg') }}"
                                class="landing-info-img-desktop" title=""
                                alt=""
                                data-src="{{asset('img\inicio\params_landing_imagen_desktop.jpg') }}" loading="lazy">
                        </div>
                        <div class="landing-info-texto rte">
                            <h3>Envíos a <span style="color:#e74c3c;">Venezuela</span>, Colombia y R. Dominicana con
                                recogida a domicilio</h3>

                            <p>&nbsp;</p>

                            <p>En ServiPack hacemos recogidas a domicilio en España para tus envíos a
                                Venezuela, Colombia y R. Dominicana.</p>

                            <p>Recogidas en casa <strong>gratis</strong> en Madrid, Valencia, Barcelona y Tenerife.</p>

                            <p>&nbsp;</p>

                            <h4 style="margin-left: 40px;"><strong>&gt; ¿Cómo pedir una recogida en casa desde cualquier
                                    ciudad de España?</strong></h4>

                            <p>&nbsp;</p>

                            <p>1. Lo primero será tener a mano el peso y medidas (aproximados) de tu caja.&nbsp;</p>

                            <p>2. Después solo debes llamar o escribir vía WhatsApp y contactar con nosotros para
                                concretar los detalles de la recogida y facilitar la siguiente información:</p>

                            <ul style="margin-left: 40px;">
                                <li aria-level="1">Nombre</li>
                                <li aria-level="1">Dirección</li>
                                <li aria-level="1">Teléfono de contacto</li>
                                <li aria-level="1">Peso y medidas</li>
                            </ul>

                            <p>¡Así de fácil es solicitar una recogida a domicilio de ServiPack!</p>

                            <h4 style="margin-left: 40px;">&gt;Si quieres <strong>hacer compras en Venezuela</strong> o
                                cualquiera de nuestros destinos también te puede interesar:</h4>

                            <p>&nbsp;</p>

                            <ul>
                                <li><u>¿Qué es un Casillero internacional?</u> Compra en España, China o cualquier parte
                                    del mundo con nuestro Casillero Internacional</li>
                                <li><u>Servicio de recogida en tienda</u></li>
                            </ul>
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
        <div class="block block-c5bee311-7121-4ac6-b882-98caeb21c2a0 block-texto view-1 block-links-box block-links-box-no-gap rte"
            data-block="c5bee311-7121-4ac6-b882-98caeb21c2a0">
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
        <div class="block block-ebea6453-d78f-47b5-bef4-2d8bb443b3c5 block-texto view-1 block-links-box rte"
            data-block="ebea6453-d78f-47b5-bef4-2d8bb443b3c5">
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
        <div class="block block-3a6b99d6-0e9d-4762-87fb-ff2a1a9cd83c block-texto view-1 rte"
            data-block="3a6b99d6-0e9d-4762-87fb-ff2a1a9cd83c">
            <div class="content rte clearfix">
                <div class="block-articulos-prohibidos">
                    <div class="container"><img alt="mycasillero"
                            src="{{asset('img\inicio\articulos-prohibidos-icon.png') }}">
                        <p class="titular">Artículos prohibidos y requisitos</p>

                        <p><a class="saber-mas-btn" href="articulos-prohibidos">Saber más</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="block block-3061976d-aff7-4e1f-8b6e-3b11c8f2ebbd block-texto view-1 rte"
            data-block="3061976d-aff7-4e1f-8b6e-3b11c8f2ebbd">
            <div class="content rte clearfix">
                <div class="block-oficinas-footer">
                    <div class="container"><img alt="mycasillero" src="{{asset('img\inicio\mycasillero-logo.png') }}">
                        <p class="titular">Únete a nuestro <span class="text-highlight">Casillero<br>
                                GRATUITO</span> para realizar tus envíos</p>

                        <p>Comprar desde España estés donde estés y mucho más.</p>
                        <a class="saber-mas-btn" href="">Saber
                            más</a>
                    </div>f
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
