@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'contactanos')

@section('content')


<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

    @include('web.layouts.header')

    @if($pais->slug == 'colombia')
        @include('web.contactos.contacto-co')
    @endif
    @if($pais->slug == 'usa')
        @include('web.contactos.contacto-us')
    @endif

    @if($pais->slug == 'ecuador')
        @include('web.contactos.contacto-ec')
    @endif
    @if($pais->slug == 'europa')
        @include('web.contactos.contacto-eu')
    @endif
    @if($pais->slug == 'venezuela')
        @include('web.contactos.contacto-ve')
    @endif

    <div class="prefooter"></div>

    @include('web.layouts.footer')

</body>




@section('ngFile')
<script src="{{ asset('js/web/controladores/contactanos.js') }}"></script>
@endsection


