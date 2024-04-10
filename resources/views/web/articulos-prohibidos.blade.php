@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'home')

@section('content')


<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

    @include('web.layouts.header')

    @if($pais->slug == 'colombia')
        @include('web.prohibidos.prohibidos-co')
    @endif
    @if($pais->slug == 'usa')
        @include('web.prohibidos.prohibidos-us')
    @endif

    @if($pais->slug == 'ecuador')
        @include('web.prohibidos.prohibidos-ec')
    @endif
    @if($pais->slug == 'europa')
        @include('web.prohibidos.prohibidos-eu')
    @endif
    @if($pais->slug == 'venezuela')
        @include('web.prohibidos.prohibidos-ve')
    @endif


    <div class="prefooter"></div>

    @include('web.layouts.footer')

</body>


@section('scripts')

<script src="/js/js-service/faqs.js"></script>

@endsection
