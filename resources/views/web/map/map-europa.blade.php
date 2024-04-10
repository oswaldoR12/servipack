<div class="container">
    <div class="block-oficinas-buscador-content">
        <div class="block-oficinas-buscador-content-search">
            <div class="block-oficinas-buscador-content-search-formulario">
                <p class="titular">Busca tu <span class="text-highlight">oficina más cercana</span></p>
                <p class="subtitular"></p>
                <form method="post" accept-charset="utf-8" action="/oficinas">
                    <div style="display:none;"><input type="hidden" name="_csrfToken" autocomplete="off"
                            value="s1huARiQ1XBqGhqsKX8ChtKLoIFQWaIQpkTRy8rcObUiYTUlvpmj3e8I8kuGo4dySqJ0uit1hiN0t6jNxQLtng==">
                    </div>
                    <div class="input text required"><label for="cp">Código Postal</label><input type="text"
                            name="Código Postal" placeholder="Código postal" id="cp" class="form-control"
                            required="required" aria-required="true"></div><button type="submit"
                        title="Buscar por Código Postal" id="cpSubmit"><i
                            class="fa-regular fa-location-pin"></i></button>
                    <div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off"
                            value="3709f4cd7165100b5a841db69781c22142d18403%3A"><input type="hidden"
                            name="_Token[unlocked]" autocomplete="off" value=""></div>
                </form>
                <div class="block-oficinas-buscador-content-search-formulario-filters">
                    <p><a class="btn" href="?provincia=madrid">Madrid</a></p>
                    <p><a class="btn" href="?provincia=barcelona">Barcelona</a></p>
                    <p><a class="btn" href="?provincia=valencia">Valencia</a></p>
                    <p><a class="btn" href="?provincia=santa_cruz_de_tenerife">Santa Cruz de Tenerife</a></p>
                </div>
            </div>

            <div class="block-oficinas-buscador-content-search-mapa">
                @if($provincia == 'madrid')
                    <div id="map"
                        class="leaflet leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                        data-markers="[{&quot;nombre&quot;:&quot;San Sebasti\u00e1n de los Reyes&quot;,&quot;lat&quot;:&quot;40.549654&quot;,&quot;lng&quot;:&quot; -3.617204&quot;,&quot;direccion&quot;:&quot;Av. Camino de los cortao 6, Nave 30 - 28703&quot;,&quot;tipo&quot;:&quot;marker&quot;,&quot;como_llegar&quot;:&quot;https:\/\/www.google.com\/maps?ll=40.549654,-3.617204&amp;z=16&amp;t=m&amp;hl=es&amp;gl=ES&amp;mapclient=embed&amp;q=Av.+Camino+de+lo+Cortao,+6,+Nave+30+28703+San+Sebasti%C3%A1n+de+los+Reyes+Madrid&quot;,&quot;icon&quot;:&quot;{{ asset('img/icon/params_map_marker.webp') }}&quot;,&quot;iconWidth&quot;:35,&quot;iconHeight&quot;:47},{&quot;nombre&quot;:&quot;Avenida de Am\u00e9rica&quot;,&quot;lat&quot;:&quot;40.438332&quot;,&quot;lng&quot;:&quot; -3.672994&quot;,&quot;direccion&quot;:&quot;Calle Coslada, 34 - 28028 &quot;,&quot;tipo&quot;:&quot;marker&quot;,&quot;como_llegar&quot;:&quot;https:\/\/www.google.com\/maps?ll=40.438332,-3.672994&amp;z=16&amp;t=m&amp;hl=es&amp;gl=ES&amp;mapclient=embed&amp;q=C.+de+Cartagena,+87+28028+Madrid&quot;,&quot;icon&quot;:&quot;{{ asset('img/icon/params_map_marker.webp') }}&quot;,&quot;iconWidth&quot;:35,&quot;iconHeight&quot;:47},{&quot;nombre&quot;:&quot;Carabanchel&quot;,&quot;lat&quot;:&quot;40.390664&quot;,&quot;lng&quot;:&quot; -3.722995&quot;,&quot;direccion&quot;:&quot;Calle Virgen de Bel\u00e9n 16 - 28019&quot;,&quot;tipo&quot;:&quot;marker&quot;,&quot;como_llegar&quot;:&quot;https:\/\/www.google.com\/maps?ll=40.390664,-3.722995&amp;z=16&amp;t=m&amp;hl=es&amp;gl=ES&amp;mapclient=embed&amp;q=C.+Virgen+de+Belen,+16+28019+Madrid&quot;,&quot;icon&quot;:&quot;{{ asset('img/icon/params_map_marker.webp') }}&quot;,&quot;iconWidth&quot;:35,&quot;iconHeight&quot;:47}]"
                        data-zoom="14" data-provider="openstreetmap" tabindex="0" style="outline: none;">
                        <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="leaflet-pane leaflet-tile-pane">
                                <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                    <div class="leaflet-tile-container leaflet-zoom-animated"
                                        style="z-index: 18; transform: translate3d(-31px, -165px, 0px) scale(2);"></div>
                                    <div class="leaflet-tile-container leaflet-zoom-animated"
                                        style="z-index: 19; transform: translate3d(-31px, -165px, 0px) scale(1);"><img
                                            alt="" role="presentation"
                                            src="https://c.tile.openstreetmap.org/12/2005/1543.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(276px, 284px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://b.tile.openstreetmap.org/12/2005/1542.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(276px, 28px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://b.tile.openstreetmap.org/12/2004/1543.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(20px, 284px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://a.tile.openstreetmap.org/12/2006/1543.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(532px, 284px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://a.tile.openstreetmap.org/12/2005/1544.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(276px, 540px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://a.tile.openstreetmap.org/12/2004/1542.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(20px, 28px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://c.tile.openstreetmap.org/12/2006/1542.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(532px, 28px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://c.tile.openstreetmap.org/12/2004/1544.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(20px, 540px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://b.tile.openstreetmap.org/12/2006/1544.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(532px, 540px, 0px); opacity: 1;">
                                    </div>
                                </div>
                            </div>
                            <div class="leaflet-pane leaflet-shadow-pane"></div>
                            <div class="leaflet-pane leaflet-overlay-pane"></div>
                            <div class="leaflet-pane leaflet-marker-pane"><img
                                    src="{{ asset('img/icon/params_map_marker.webp') }}"
                                    class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt=""
                                    tabindex="0"
                                    style="margin-left: -17px; margin-top: -47px; width: 35px; height: 47px; transform: translate3d(717px, -18px, 0px); z-index: -18;"><img
                                    src="{{ asset('img/icon/params_map_marker.webp') }}"
                                    class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt=""
                                    tabindex="0"
                                    style="margin-left: -17px; margin-top: -47px; width: 35px; height: 47px; transform: translate3d(555px, 408px, 0px); z-index: 408;"><img
                                    src="{{ asset('img/icon/params_map_marker.webp') }}"
                                    class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt=""
                                    tabindex="0"
                                    style="margin-left: -17px; margin-top: -47px; width: 35px; height: 47px; transform: translate3d(409px, 590px, 0px); z-index: 590;">
                            </div>
                            <div class="leaflet-pane leaflet-tooltip-pane"></div>
                            <div class="leaflet-pane leaflet-popup-pane"></div>
                            <div class="leaflet-proxy leaflet-zoom-animated"
                                style="transform: translate3d(513332px, 395114px, 0px) scale(2048);"></div>
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
                @elseif($provincia == 'barcelona')
                    <div id="map"
                        class="leaflet leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                        data-markers="[{&quot;nombre&quot;:&quot;Sant Antoni&quot;,&quot;lat&quot;:&quot;41.375725&quot;,&quot;lng&quot;:&quot;2.155919&quot;,&quot;direccion&quot;:&quot;Calle Enten\u00e7a 12-14 local 2 - 08015&quot;,&quot;tipo&quot;:&quot;marker&quot;,&quot;como_llegar&quot;:&quot;https:\/\/www.google.com\/maps?ll=41.375725,2.155919&amp;z=16&amp;t=m&amp;hl=es&amp;gl=ES&amp;mapclient=embed&amp;cid=1560751654859624459&quot;,&quot;icon&quot;:&quot;{{ asset('img/icon/params_map_marker.webp') }}&quot;,&quot;iconWidth&quot;:35,&quot;iconHeight&quot;:47}]"
                        data-zoom="14" data-provider="openstreetmap" tabindex="0">
                        <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="leaflet-pane leaflet-tile-pane">
                                <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                    <div class="leaflet-tile-container leaflet-zoom-animated"
                                        style="z-index: 19; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt=""
                                            role="presentation" src="https://c.tile.openstreetmap.org/14/8289/6119.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(11px, -48px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://a.tile.openstreetmap.org/14/8290/6119.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(267px, -48px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://a.tile.openstreetmap.org/14/8289/6120.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(11px, 208px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://b.tile.openstreetmap.org/14/8290/6120.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(267px, 208px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://b.tile.openstreetmap.org/14/8288/6119.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(-245px, -48px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://b.tile.openstreetmap.org/14/8291/6119.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(523px, -48px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://c.tile.openstreetmap.org/14/8288/6120.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(-245px, 208px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://c.tile.openstreetmap.org/14/8291/6120.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(523px, 208px, 0px); opacity: 1;">
                                    </div>
                                </div>
                            </div>
                            <div class="leaflet-pane leaflet-shadow-pane"></div>
                            <div class="leaflet-pane leaflet-overlay-pane"></div>
                            <div class="leaflet-pane leaflet-marker-pane"><img
                                    src="{{ asset('img/icon/params_map_marker.webp') }}"
                                    class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt=""
                                    tabindex="0"
                                    style="margin-left: -17px; margin-top: -47px; width: 35px; height: 47px; transform: translate3d(297px, 225px, 0px); z-index: 225;">
                            </div>
                            <div class="leaflet-pane leaflet-tooltip-pane"></div>
                            <div class="leaflet-pane leaflet-popup-pane"></div>
                            <div class="leaflet-proxy leaflet-zoom-animated"
                                style="transform: translate3d(2.12227e+06px, 1.56674e+06px, 0px) scale(8192);"></div>
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
                @elseif($provincia == 'valencia')
                    <div id="map"
                        class="leaflet leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                        data-markers="[{&quot;nombre&quot;:&quot;La Llum&quot;,&quot;lat&quot;:&quot;39.46719&quot;,&quot;lng&quot;:&quot;-0.4107&quot;,&quot;direccion&quot;:&quot;Calle Padre Esteban Pernet 8  - 46014 &quot;,&quot;tipo&quot;:&quot;marker&quot;,&quot;como_llegar&quot;:&quot;https:\/\/www.google.com\/maps?ll=39.46719,-0.4107&amp;z=16&amp;t=m&amp;hl=es&amp;gl=ES&amp;mapclient=embed&amp;q=C.+del+Padre+Esteban+Pernet,+8+46014+Valencia&quot;,&quot;icon&quot;:&quot;{{ asset('img/icon/params_map_marker.webp') }}&quot;,&quot;iconWidth&quot;:35,&quot;iconHeight&quot;:47}]"
                        data-zoom="14" data-provider="openstreetmap" tabindex="0" style="outline: none;">
                        <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="leaflet-pane leaflet-tile-pane">
                                <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                    <div class="leaflet-tile-container leaflet-zoom-animated"
                                        style="z-index: 18; transform: translate3d(-56px, -393px, 0px) scale(2);"></div>
                                    <div class="leaflet-tile-container leaflet-zoom-animated"
                                        style="z-index: 19; transform: translate3d(-56px, -393px, 0px) scale(1);"><img
                                            alt="" role="presentation"
                                            src="https://b.tile.openstreetmap.org/15/16345/12468.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(180px, 362px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://c.tile.openstreetmap.org/15/16345/12469.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(180px, 618px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://a.tile.openstreetmap.org/15/16344/12468.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(-76px, 362px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://c.tile.openstreetmap.org/15/16346/12468.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(436px, 362px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://b.tile.openstreetmap.org/15/16344/12469.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(-76px, 618px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://a.tile.openstreetmap.org/15/16346/12469.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(436px, 618px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://a.tile.openstreetmap.org/15/16347/12468.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(692px, 362px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://b.tile.openstreetmap.org/15/16347/12469.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(692px, 618px, 0px); opacity: 1;">
                                    </div>
                                </div>
                            </div>
                            <div class="leaflet-pane leaflet-shadow-pane"></div>
                            <div class="leaflet-pane leaflet-overlay-pane"></div>
                            <div class="leaflet-pane leaflet-marker-pane"><img
                                    src="{{ asset('img/icon/params_map_marker.webp') }}"
                                    class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt=""
                                    tabindex="0"
                                    style="margin-left: -17px; margin-top: -47px; width: 35px; height: 47px; transform: translate3d(538px, 58px, 0px); z-index: 58;">
                            </div>
                            <div class="leaflet-pane leaflet-tooltip-pane"></div>
                            <div class="leaflet-pane leaflet-popup-pane"></div>
                            <div class="leaflet-proxy leaflet-zoom-animated"
                                style="transform: translate3d(4.18449e+06px, 3.19206e+06px, 0px) scale(16384);"></div>
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
                @elseif($provincia == 'santa_cruz_de_tenerife')
                    <div id="map"
                        class="leaflet leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                        data-markers="[{&quot;nombre&quot;:&quot;Tenerife&quot;,&quot;lat&quot;:&quot;28.4529754&quot;,&quot;lng&quot;:&quot;-16.3018534&quot;,&quot;direccion&quot;:&quot;Avenida de los Majuelos 66, Local L3 - 38107&quot;,&quot;tipo&quot;:&quot;marker&quot;,&quot;como_llegar&quot;:&quot;https:\/\/www.google.es\/maps\/place\/Av.+de+los+Majuelos,+66,+38108+La+Laguna,+Santa+Cruz+de+Tenerife\/@28.4529754,-16.3018534,17z\/data=!4m13!1m7!3m6!1s0xc41cd1d8ca76d51:0xfdcb92a8a9d39aac!2sAv.+de+los+Majuelos,+66,+38108+La+Laguna,+Santa+Cruz+de+Tenerife!3b1!&quot;,&quot;icon&quot;:&quot;{{ asset('img/icon/params_map_marker.webp') }}&quot;,&quot;iconWidth&quot;:35,&quot;iconHeight&quot;:47}]"
                        data-zoom="14" data-provider="openstreetmap" tabindex="0">
                        <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="leaflet-pane leaflet-tile-pane">
                                <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                    <div class="leaflet-tile-container leaflet-zoom-animated"
                                        style="z-index: 19; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt=""
                                            role="presentation" src="https://a.tile.openstreetmap.org/14/7449/6840.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(19px, 145px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://b.tile.openstreetmap.org/14/7450/6840.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(275px, 145px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://c.tile.openstreetmap.org/14/7449/6839.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(19px, -111px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://a.tile.openstreetmap.org/14/7450/6839.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(275px, -111px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://b.tile.openstreetmap.org/14/7449/6841.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(19px, 401px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://c.tile.openstreetmap.org/14/7450/6841.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(275px, 401px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://c.tile.openstreetmap.org/14/7448/6840.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(-237px, 145px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://c.tile.openstreetmap.org/14/7451/6840.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(531px, 145px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://b.tile.openstreetmap.org/14/7448/6839.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(-237px, -111px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://b.tile.openstreetmap.org/14/7451/6839.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(531px, -111px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://a.tile.openstreetmap.org/14/7448/6841.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(-237px, 401px, 0px); opacity: 1;"><img
                                            alt="" role="presentation"
                                            src="https://a.tile.openstreetmap.org/14/7451/6841.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(531px, 401px, 0px); opacity: 1;">
                                    </div>
                                </div>
                            </div>
                            <div class="leaflet-pane leaflet-shadow-pane"></div>
                            <div class="leaflet-pane leaflet-overlay-pane"></div>
                            <div class="leaflet-pane leaflet-marker-pane"><img
                                    src="{{ asset('img/icon/params_map_marker.webp') }}"
                                    class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt=""
                                    tabindex="0"
                                    style="margin-left: -17px; margin-top: -47px; width: 35px; height: 47px; transform: translate3d(297px, 225px, 0px); z-index: 225;">
                            </div>
                            <div class="leaflet-pane leaflet-tooltip-pane"></div>
                            <div class="leaflet-pane leaflet-popup-pane"></div>
                            <div class="leaflet-proxy leaflet-zoom-animated"
                                style="transform: translate3d(1.90722e+06px, 1.75112e+06px, 0px) scale(8192);"></div>
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
                @else
                    <div id="map"
                        class="leaflet leaflet-container leaflet-touch leaflet-fade-anim leaflet-grab leaflet-touch-drag leaflet-touch-zoom"
                        data-markers="[{&quot;nombre&quot;:&quot;San Sebasti\u00e1n de los Reyes&quot;,&quot;lat&quot;:&quot;40.549654&quot;,&quot;lng&quot;:&quot; -3.617204&quot;,&quot;direccion&quot;:&quot;Av. Camino de los cortao 6, Nave 30 - 28703&quot;,&quot;tipo&quot;:&quot;marker&quot;,&quot;como_llegar&quot;:&quot;https:\/\/www.google.com\/maps?ll=40.549654,-3.617204&amp;z=16&amp;t=m&amp;hl=es&amp;gl=ES&amp;mapclient=embed&amp;q=Av.+Camino+de+lo+Cortao,+6,+Nave+30+28703+San+Sebasti%C3%A1n+de+los+Reyes+Madrid&quot;,&quot;icon&quot;:&quot;{{ asset('img/icon/params_map_marker.webp') }}&quot;,&quot;iconWidth&quot;:35,&quot;iconHeight&quot;:47},{&quot;nombre&quot;:&quot;Avenida de Am\u00e9rica&quot;,&quot;lat&quot;:&quot;40.438332&quot;,&quot;lng&quot;:&quot; -3.672994&quot;,&quot;direccion&quot;:&quot;Calle Coslada, 34 - 28028 &quot;,&quot;tipo&quot;:&quot;marker&quot;,&quot;como_llegar&quot;:&quot;https:\/\/www.google.com\/maps?ll=40.438332,-3.672994&amp;z=16&amp;t=m&amp;hl=es&amp;gl=ES&amp;mapclient=embed&amp;q=C.+de+Cartagena,+87+28028+Madrid&quot;,&quot;icon&quot;:&quot;{{ asset('img/icon/params_map_marker.webp') }}&quot;,&quot;iconWidth&quot;:35,&quot;iconHeight&quot;:47},{&quot;nombre&quot;:&quot;Carabanchel&quot;,&quot;lat&quot;:&quot;40.390664&quot;,&quot;lng&quot;:&quot; -3.722995&quot;,&quot;direccion&quot;:&quot;Calle Virgen de Bel\u00e9n 16 - 28019&quot;,&quot;tipo&quot;:&quot;marker&quot;,&quot;como_llegar&quot;:&quot;https:\/\/www.google.com\/maps?ll=40.390664,-3.722995&amp;z=16&amp;t=m&amp;hl=es&amp;gl=ES&amp;mapclient=embed&amp;q=C.+Virgen+de+Belen,+16+28019+Madrid&quot;,&quot;icon&quot;:&quot;{{ asset('img/icon/params_map_marker.webp') }}&quot;,&quot;iconWidth&quot;:35,&quot;iconHeight&quot;:47},{&quot;nombre&quot;:&quot;Sant Antoni&quot;,&quot;lat&quot;:&quot;41.375725&quot;,&quot;lng&quot;:&quot;2.155919&quot;,&quot;direccion&quot;:&quot;Calle Enten\u00e7a 12-14 local 2 - 08015&quot;,&quot;tipo&quot;:&quot;marker&quot;,&quot;como_llegar&quot;:&quot;https:\/\/www.google.com\/maps?ll=41.375725,2.155919&amp;z=16&amp;t=m&amp;hl=es&amp;gl=ES&amp;mapclient=embed&amp;cid=1560751654859624459&quot;,&quot;icon&quot;:&quot;{{ asset('img/icon/params_map_marker.webp') }}&quot;,&quot;iconWidth&quot;:35,&quot;iconHeight&quot;:47},{&quot;nombre&quot;:&quot;La Llum&quot;,&quot;lat&quot;:&quot;39.46719&quot;,&quot;lng&quot;:&quot;-0.4107&quot;,&quot;direccion&quot;:&quot;Calle Padre Esteban Pernet 8  - 46014 &quot;,&quot;tipo&quot;:&quot;marker&quot;,&quot;como_llegar&quot;:&quot;https:\/\/www.google.com\/maps?ll=39.46719,-0.4107&amp;z=16&amp;t=m&amp;hl=es&amp;gl=ES&amp;mapclient=embed&amp;q=C.+del+Padre+Esteban+Pernet,+8+46014+Valencia&quot;,&quot;icon&quot;:&quot;{{ asset('img/icon/params_map_marker.webp') }}&quot;,&quot;iconWidth&quot;:35,&quot;iconHeight&quot;:47},{&quot;nombre&quot;:&quot;Tenerife&quot;,&quot;lat&quot;:&quot;28.4529754&quot;,&quot;lng&quot;:&quot;-16.3018534&quot;,&quot;direccion&quot;:&quot;Avenida de los Majuelos 66, Local L3 - 38107&quot;,&quot;tipo&quot;:&quot;marker&quot;,&quot;como_llegar&quot;:&quot;https:\/\/www.google.es\/maps\/place\/Av.+de+los+Majuelos,+66,+38108+La+Laguna,+Santa+Cruz+de+Tenerife\/@28.4529754,-16.3018534,17z\/data=!4m13!1m7!3m6!1s0xc41cd1d8ca76d51:0xfdcb92a8a9d39aac!2sAv.+de+los+Majuelos,+66,+38108+La+Laguna,+Santa+Cruz+de+Tenerife!3b1!&quot;,&quot;icon&quot;:&quot;{{ asset('img/icon/params_map_marker.webp') }}&quot;,&quot;iconWidth&quot;:35,&quot;iconHeight&quot;:47}]"
                        data-zoom="14" data-provider="openstreetmap" tabindex="0">
                        <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="leaflet-pane leaflet-tile-pane">
                                <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                    <div class="leaflet-tile-container leaflet-zoom-animated"
                                        style="z-index: 19; transform: translate3d(0px, 0px, 0px) scale(1);"><img alt=""
                                            role="presentation" src="https://b.tile.openstreetmap.org/4/7/6.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(228px, 141px, 0px); opacity: 1;"><img
                                            alt="" role="presentation" src="https://c.tile.openstreetmap.org/4/8/6.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(484px, 141px, 0px); opacity: 1;"><img
                                            alt="" role="presentation" src="https://a.tile.openstreetmap.org/4/7/5.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(228px, -115px, 0px); opacity: 1;"><img
                                            alt="" role="presentation" src="https://b.tile.openstreetmap.org/4/8/5.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(484px, -115px, 0px); opacity: 1;"><img
                                            alt="" role="presentation" src="https://c.tile.openstreetmap.org/4/7/7.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(228px, 397px, 0px); opacity: 1;"><img
                                            alt="" role="presentation" src="https://a.tile.openstreetmap.org/4/8/7.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(484px, 397px, 0px); opacity: 1;"><img
                                            alt="" role="presentation" src="https://a.tile.openstreetmap.org/4/6/6.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(-28px, 141px, 0px); opacity: 1;"><img
                                            alt="" role="presentation" src="https://a.tile.openstreetmap.org/4/9/6.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(740px, 141px, 0px); opacity: 1;"><img
                                            alt="" role="presentation" src="https://c.tile.openstreetmap.org/4/6/5.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(-28px, -115px, 0px); opacity: 1;"><img
                                            alt="" role="presentation" src="https://c.tile.openstreetmap.org/4/9/5.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(740px, -115px, 0px); opacity: 1;"><img
                                            alt="" role="presentation" src="https://b.tile.openstreetmap.org/4/6/7.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(-28px, 397px, 0px); opacity: 1;"><img
                                            alt="" role="presentation" src="https://b.tile.openstreetmap.org/4/9/7.png"
                                            class="leaflet-tile leaflet-tile-loaded"
                                            style="width: 256px; height: 256px; transform: translate3d(740px, 397px, 0px); opacity: 1;">
                                    </div>
                                </div>
                            </div>
                            <div class="leaflet-pane leaflet-shadow-pane"></div>
                            <div class="leaflet-pane leaflet-overlay-pane"></div>
                            <div class="leaflet-pane leaflet-marker-pane"><img
                                    src="{{ asset('img/icon/params_map_marker.webp') }}"
                                    class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt=""
                                    tabindex="0"
                                    style="margin-left: -17px; margin-top: -47px; width: 35px; height: 47px; transform: translate3d(443px, 147px, 0px); z-index: 147;"><img
                                    src="{{ asset('img/icon/params_map_marker.webp') }}"
                                    class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt=""
                                    tabindex="0"
                                    style="margin-left: -17px; margin-top: -47px; width: 35px; height: 47px; transform: translate3d(442px, 149px, 0px); z-index: 149;"><img
                                    src="{{ asset('img/icon/params_map_marker.webp') }}"
                                    class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt=""
                                    tabindex="0"
                                    style="margin-left: -17px; margin-top: -47px; width: 35px; height: 47px; transform: translate3d(442px, 150px, 0px); z-index: 150;"><img
                                    src="{{ asset('img/icon/params_map_marker.webp') }}"
                                    class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt=""
                                    tabindex="0"
                                    style="margin-left: -17px; margin-top: -47px; width: 35px; height: 47px; transform: translate3d(509px, 135px, 0px); z-index: 135;"><img
                                    src="{{ asset('img/icon/params_map_marker.webp') }}"
                                    class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt=""
                                    tabindex="0"
                                    style="margin-left: -17px; margin-top: -47px; width: 35px; height: 47px; transform: translate3d(479px, 164px, 0px); z-index: 164;"><img
                                    src="{{ asset('img/icon/params_map_marker.webp') }}"
                                    class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" alt=""
                                    tabindex="0"
                                    style="margin-left: -17px; margin-top: -47px; width: 35px; height: 47px; transform: translate3d(299px, 315px, 0px); z-index: 315;">
                            </div>
                            <div class="leaflet-pane leaflet-tooltip-pane"></div>
                            <div class="leaflet-pane leaflet-popup-pane"></div>
                            <div class="leaflet-proxy leaflet-zoom-animated"
                                style="transform: translate3d(1967.53px, 1620.05px, 0px) scale(8);"></div>
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
                @endif


            </div>
        </div>
    </div>
</div>