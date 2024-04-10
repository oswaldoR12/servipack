<main class="content">
    <div class="block block-eec07735-e5e2-4aef-bdce-3ad729d88e16 block-heading view-1"
        data-block="eec07735-e5e2-4aef-bdce-3ad729d88e16">
        <div class="container">
            <h1 class="titular">Política de cookies</h1>
        </div>
    </div>
    <div class="block block-08d8c227-5929-4216-bd03-a5f91ba0f491 block-cookies_config view-1"
        data-block="08d8c227-5929-4216-bd03-a5f91ba0f491">
        <div class="container">  </div>
    </div>
    <div class="block block-2fc3e189-98b3-4ddc-b074-056679127cf2 block-texto view-1 max-width rte"
        data-block="2fc3e189-98b3-4ddc-b074-056679127cf2">
        <div class="container">
             </div>
        </div>
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