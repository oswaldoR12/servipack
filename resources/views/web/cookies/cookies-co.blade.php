<main class="content">
    <div class="block block-1712d15b-a558-4af5-ae36-4d7aba27491a block-heading view-1"
        data-block="1712d15b-a558-4af5-ae36-4d7aba27491a">
        <div class="container">
            <h1 class="titular">Política de cookies</h1>
        </div>
    </div>
    <div class="block block-a99451c5-fe00-40d3-b600-f920ada0c12d block-cookies_config view-1"
        data-block="a99451c5-fe00-40d3-b600-f920ada0c12d">
        <div class="container"></div>
    </div>
    <div class="block block-86afee78-cdf5-43e1-b522-209204ead185 block-texto view-1 max-width rte"
        data-block="86afee78-cdf5-43e1-b522-209204ead185">
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