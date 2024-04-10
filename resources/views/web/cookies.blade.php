@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'home')

@section('content')


<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

    @include('web.layouts.header')

    @if($pais->slug == 'colombia')
        @include('web.cookies.cookies-co')
    @endif
    @if($pais->slug == 'usa')
        @include('web.cookies.cookies-us')
    @endif

    @if($pais->slug == 'ecuador')
        @include('web.cookies.cookies-ec')
    @endif
    @if($pais->slug == 'europa')
        @include('web.cookies.cookies-eu')
    @endif
    @if($pais->slug == 'venezuela')
        @include('web.cookies.cookies-ve')
    @endif


    <div class="prefooter"></div>

    @include('web.layouts.footer')

</body>


@section('scripts')

<script src="/js/js-service/faqs.js"></script>

@endsection
