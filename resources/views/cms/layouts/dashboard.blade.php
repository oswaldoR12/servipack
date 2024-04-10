
 
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile" style="">
            <!-- User profile image -->
            <div class="profile-img"> <img ?>"  alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text"> 
                <a href="index.html#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" style="color: #fff!important;"
                    role="button" aria-haspopup="true" aria-expanded="true">
                </a>
                <div class="dropdown-menu animated flipInY"> 
                    
                    <a href="" class="dropdown-item"><i class="ti-user"></i>
                        Perfil</a>
                    
                    <div class="dropdown-divider"></div> <a href="" class="dropdown-item"><i class="fa fa-power-off"></i>
                            Logout</a>
                </div>
                <div style="display: none;" class="chartist-tooltip">
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">MENÚ</li>
                <li id="li_empresa" class="li-menu"> <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-bank"></i><span
                            class="hide-menu">Empresa </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a id="nosotros" class="a-menu"  href="cms/nosotros">Nosotros</a></li>
                    </ul>
                </li>
                <li  id="li_slider" class="li-menu">
                    <a id="slider" class="a-menu"  href="cms/slider"><i class="fas fa-images"></i>
                        <span class="hide-menu">Configurar Slider</span>
                    </a>
                </li>
                <!-- <li  id="li_negocios" class="li-menu">
                    <a class="has-arrow waves-effect waves-dark"  aria-expanded="false">
                        <i class="mdi mdi-cash"></i>
                        <spanclass="hide-menu">Negocios</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="index.html">Tipo</a></li>
                        <li><a href="index2.html">Detalle</a></li>
                        <li><a href="index3.html">Ordenar</a></li>
                    </ul>
                </li> -->
                <li id="li_productos" class="li-menu">
                    <a class="has-arrow waves-effect waves-dark" aria-expanded="false">
                        <i class="fas fa-dollar-sign"></i>
                        <span class="hide-menu">Productos </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a id="marcas" href="cms/linea">Línea</a></li>
                        <li><a id="cat_prod" href="cms/categoria_prod">Categoría de Producto</a></li>
                        <li><a id="tipo_prod" href="cms/tipo_prod">Tipos de Productos</a></li>
                        <li><a id="colores" href="cms/color_prod">Colores</a></li>
                        <li><a id="tallas" href="cms/tallas_prod">Tallas</a></li>
                        <!-- Solo para usuario administrador -->
                        
                         <!-- -->
                        <li><a id="detalle_prod" href="cms/detalle_prod">Detalle de Productos</a></li>
                        <li><a id="adcantidad" href="cms/administra_cantidad">Administración de<br>cantidades de producto</a></li>
                    </ul>
                </li>
                <li  id="li_noticias" class="li-menu">
                    <a id="noticias" class="a-menu" href="cms/noticias"><i class="mdi mdi-newspaper"></i>
                        <span class="hide-menu">Noticias </span>
                    </a>
                </li>
                <li  id="li_contactos" class="li-menu"> <a class="has-arrow waves-effect waves-dark"  aria-expanded="false"><i class="mdi mdi-account-box"></i>
                        <span class="hide-menu">Contactos </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a id="contactos" class="a-menu" href="cms/contactos">Contactos</a></li>
                        <li><a id="redes_sociales" class="a-menu" href="cms/redes_sociales">Redes Sociales</a></li>
                        <li><a id="footer" class="a-menu" href="cms/footer">Footer</a></li>
                    </ul>
                </li>
                <li  id="li_configuracion" class="li-menu"> <a class="has-arrow waves-effect waves-dark"  aria-expanded="false"><i class="ti-settings"></i>

                <span class="" ng-class="@{active:categorias_menu==='1',hide:categorias_menu===''}">Configuracion  @{{categorias_menu}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a id="categoria" class="a-menu" href="cms/categorias">Categoría</a></li>
                        <li><a id="galeria" class="a-menu" href="cms/galeriaMultimedia">Galería</a></li>
                        <!-- Solo para usuario administrador -->
                        @if(in_array(Auth::user()->usuario_perfil_id,[1,3]))
                            <li><a id="registro_cms" class="a-menu" href="cms/registro_usuario">Usuarios</a></li>
                        @endif

                        <!-- -->
                        <li><a id="meta_description" class="a-menu" href="cms/descripcion">Meta Descripción</a></li>
                        <li><a id="palabras_claves" class="a-menu" href="cms/palabras_claves">Palabras Claves</a></li>
                        <!-- Solo para usuario administrador -->
                        
                        @if(in_array(Auth::user()->usuario_perfil_id,[1,3]))
                            <li><a id="auditoria" class="a-menu" href="cms/auditoria">Auditoria</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <!--<a href="index.html" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>-->
        <!-- item-->
        <!--<a href="index.html" class="link" data-toggle="tooltip" title="Settings"><i class="mdi mdi-comment-text"></i></a>-->
        <!-- item-->
        <!--<a href="Login/logout" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>-->
    </div>
    <!-- End Bottom points-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->


