<footer class="footer">
    <div class="container">
        

        @if($pais->slug == 'colombia')
            @include('web.layouts.footer-pais.footer-co')
        @endif
        @if($pais->slug == 'usa')
            @include('web.layouts.footer-pais.footer-us')
        @endif

        @if($pais->slug == 'ecuador')
            @include('web.layouts.footer-pais.footer-ec')
        @endif
        @if($pais->slug == 'europa')
            @include('web.layouts.footer-pais.footer-eu')
        @endif
        @if($pais->slug == 'venezuela')
            @include('web.layouts.footer-pais.footer-ve')
        @endif
        
        
        <p class="footer-logos logos">
            <a href="" class="logo"><img
                    src=""
                    title="" alt=""
                    class="web" data-src=""
                    loading="lazy"></a> </p>
        @if($pais->slug == 'colombia')
        <ul class="social">
            <li><a href="" class="facebook"
                    title="Ir a Facebook" target="_blank"><span>Facebook</span></a>
            </li>
            <li><a href="" class="instagram" title="Ir a Instagram"
                    target="_blank"><span>Instagram</span></a>
            </li>
        </ul>

        @endif
        @if($pais->slug == 'usa')
        <ul class="social">
            <li><a href="" class="facebook"
                    title="Ir a Facebook" target="_blank"><span>Facebook</span></a>
            </li>
            <li><a href="" class="instagram" title="Ir a Instagram"
                    target="_blank"><span>Instagram</span></a>
            </li>
        </ul>
        @endif
        @if($pais->slug == 'ecuador')
        <ul class="social">
            <li><a href="" class="facebook"
                    title="Ir a Facebook" target="_blank"><span>Facebook</span></a>
            </li>
            <li><a href="" class="instagram" title="Ir a Instagram"
                    target="_blank"><span>Instagram</span></a>
            </li>
        </ul>

        @endif
        @if($pais->slug == 'europa')
        <ul class="social">
            <li><a href="" class="facebook"
                    title="Ir a Facebook" target="_blank"><span>Facebook</span></a>
            </li>
            <li><a href="" class="instagram" title="Ir a Instagram"
                    target="_blank"><span>Instagram</span></a>
            </li>
        </ul>

        @endif
        @if($pais->slug == 'venezuela')
        <ul class="social">
            <li><a href="" class="facebook"
                    title="Ir a Facebook" target="_blank"><span>Facebook</span></a>
            </li>
            <li><a href="" class="instagram" title="Ir a Instagram"
                    target="_blank"><span>Instagram</span></a>
            </li>
        </ul>

        @endif
        <p></p>

        <div class="footer-legal">
            <p>©  2024 - Todos los derechos reservados</p>
            <!-- <ul class="clearfix menu-level-0">
                <li class="level-0 menu-elemento-fa09d7ed-ecd1-49f5-8870-99c17f34237b"><a href="/aviso-legal"
                        target="_self">Aviso legal</a></li>
                <li class="level-0 menu-elemento-c2ca3e8b-1225-4cc7-be4c-474ae5774b84"><a href="/politica-de-privacidad"
                        target="_self">Política de privacidad</a></li>
                <li class="level-0 menu-elemento-ba1691d5-4744-4096-bde2-fa49f9668707"><a href="/politica-de-cookies"
                        target="_self">Política de cookies</a></li>
            </ul> -->
        </div>
    </div>

   
<div class="modal fade" id="cookies-config-modal" tabindex="-1" role="dialog"
    aria-labelledby="cookies-config-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content cookies-text">
            <div class="modal-header">
                <h3 class="modal-title text-black-titular text-black-"  id="cookies-config-modal-label">Configuración de la política de
                    cookies</h3>
                <!-- <input type="checkbox" name="cookies_consent_1" value="1" class="toggle" required="required" id="cookies-consent-1"
                aria-required="true" @if(request()->cookie('cookies_consent_1')) checked @endif> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <p>El siguiente panel te permite personalizar tus preferencias de consentimiento para las cookies
                    que utiliza el sitio web, ya sean empleadas directamente por nosotros o por un tercero. Para
                    obtener más información, comprueba la descripción de cada categoría o consulta nuestra página de
                    <a href="/politica-de-cookies">política de cookies</a>.<br> Puedes revisar y modificar tus
                    preferencias en cualquier momento.</p>
                <p class="text-actions">
                    <a href="#" class="btn btn-sm accept" data-action="accept-all"
                        onclick="aceptarCookies()">Aceptar</a> <a href="#" class="btn btn-sm deny"
                        data-action="deny-all">Rechazar todo</a> </p>


                <div style="display:none;"><input type="hidden" name="_csrfToken" autocomplete="off"
                        value="6qphcdejCG2frGMl1kxx6HXGRzQVKI7vsF0N4U4fGA7hLYapA+NsnZqqUoI8kaH0w4ZRcT3LJQqXLSlwqK+EVw==">
                </div><input type="hidden" name="url" value="/">
                <div class="cookies_consent">
                    <div class="input checkbox required"><input type="hidden" name="cookies_consent_1" value="0"><label
                            title="Cookies técnicas y estrictamente necesarias" for="cookies-consent-1">

                            <input type="checkbox" name="cookies_consent_1"
                                {{ $cookiesAceptadas['cookies_consent_1'] == 1 ? 'checked' : '' }} value="1"
                                class="toggle" required="required" id="cookies-consent-1" aria-required="true">


                            <span>Cookies técnicas y estrictamente
                                necesarias</span></label></div>
                    <p><small>Estas cookies u otros identificadores se utilizan para actividades que son
                            estrictamente necesarias para gestionar o prestar el servicio que has
                            solicitado.</small></p>
                </div>
                <div class="cookies_consent">
                    <div class="input checkbox"><input type="hidden" name="cookies_consent_2" value="0"><label
                            title="Mejora de experiencia y personalización" for="cookies-consent-2"><input
                                {{ $cookiesAceptadas['cookies_consent_2'] == 1 ? 'checked' : '' }} type="checkbox"
                                name="cookies_consent_2" value="1" class="toggle" id="cookies-consent-2"><span>Mejora de
                                experiencia y
                                personalización</span></label></div>
                    <p><small>Estas cookies u otros identificadores nos ayudan a proporcionarte una experiencia
                            de usuario personalizada mediante la mejora de la calidad de tus opciones de gestión
                            de preferencias y permitiendo la interacción con redes y plataformas
                            externas.</small></p>
                </div>
                <div class="cookies_consent">
                    <div class="input checkbox"><input type="hidden" name="cookies_consent_3" value="0"><label
                            title="Medición y análisis" for="cookies-consent-3"><input type="checkbox"
                                {{ $cookiesAceptadas['cookies_consent_3'] == 1 ? 'checked' : '' }}
                                name="cookies_consent_3" value="1" class="toggle" id="cookies-consent-3"><span>Medición
                                y análisis</span></label></div>
                    <p><small>Estas cookies u otros identificadores nos permiten medir el tráfico y analizar tu
                            comportamiento con el fin de mejorar nuestro servicio.</small></p>
                </div>
                <div class="cookies_consent">
                    <div class="input checkbox"><input type="hidden" name="cookies_consent_4" value="0"><label
                            title="Segmentación y publicidad" for="cookies-consent-4"><input type="checkbox"
                                {{ $cookiesAceptadas['cookies_consent_4'] == 1 ? 'checked' : '' }}
                                name="cookies_consent_4" value="1" class="toggle"
                                id="cookies-consent-4"><span>Segmentación y publicidad</span></label></div>
                    <p><small>Estas cookies u otros identificadores nos permiten hacerte llegar contenidos
                            promocionales personalizados basados en tu comportamiento y gestionar, facilitar y
                            seguir anuncios.</small></p>
                </div>
                <div class="btn-group">
                </div>
                <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off"
                        value="4c46d219a57b4020834a934fdb4e7b46791c1f85%3Aurl"><input type="hidden"
                        name="_Token[unlocked]" autocomplete="off" value=""></div>

            </div>
        </div>
    </div>
</div>
<div class="loading">
    <div class="loading-spinner"></div>
</div>

<input type="hidden" class="is_mobile">





<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Consultar si el usuario aceptó todas las cookies antes, para ocultar el modal
        $.ajax({
            url: `/api/aceptar-cookies/consultar`,
            dataType: "JSON",
            success: function (success_data) {
                if (success_data === true) {
                    // Todas las cookies han sido aceptadas, ocultar el modal
                    $("#cookies-config-modal").modal("hide");
                    $(".cookies-config-aviso").prop("hidden", true);

                }
            },
            error: function (error_data) {
                // manejar el error si es necesario
            },
        });
    }); // Añadido el cierre del método document.addEventListener



    function aceptarCookies() {



        // Verificar que el checkbox obligatorio esté marcado
        var checkboxObligatorio = $('#cookies-consent-1');

        if (!checkboxObligatorio.prop('checked')) {
            // Mostrar un mensaje de error o tomar alguna acción si el checkbox no está marcado
            Swal.fire({
                icon: 'info',
                title: 'Alerta',
                text: "Por favor, acepta las cookies técnicas y estrictamente necesarias.",
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                customClass: {
                    popup: 'swal-custom-class', // Agrega una clase personalizada
                },
            });
            return;
        }

        // Obtener valores de los checkboxes marcados
        var datos = $('input[type=checkbox]:checked').serializeArray();

        // Enviar datos al servidor
        $.ajax({
            url: '/api/aceptar-cookies',
            method: 'POST',
            data: {
                cookies: datos
            },
            dataType: 'json',
            success: function (success_data) {
                if (success_data === true) {
                    $("#cookies-config-modal").modal("hide");

                    $(".cookies-config-aviso").prop("hidden", true);
                    location.reload();

                }
            },
            error: function (error_data) {
                mostrarAlerta("Ha ocurrido un error", "danger", error_data);
            }
        });
    }



    function mostrarAlerta(message, status, log) {
        if (log != null) console.log(log);
        console.log("asd")
        $("main").append(
            `<div id="alert-main" class="alert alert-${status} alert-dismissible fixed-top" role="alert">
                ${message}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>`
        );
        $("#alert-main").alert();
    }

</script>
