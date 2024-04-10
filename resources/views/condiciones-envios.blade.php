@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'enprogreso')

@section('content')

<main class="content">
    <div class="block block-897075c4-7392-4989-a1e4-45c9f216f67e block-heading view-1"
        data-block="897075c4-7392-4989-a1e4-45c9f216f67e">
        <div class="container">
            <h1 class="titular">Condiciones de envíos comerciales</h1>
        </div>
    </div>
    <div class="block block-2aa2d298-5502-4192-93ac-8bede2fe3861 block-texto view-1 rte"
        data-block="2aa2d298-5502-4192-93ac-8bede2fe3861">
       
    </div>
</main>

@section('ngFile')
<script src="{{ asset('js/web/controladores/enprogreso.js') }}"></script>
@endsection
