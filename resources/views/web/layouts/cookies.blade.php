@if($cookiesAceptadas['cookies_consent_1'] != 1)
    
<div class="cookies-config-aviso 20511315">
    <div class="cookies-config-aviso-content">
        <div class="cookies-config-aviso-content-text">
            <p>
            {{$cookiesAceptadas['cookies_consent_1']}}  utiliza cookies propias y de terceros para recordar tus
                preferencias y optimizar la experiencia de usuario. Para obtener más información lee nuestra <a
                    href="/politica-de-cookies">política de cookies</a>.<br> Al pulsar en “Aceptar” aceptas el uso de
                las diferentes cokies que utiliza el sitio web. Puedes configurar o denegar el uso de las cookies en la
                <a href="#" data-toggle="modal" data-target="#cookies-config-modal">configuración de la política de
                    cookies</a>. </p>
        </div>
        <div class="cookies-config-aviso-content-actions">
            <a href="#" class="config" data-toggle="modal" data-target="#cookies-config-modal">Configuración de
                cookies</a>
<input type="hidden" name="_method" value="POST"><input
                    type="hidden" name="_csrfToken" autocomplete="off"
                    value="0twc+ElrbrTATPH8zxU4wERKl2eVBMboU8M9SZ1pduSX+tij3vessRUPdwGy90xc9L2ll/Mzcb1IfzUbiYrblw=="><input
                    type="hidden" name="cookies_consent_0" value="X"><input type="hidden" name="url" value="/">
                <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off"
                        value="52a5d990f83f63111381eec3df4f7de06288d29c%3Acookies_consent_0%7Curl"><input type="hidden"
                        name="_Token[unlocked]" autocomplete="off" value=""></div>
            <a href="#" class="reject"
                onclick="document.post_6580663664dfc535772314.submit(); event.returnValue = false; return false;" id="rechazar_bt_id">Rechazar</a>
            <input type="hidden" name="_method" value="POST"><input
                    type="hidden" name="_csrfToken" autocomplete="off"
                    value="0twc+ElrbrTATPH8zxU4wERKl2eVBMboU8M9SZ1pduSX+tij3vessRUPdwGy90xc9L2ll/Mzcb1IfzUbiYrblw=="><input
                    type="hidden" name="cookies_consent_0" value="A"><input type="hidden" name="url" value="/">
                <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off"
                        value="7d86185578c394f461b84b01682e4d20496d7daf%3Acookies_consent_0%7Curl"><input type="hidden"
                        name="_Token[unlocked]" autocomplete="off" value=""></div>
            <a href="#" class="accept" id="acceptar_bt_id"
                onclick="document.post_6580663664ea3106774296.submit(); event.returnValue = false; return false;">Aceptar</a>
        </div>
    </div>
</div>
@endif


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
                // Ocultar el elemento con la clase cookies-config-aviso-20511315
                $(".cookies-config-aviso").prop("hidden", true);
            } 
        },
        error: function (error_data) {
            // manejar el error si es necesario
        },
    });

    // Agregar evento de clic al botón "Aceptar"
    $("#acceptar_bt_id").on("click", function () {
        // Configurar y aceptar todas las cookies
        $.ajax({
            url: `/api/aceptar-cookies`,
            method: 'POST',
            data: {
                cookies: [
                    { name: 'cookies_consent_1', value: '1' },
                    { name: 'cookies_consent_2', value: '1' },
                    { name: 'cookies_consent_3', value: '1' },
                    { name: 'cookies_consent_4', value: '1' },
                ]
            },
            dataType: 'json',
            success: function (success_data) {
                if (success_data === true) {
                    // Todas las cookies han sido aceptadas, ocultar el modal
                    $("#cookies-config-modal").modal("hide");
                    // Ocultar el elemento con la clase cookies-config-aviso
                    $(".cookies-config-aviso").prop("hidden", true);
                }
            },
            error: function (error_data) {
                // manejar el error si es necesario
            }
        });
    });

    
    $("#rechazar_bt_id").on("click", function () {
        // Configurar y aceptar todas las cookies
        $("#cookies-config-modal").modal("hide");
        // Ocultar el elemento con la clase cookies-config-aviso
        $(".cookies-config-aviso").prop("hidden", true);
    });
});
</script>
