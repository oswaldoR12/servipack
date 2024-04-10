<main class="content">
    <div class="block block-0fa446b6-baca-47d0-8b3a-a7ff81fe561c block-heading view-1"
        data-block="0fa446b6-baca-47d0-8b3a-a7ff81fe561c">
        <div class="container">
            <h1 class="titular">Política de cookies</h1>
        </div>
    </div>
    <div class="block block-ecaa636e-b564-4019-95a4-ca360040897a block-cookies_config view-1"
        data-block="ecaa636e-b564-4019-95a4-ca360040897a">
        <div class="container"> </div>
    </div>
    <div class="block block-eb6ba2fe-5ef4-4555-8705-1e727eb2e91a block-texto view-1 max-width rte"
        data-block="eb6ba2fe-5ef4-4555-8705-1e727eb2e91a">
        <div class="container"> </div>
    </div>
</main>
<script>
      function eliminarCookies() {
            // Hacer una solicitud a la API para eliminar cookies
            fetch('/api/eliminar-cookies', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`Error en la solicitud: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                console.log('Cookies eliminadas correctamente:', data);
                location.reload();
            })
            .catch(error => {
                console.error('Error al eliminar cookies:', error.message);
            });
        }

        document.getElementById('eliminarCookiesBtn').addEventListener('click', eliminarCookies);
</script>