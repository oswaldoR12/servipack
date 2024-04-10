<div class="ad-hoc-home-2-blocks-block calculadora">
                            <div class="titular-subtitular-wrapper">
                                <p class="titular">Calcula tu <span class="text-highlight">envío</span></p>
                                <p class="subtitular">Dime a dónde envías y te diré por cuánto</p>
                            </div>
                            <div class="form">
                                <form method="post" accept-charset="utf-8" id="calculadora-envio" action="/">
                                    <div style="display:none;"><input type="hidden" name="_csrfToken" autocomplete="off"
                                            value="6qphcdejCG2frGMl1kxx6HXGRzQVKI7vsF0N4U4fGA7hLYapA+NsnZqqUoI8kaH0w4ZRcT3LJQqXLSlwqK+EVw==">
                                    </div>
                                    <div class="input select required"><label
                                            for="calculadora-origen">Origen</label><select name="calculadora-origen"
                                            id="calculadora-origen" class="form-control" required="required">
                                            <option value="0" disabled="disabled">Seleccione</option>
                                            <option value="1">Bogotá</option>
                                        </select></div>
                                    <div class="input select required"><label
                                            for="calculadora-destino">Destino</label><select name="calculadora-"
                                            id="calculadora-destino" class="form-control">
                                            <option value="1">Venezuela</option>
                                        </select></div><label class="form-medidas-label" for="">Medidas</label>
                                    <div class="clearfix wrapper form-medidas">
                                        <div class="input text required"><input type="text" name="alto" id="alto"
                                                class="form-control" placeholder="Alto" maxlength="8" minlength="1">
                                        </div>
                                        <div class="input text required"><input type="text" name="ancho" id="ancho"
                                                class="form-control" placeholder="Ancho" maxlength="8" minlength="1">
                                        </div>
                                        <div class="input text required"><input type="text" name="largo" id="largo"
                                                class="form-control" placeholder="Largo" maxlength="8" minlength="1">
                                        </div>
                                        <div class="input text required"><input type="text" name="peso" id="peso"
                                                class="form-control" placeholder="Peso" maxlength="8" minlength="1">
                                        </div>
                                    </div>
                                    <div class="clearfix wrapper"><input type="hidden" name="tipo_envio" value=""><label
                                            for="tipoEnvio-a"><input type="radio" name="tipo_envio" value="A"
                                                id="tipoEnvio-a">Aéreo</label><label for="tipoEnvio-t"><input
                                                type="radio" name="tipo_envio" value="T"
                                                id="tipoEnvio-t">Terrestre</label></div>
                                    <p class="alert">* Las medidas siempre deben ser expresadas en centímetros y el peso
                                        en kilogramos</p><button type="submit" title="Calcular envío"
                                        id="btn-calculadora">Calcular envío</button>
                                    <div style="display:none;"><input type="hidden" name="_Token[fields]"
                                            autocomplete="off"
                                            value="7ef3f34eed27065d9db63f6ee598bae5fc7c9d47%3A"><input type="hidden"
                                            name="_Token[unlocked]" autocomplete="off" value=""></div>
                                </form>
                            </div>
                            <div class="calculadora-result">
                                <p class="calculadora-result-text"></p>
                            </div>
                        </div>