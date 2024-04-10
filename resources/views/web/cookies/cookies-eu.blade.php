s<main class="content">
    <div class="block block-2f42edb3-ba01-48bf-be77-95146ce8680c block-heading view-1"
        data-block="2f42edb3-ba01-48bf-be77-95146ce8680c">
        <div class="container">
            <h1 class="titular">Política de cookies</h1>
        </div>
    </div>
    <div class="block block-81628afd-9c99-4de4-afe0-47d2a3844fc7 block-cookies_config view-1"
        data-block="81628afd-9c99-4de4-afe0-47d2a3844fc7">
        <div class="container"></div>
    </div>
    <div class="block block-30618d08-1ebf-465b-83cf-b3a27d68d10b block-texto view-1 max-width rte"
        data-block="30618d08-1ebf-465b-83cf-b3a27d68d10b">
        <div class="container"></div>
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