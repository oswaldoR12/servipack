<main class="content">
    <div class="block block-a896002d-70fa-47b2-87b6-4dcd4e15ce93 block-heading view-1"
        data-block="a896002d-70fa-47b2-87b6-4dcd4e15ce93">
        <div class="container">
            <h1 class="titular">Política de cookies</h1>
        </div>
    </div>
    <div class="block block-6c1b3881-12e1-446d-b6d6-c897917bb156 block-cookies_config view-1"
        data-block="6c1b3881-12e1-446d-b6d6-c897917bb156">
        <div class="container"></div>
        </div>
    </div>
    <div class="block block-7729b1ea-703f-4bc9-93c2-7a1d4d7932ed block-texto view-1 max-width rte"
        data-block="7729b1ea-703f-4bc9-93c2-7a1d4d7932ed">
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