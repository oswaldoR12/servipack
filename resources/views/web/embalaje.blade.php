@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'home')

@section('content')


<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">


<main class="content"><div class="block block-64c0cf5c-9430-4582-a1c4-a981796679b7 block-heading view-1" data-block="64c0cf5c-9430-4582-a1c4-a981796679b7"><div class="container"><h1 class="titular">Guía para un empaque óptimo</h1><p class="subtitular">Tu caja va a recorrer muchos kilómetros hasta su destino. Sigue estas recomendaciones para que llegue en perfectas condiciones.   </p></div></div><div class="block block-f81a1d49-26ca-4f74-aec5-b8ca42839588 block-faqs view-1" data-block="f81a1d49-26ca-4f74-aec5-b8ca42839588">    <div class="container">
        <div class="content">
            <div class="block-faqs-head">
                <h2 class="titular">Antes de <span class="text-highlight">empacar</span></h2>            </div>
            <div class="block-faqs-listado">
                    <article class="block-faqs-listado-faq">
        <h3 class="block-faqs-listado-faq-titular titular">La caja</h3>

        <div class="block-faqs-listado-faq-texto rte">
            <ul>
	<li>Comprueba que aguante el peso del contenido. Usa cajas de pared doble para artículos de mayor peso.</li>
	<li>Indícanos si hay artículos frágiles ya que se deberá indicar con una etiqueta de manejo especial.</li>
	<li>No dejes huecos para que los objetos no choquen entre ellos al moverse.</li>
	<li>En caso de enviar varios artículos en un solo paquete, deberás envolver cada artículo individualmente para protegerlos.</li>
	<li>Evita confusiones y retira todas las etiquetas antiguas si reutilizas una caja.</li>
</ul>
        </div>
    </article>
    <article class="block-faqs-listado-faq">
        <h3 class="block-faqs-listado-faq-titular titular">Líquidos y vidrio:</h3>

        <div class="block-faqs-listado-faq-texto rte">
            <ul>
	<li>Sella las tapas con cinta adhesiva.</li>
	<li>Los envases de vidrio deben envolverse en papel de burbujas.</li>
	<li>No deben ir con artículos pesados que les presionen.</li>
	<li>Ya no aceptaremos tetra briks ni líquidos en fundas plásticas ya que no aguantan bien el transporte marítimo.</li>
</ul>
        </div>
    </article>
    <article class="block-faqs-listado-faq">
        <h3 class="block-faqs-listado-faq-titular titular">Artículos delicados</h3>

        <div class="block-faqs-listado-faq-texto rte">
            <ul>
	<li>Deben embalarse con artículos similares, sin artículos pesados. En caso de que se envíe junto a otros artículos es preferible colocarlos dentro de una caja que los aísle.</li>
	<li>Artículos en polvo, sellar y colocar en una bolsa sin nada que los presione y pueda hacer que se abran.</li>
</ul>
        </div>
    </article>
    <article class="block-faqs-listado-faq">
        <h3 class="block-faqs-listado-faq-titular titular">Artículos electrónicos</h3>

        <div class="block-faqs-listado-faq-texto rte">
            <ul>
	<li>Televisores y laptops deben ser probados delante de nuestro personal de oficinas para comprobar su funcionamiento.</li>
	<li>Televisores de más de 32’’ deben viajar en cajas de madera para su seguridad.</li>
	<li>No se deben colocar artículos dentro de las cajas de TV y laptops.</li>
</ul>
        </div>
    </article>
            </div>
        </div>
    </div>
</div><div class="block block-954a9d3c-dab7-4f8f-bef0-c20580aceadb block-texto view-1 rte" data-block="954a9d3c-dab7-4f8f-bef0-c20580aceadb"><div class="container"><div class="content rte clearfix"><p class="titular">Y ante la duda... <span class="text-highlight">¡Solicita tu reempaque!</span></p>


<p>Es un servicio gratuito dentro del Casillero que te puede ahorrar muchos quebraderos de cabeza; no solo por la seguridad de tus artículos, sino porque te ayudará a minimizar el espacio utilizado y así ahorrar.</p>
</div></div></div><div class="block block-b8018491-acf8-4979-8633-b6cd1b8fcddd block-templates-servicios-expresos-recomendaciones-embalaje" data-block="b8018491-acf8-4979-8633-b6cd1b8fcddd"><div class="ad-hoc-servicios-1">
    <div class="container">
       <div class="ad-hoc-servicios-1-blocks">
           <div class="ad-hoc-servicios-1-blocks-block envio block-adhoc-envio">
                <p class="titular">¿Cómo hacer mi <span class="text-highlight">envío?</span></p> 
<p class="subtitular">Te explicamos como hacerlo</p>
<a href="/envios-servicios-expresos" class="saber-mas-btn">Saber más</a>           </div>
           <div class="ad-hoc-servicios-1-blocks-block embalaje">
                <p class="embalaje-icons">
                    <i class="fa-thin fa-store"></i>
                    <i class="fa-thin fa-user"></i>
                    <i class="fa-thin fa-box-check"></i>
                    <i class="fa-thin fa-map-location"></i>
                    <i class="fa-thin fa-truck-ramp-couch"></i>
                </p>
                <p class="titular">Artículos prohibidos</p>
                <a href="/articulos-prohibidos" class="saber-mas-btn">Saber más</a>           </div>
       </div>
    </div>
</div></div></main>
    <div class="prefooter"></div>

    @include('web.layouts.footer')



</body>


@section('scripts')

<script src="/js/js-service/faqs.js"></script>

@endsection
