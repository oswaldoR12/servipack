<div class="trabaja-con-nosotros-content-formulario">
        <div class="container">
            <div class="form">
            <form id="formCorporativo" method="post" accept-charset="utf-8"
                class="form-gtm form-c31c4bc1-fdc2-4389-ad38-df7121c66b05">
                <div style="display:none;"><input type="hidden" name="_csrfToken" autocomplete="off"
                        value="9kp2Ff+JHXYbYW09Y1RD/kvimUvnKVxw1BHwrKoafBi7TXTYv5CCUcfRpFat6Vb6bPpy1UquumUjlDK8PLPBAQ==">
                </div><input type="hidden" name="form_uuid" value="c31c4bc1-fdc2-4389-ad38-df7121c66b05"><input
                    type="hidden" name="referer"
                    value=""><input type="hidden"
                    name="web_entidad_id"><input type="hidden" name="entidad_id"><input type="hidden" name="pagina_id"
                    value="5369">
                <h2 class="form-titular titular">Corporativos</h2>
                <div class="text info info-1">
                    <p><span class="label-text">Si tienes una empresa con necesidad de
                            transportar mercancía internacionalmente, somos tu aliado.
                            Aprovecha nuestras tarifas reducidas y atención personalizada de
                            nuestro equipo de operaciones, para sacar la mayor rentabilidad
                            a tu logística. </span></p>
                </div>
                <div class="text info info-2">
                    <p><span class="label-text">Además, te ofrecemos distribución nacional
                            en todos nuestros destinos.</span></p>
                </div>
                <div class="input email required"><label title="Email" for="email"><span
                            class="label-text">Email</span></label><input type="email" name="email" class="form-control"
                        id="email" ng-model="corporativos.email" onKeyPress="return valida(event,this,5,100)"
                        onBlur="valida2(this,5,100);" aria-required="true" maxlength="255"></div>
                <div class="input tel required"><label title="Teléfono" for="telefono"><span
                            class="label-text">Teléfono</span></label><input type="tel" name="telefono"
                        class="form-control" id="telefono" ng-model="corporativos.telefono"
                        onKeyPress="return valida(event,this,10,100)" onBlur="valida2(this,10,100);"
                        aria-required="true" maxlength="255"></div>
                <div class="input select"><label title="¿Qué información te interesa?"
                        for="que-informacion-te-interesa"><span class="label-text">¿Qué
                            información te interesa?</span></label>
                            <select name="que-informacion-te-interesa" class="personalizado form-control" id="que-informacion-te-interesa"
    ng-model="corporativos.asunto" ng-change="seleccionarAsunto()">
    <option value="">Seleccionar...</option>
    <option value="envios-colombia">Envíos a Colombia</option>
    <option value="envios-ecuador">Envío a Ecuador</option>
    <option value="envios-españa">Envíos a España</option>
    <option value="envios-usa">Envíos a Estados Unidos</option>
    <option value="envios-venezuela">Envíos a Venezuela</option>
    <option value="todas-rutas">Todas las rutas</option>
</select>



                </div>

                <div class="input checkbox required"><input type="hidden" name="condiciones-uso-legales"
                        value="0"><label
                        title="He leído y acepto el aviso legal y privacidad de uso de mis datos personales"
                        for="condiciones-uso-legales"><input type="checkbox" ng-model="corporativos.avisoLegal"
                            name="condiciones-uso-legales" value="1" required="required" aria-required="true"><span
                            class="label-text">He leído y acepto el <a href="/politica-de-privacidad">aviso legal y
                                privacidad de uso</a> de mis datos personales</span></label></div>
                <div class="input checkbox"><input type="hidden" name="condiciones-envios-comerciales" value="0"><label
                        title="He leído y acepto las las condiciones legales de envíos comerciales"
                        for="condiciones-envios-comerciales"><input type="checkbox"
                            name="condiciones-envios-comerciales" value="1" ng-model="corporativos.condiciones"><span
                            class="label-text">He
                            leído y acepto las <a href="/condiciones-de-envios-comerciales">las condiciones
                                legales</a> de envíos comerciales</span></label></div>
                <div class="rte compliance small  ">
                    <p style="color: #FFFFFF;">.</p>
                </div>
                <div style="display: none"><input type="text" name="email_homepage" value=""></div>
                <div class="btn-group"><button type="button" ng-click="enviarCorporativo()">Solicitar más
                        información</button></div>
                <div class="message-wrapper"></div>
                <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off"
                        value="586bf479c39df9856e34ed31cb9712777a265904%3Aentidad_id%7Cform_uuid%7Cpagina_id%7Creferer%7Cweb_entidad_id"><input
                        type="hidden" name="_Token[unlocked]" autocomplete="off" value="">
                </div>
            </form>
            </div>
        </div>
    </div>