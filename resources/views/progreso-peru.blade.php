@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'enprogreso')

@section('content')

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <header class="header landing-header enprogreso" style="position: fixed">
        <h1>
            <a href="/" class="logo"><img
                    src="{"
                    title="" alt=""
                    class="web"
                    data-src="{"
                    loading="lazy"></a> </h1>
    </header>

    <main class="content">
        <div class="block block-bae6dbf9-5dda-41ed-bc67-ef240b19c745 block-form view-1 form-contacto-grupo max-width"
            data-block="bae6dbf9-5dda-41ed-bc67-ef240b19c745">
            <div class="container">
                <div class="form">
                    <!-- <form method="post" accept-charset="utf-8"
                        class="form-gtm form-ee76b30d-4559-40b5-96f1-7ba2eb9da800"
                        action="/frontend/frontend-ajax/contact-form/ee76b30d-4559-40b5-96f1-7ba2eb9da800"> -->
                        <div style="display:none;"><input type="hidden" name="_csrfToken" autocomplete="off"
                                value="wDMzLhDuGwnOPjHe/Jwg450Duj4ZUrRpcwQcD7AZVxunWRAyMjaf+4V32qxG2ABMmeh0Qu9q4e6SI9Q4fCPtCg==">
                        </div><input type="hidden" name="form_uuid" value="ee76b30d-4559-40b5-96f1-7ba2eb9da800"><input
                            type="hidden" name="referer"
                            value=""><input type="hidden"
                            name="web_entidad_id"><input type="hidden" name="entidad_id"><input type="hidden"
                            name="pagina_id" value="7791">
                        <h2 class="form-titular titular"><span class="text-highlight">Próximamente Perú</span> </h2>
                        <p class="form-subtitular subtitular">Estamos terminando los detalles para poder activar rutas
                            con la Perú. Deja tus datos si estás interesado en recibir información
                            cuando abramos.</p>
                            <div class="input email required"><label title="Email" for="email"><span
                                    class="label-text">Email</span></label><input type="email" name="email" ng-model="progreso.email" onKeyPress="return valida(event,this,5,100)"
                                                onBlur="valida2(this,5,100);"
                                required="required" class="form-control" id="email" aria-required="true"
                                maxlength="255">
                                <input  hidden id="pais" type="text" ng-model="progreso.pais" value="Perú">
                        </div>
                        <div class="input checkbox required"><input type="hidden" name="condiciones-uso"
                                value="0"><label
                                title="He leído y acepto el aviso legal y privacidad de uso de mis datos personales"
                                for="condiciones-uso"><input type="checkbox"  ng-model="progreso.avisoLegal" name="condiciones-uso" value="1"
                                    required="required" id="condiciones-uso" aria-required="true"><span
                                    class="label-text">He leído y acepto el <a href="/politica-de-privacidad">aviso
                                        legal y privacidad de uso</a> de mis datos personales</span></label></div>
                        <div class="input checkbox"><input type="hidden" name="condiciones-envios" value="0"><label
                                title="He leído y acepto las las condiciones legales de envíos comerciales"
                                for="condiciones-envios"><input type="checkbox" ng-model="progreso.condiciones" name="condiciones-envios" value="1"
                                    id="condiciones-envios"><span class="label-text">He leído y acepto las <a
                                        href="/condiciones-de-envios-comerciales">las condiciones legales</a> de envíos
                                    comerciales</span></label></div>
                        <div style="display: none"><input type="text" name="email_homepage" value=""></div>
                        <div class="btn-group"><button type="button" ng-click="enviarFormulario()">Enviar</button></div>
                        <div class="message-wrapper"></div>
                        <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off"
                                value="6e19fa4346e05a00c2ef34b22dbbf441c09f4b28%3Aentidad_id%7Cform_uuid%7Cpagina_id%7Creferer%7Cweb_entidad_id"><input
                                type="hidden" name="_Token[unlocked]" autocomplete="off" value=""></div>
                    <!-- </form> -->
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
    <div class="loading">
        <div class="loading-spinner"></div>
    </div>
</body>

@section('ngFile')
<script src="{{ asset('js/web/controladores/enprogreso.js') }}"></script>
@endsection