<main class="content">
    <div class="block block-92e668fa-5a6c-40e5-8f22-ed1977f30686 block-heading view-1"
        data-block="92e668fa-5a6c-40e5-8f22-ed1977f30686">
        <div class="container">
            <h1 class="titular">Contacto</h1>
        </div>
    </div>
    <div class="block block-f931fd1c-93bd-440a-b327-d846d078e562 block-templates-servicios-expresos-contacto"
        data-block="f931fd1c-93bd-440a-b327-d846d078e562">
        <div class="bloque-contacto">
            <div class="container">
                <div class="bloque-contacto-content">
                    <div class="bloque-contacto-content-contacto">
                        <div class="container">
                            <div class="form">
                            <form id="formularioContacto" method="post" accept-charset="utf-8"
                                    class="form-gtm form-6159bc06-4e39-4df4-a1d4-63516d708bed"
                                    action="/frontend/frontend-ajax/contact-form/6159bc06-4e39-4df4-a1d4-63516d708bed">
                                    <div style="display:none;"><input type="hidden" name="_csrfToken" autocomplete="off"
                                            value="bt2cmicxYREW39ZuxWdhDzV9xObrDxIHlBtXvm71uVbJncS01YC8D+ASABHCzsml2+3Oie21nJwIWVWEDEhjvw==">
                                    </div><input type="hidden" name="form_uuid"
                                        value="6159bc06-4e39-4df4-a1d4-63516d708bed"><input type="hidden" name="referer"
                                        value=""><input type="hidden"
                                        name="web_entidad_id"><input type="hidden" name="entidad_id"><input
                                        type="hidden" name="pagina_id" value="5368">
                                    <h2 class="form-titular titular"><span class="text-highlight">Formulario</span>
                                        de contacto</h2>
                                    <div class="clearfix wrapper">
                                        <div class="input text required"><label title="Nombre y apellidos"
                                                for="nombre"><span class="label-text">Nombre y
                                                    apellidos</span></label><input type="text"
                                                onKeyPress="return valida(event,this,18,100)"
                                                onBlur="valida2(this,18,100);" ng-model="contactanos.nombre"
                                                name="nombre" required="required" class="form-control" id="nombre"
                                                aria-required="true" maxlength="255"></div>
                                        <div class="input email required"><label title="Email" for="email"><span
                                                    class="label-text">Email</span></label><input type="email"
                                                name="email" required="required" class="form-control" id="email"
                                                onKeyPress="return valida(event,this,5,100)"
                                                onBlur="valida2(this,5,100);" ng-model="contactanos.email"
                                                aria-required="true" maxlength="255"></div>
                                    </div>
                                    <div class="clearfix wrapper1">
                                        <div class="input tel"><label title="Teléfono" for="telefono"><span
                                                    class="label-text">Teléfono</span></label><input type="tel"
                                                name="telefono" class="form-control" id="telefono"
                                                onKeyPress="return valida(event,this,10,100)"
                                                onBlur="valida2(this,10,100);" ng-model="contactanos.telefono"
                                                maxlength="255">
                                        </div>
                                        <div class="input select"><label title="Asunto" for="asunto"><span
                                                    class="label-text">Asunto</span></label><select name="asunto"
                                                class="personalizado form-control" id="asunto"
                                                ng-model="contactanos.asunto">
                                                <option value="">Seleccionar...</option>
                                                <option value="solicitar-info-para-envio">Solicitar información para hacer un envío</option>
                                                <option value="duda-sobre-envio">Duda sobre un envío en curso </option>
                                                <option value="conocer-salidas">Conocer salidas del mes y fechas de cierre</option>
                                                <option value="solicitar-recogida">Solicitar recogida</option>
                                                <option value="colaboracion-fines-solidarios">Colaboración con fines solidarios</option>
                                                <option value="quiero-trabajar">Quiero trabajar en ServiPack</option>
                                            </select></div>
                                    </div>
                                    <div class="input textarea"><label title="Comentarios" for="comentarios"><span
                                                class="label-text">Comentarios</span></label><textarea
                                            name="comentarios" class="form-control" id="comentarios"
                                            
                                            ng-model="contactanos.comentarios" rows="5"></textarea></div>
                                    <div class="input checkbox required"><input type="hidden" name="condiciones-uso"
                                            value="0"><label
                                            title="Autorizo que mis datos personales sean tratados conforme a la política de tratamiento de datos personales y lo indicado en este Aviso de Privacidad. HAZ CLICK AQUÍ"
                                            for="condiciones-uso"><input type="checkbox" name="condiciones-uso"
                                                value="1" required="required" id="condiciones-uso"
                                                ng-model="contactanos.condicionesUso" aria-required="true"><span
                                                class="label-text">Autorizo que mis datos
                                                personales sean tratados conforme a la política de tratamiento de
                                                datos personales y lo
                                                indicado en este Aviso de Privacidad.<a href="/politica-de-privacidad">
                                                    HAZ CLICK
                                                    AQUÍ</a></span></label></div>
                                    <div class="input checkbox"><input type="hidden" name="condiciones-envios"
                                            value="0"><label
                                            title="He leído y acepto las las condiciones legales de envíos comerciales"
                                            for="condiciones-envios"><input type="checkbox" name="condiciones-envios"
                                                value="1" id="condiciones-envios"
                                                ng-model="contactanos.condicionesEnvios"><span class="label-text">He
                                                leído y
                                                acepto las <a href="/condiciones-de-envios-comerciales">las condiciones
                                                    legales</a> de envíos comerciales</span></label></div><input
                                        type="hidden" name="instalacion" class="form-control" id="instalacion"
                                        value="bogota">
                                    <div class="rte compliance small  ">
                                        <p style="color: #FFFFFF;">.</p>
                                    </div>
                                    <div style="display: none"><input type="text" name="email_homepage" value="">
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" ng-click="enviarFormulario()">Enviar</button>
                                    </div>
                                    <div class="message-wrapper"></div>
                                    <div style="display:none;"><input type="hidden" name="_Token[fields]"
                                            autocomplete="off"
                                            value="14736c943c5a4c642b07f71bda3e0fb1d415736a%3Aentidad_id%7Cform_uuid%7Cinstalacion%7Cpagina_id%7Creferer%7Cweb_entidad_id"><input
                                            type="hidden" name="_Token[unlocked]" autocomplete="off" value=""></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="bloque-contacto-content-info">
                        <div class="bloque-contacto-content-info-icon"><i class="fa-light fa-envelopes-bulk"></i></div>

                        <div class="bloque-contacto-content-info-title">
                            <p class="titular"><span class="text-highlight">Información</span> de contacto</p>
                        </div>

                        <div class="bloque contacto-content-info-select">
                            <div class="input select required"><label for="agencia" title="Agencia"><span
                                        class="label-text">Seleccione una agencia</span></label> <select
                                    class="personalizado form-control" id="agencia" name="agencia">
                                    <option value="caracas">Caracas</option>
                                </select></div>
                        </div>

                        <div class="bloque-contacto-content-info-response">
                            <div class="bloque-contacto-content-info-response-ciudad">
                                <div class="titular text-highlight" id="info-response-ciudad">Caracas</div>
                            </div>

                            <div class="bloque-contacto-content-info-response-direccion">
                                <div id="info-response-direccion"></div>
                            </div>

                            <div class="bloque-contacto-content-info-response-telefono">
                                <div id="info-response-telefono"><a href="tel:" target="_blank"></a></div>
                            </div>

                            <div class="bloque-contacto-content-info-response-email">
                                <div id="info-response-email"><a href="mailto:"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="instalaciones-data" data-pais="VE" data-instalaciones="">
        </div>
    </div>
</main>
