@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'home')

@section('content')


<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

    @include('web.layouts.header')

    @if($pais->slug == 'colombia')
        @include('web.faqs.faqs-co')
    @endif
    @if($pais->slug == 'usa')
        @include('web.faqs.faqs-us')
    @endif

    @if($pais->slug == 'ecuador')
        @include('web.faqs.faqs-ec')
    @endif
    @if($pais->slug == 'europa')
        @include('web.faqs.faqs-eu')
    @endif
    @if($pais->slug == 'venezuela')
        @include('web.faqs.faqs-ve')
    @endif


    <div class="prefooter"></div>

    @include('web.layouts.footer')

</body>


@section('scripts')

<script src="/js/js-service/faqs.js"></script>

@endsection
