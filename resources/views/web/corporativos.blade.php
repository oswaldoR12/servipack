@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'corporativos')

@section('content')


<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

    @include('web.layouts.header')


    <main class="content">
        <div class="block block-c3f546d8-f64c-450c-9536-8422f0089253 block-heading view-1"
            data-block="c3f546d8-f64c-450c-9536-8422f0089253">
            <div class="container">
                    @if($pais->slug == 'venezuela')
                        <h1 class="titular">Corporativos</h1>
                    @else
                        <h1 class="titular">Corporativos y franquiciados</h1>
                    @endif
            </div>
        </div>
        <div class="block block-b55b9fec-a3b2-4e4e-88e0-8870fde1f3fd block-texto view-1 rte"
            data-block="b55b9fec-a3b2-4e4e-88e0-8870fde1f3fd">
            <div class="content rte clearfix">
                <div class="trabaja-con-nosotros">
                    <div class="container">
                        <div class="trabaja-con-nosotros-content">
                            @if($pais->slug == 'colombia')
                                @include('web.corporativo.corporativo-co')
                            @endif
                            @if($pais->slug == 'usa')
                                @include('web.corporativo.corporativo-us')
                            @endif

                            @if($pais->slug == 'ecuador')
                                @include('web.corporativo.corporativo-ec')
                            @endif
                            @if($pais->slug == 'europa')
                                @include('web.corporativo.corporativo-eu')
                            @endif
                            @if($pais->slug == 'venezuela')
                                @include('web.corporativo.corporativo-ve')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <div class="prefooter"></div>

    @include('web.layouts.footer')

</body>

@section('ngFile')
<script src="{{ asset('js/web/controladores/corporativos.js') }}"></script>
@endsection