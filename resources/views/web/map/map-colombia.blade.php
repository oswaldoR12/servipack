<div class="container">
    <div class="block-oficinas-buscador-content">
        <div class="block-oficinas-buscador-content-search">
            <div class="block-oficinas-buscador-content-search-formulario">
                <p class="titular">Busca tu <span class="text-highlight">oficina más cercana</span></p>
                <p class="subtitular"><br><strong><span class="text-highlight">Nos puedes encontrar en Bogotá.</span>
                        Envíanos tu caja a nuestro almacén y nosotros lo enviamos a Venezuela.</strong></p>
                <form method="post" accept-charset="utf-8" action="/oficinas">
                    <div style="display:none;"><input type="hidden" name="_csrfToken" autocomplete="off"
                            value="ztpMaFYudbRu0QzaY8w7VmJbEe5H7qBLjdv8Zhkcn4XxMXA8kfEDdzq9eGBjpRrvluBxWaqmRKI0hFQRNYCM2A==">
                    </div>
                    <div class="input text required"><label for="cp">Código Postal</label><input type="text"
                            name="Código Postal" placeholder="Código postal" id="cp" class="form-control"
                            required="required" aria-required="true"></div><button type="submit"
                        title="Buscar por Código Postal" id="cpSubmit"><i
                            class="fa-regular fa-location-pin"></i></button>
                    <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off"
                            value="c8a741db6a79e0af601f1da848e959e453c3d23c%3A"><input type="hidden"
                            name="_Token[unlocked]" autocomplete="off" value=""></div>
                </form>
                <div class="block-oficinas-buscador-content-search-formulario-filters">
                    <p><a class="btn" href="?provincia=bogota">Bogotá</a></p>
                </div>
            </div>
            <div class="block-oficinas-buscador-content-search-mapa">
                <div id="map"
                    class="leaflet leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                    data-markers="[{&quot;nombre&quot;:&quot;Bogot\u00e1&quot;,&quot;lat&quot;:&quot;4.6983857&quot;,&quot;lng&quot;:&quot;-74.043145&quot;,&quot;direccion&quot;:&quot;Cra. 15 #118-76 - 110110&quot;,&quot;tipo&quot;:&quot;marker&quot;,&quot;como_llegar&quot;:&quot;https:\/\/www.google.es\/maps\/place\/Cra.+15+%23118-76,+Bogot%C3%A1,+Colombia\/@4.6983857,-74.043145,3a,15y,196.26h,87.68t\/data=!3m7!1e1!3m5!1sCdCfib0_Tvd2P2fxLFLjxQ!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DCdCfib0_Tvd2P&quot;,&quot;icon&quot;:&quot;{{ asset('img/icon/params_map_marker.webp') }}&quot;,&quot;iconWidth&quot;:35,&quot;iconHeight&quot;:47}]"
                    data-zoom="14" data-provider="openstreetmap" tabindex="0">
                    <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="leaflet-pane leaflet-tile-pane">
                            <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                <div class="leaflet-tile-container leaflet-zoom-animated"
                                    style="z-index: 19; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt=""
                                        role="presentation" src="https://a.tile.openstreetmap.org/14/4821/7977.png"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(120px, -63px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="https://b.tile.openstreetmap.org/14/4822/7977.png"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(376px, -63px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="https://b.tile.openstreetmap.org/14/4821/7978.png"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(120px, 193px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="https://c.tile.openstreetmap.org/14/4822/7978.png"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(376px, 193px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="https://c.tile.openstreetmap.org/14/4820/7977.png"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(-136px, -63px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="https://c.tile.openstreetmap.org/14/4823/7977.png"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(632px, -63px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="https://a.tile.openstreetmap.org/14/4820/7978.png"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(-136px, 193px, 0px); opacity: 1;"><img
                                        alt="" role="presentation"
                                        src="https://a.tile.openstreetmap.org/14/4823/7978.png"
                                        class="leaflet-tile leaflet-tile-loaded"
                                        style="width: 256px; height: 256px; transform: translate3d(632px, 193px, 0px); opacity: 1;">
                                </div>
                            </div>
                        </div>
                        <div class="leaflet-pane leaflet-shadow-pane"></div>
                        <div class="leaflet-pane leaflet-overlay-pane"></div>
                        <div class="leaflet-pane leaflet-marker-pane"><img
                        
                                src="{{ asset('img/icon/params_map_marker.webp') }}"
                                class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt=""
                                tabindex="0"
                                style="margin-left: -17px; margin-top: -47px; width: 35px; height: 47px; transform: translate3d(431px, 175px, 0px); z-index: 175;">
                        </div>
                        <div class="leaflet-pane leaflet-tooltip-pane"></div>
                        <div class="leaflet-pane leaflet-popup-pane"></div>
                        <div class="leaflet-proxy leaflet-zoom-animated"
                            style="transform: translate3d(1.23449e+06px, 2.04235e+06px, 0px) scale(8192);"></div>
                    </div>
                    <div class="leaflet-control-container">
                        <div class="leaflet-top leaflet-left">
                            <div class="leaflet-control-zoom leaflet-bar leaflet-control"><a
                                    class="leaflet-control-zoom-in" href="#" title="Zoom in" role="button"
                                    aria-label="Zoom in">+</a><a class="leaflet-control-zoom-out" href="#"
                                    title="Zoom out" role="button" aria-label="Zoom out">−</a></div>
                        </div>
                        <div class="leaflet-top leaflet-right"></div>
                        <div class="leaflet-bottom leaflet-left"></div>
                        <div class="leaflet-bottom leaflet-right">
                            <div class="leaflet-control-attribution leaflet-control"><a href="https://leafletjs.com"
                                    title="A JS library for interactive maps">Leaflet</a> | © <a
                                    href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>