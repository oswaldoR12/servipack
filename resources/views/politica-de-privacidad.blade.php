@extends('web.layouts.main')

@section('page-title', 'ServiPack ' . $pais->descripcion . ' - Tu agencia de envíos internacionales')
@section('ngApp', 'webExpress')
@section('ngController', 'enprogreso')

@section('content')
<main class="content">
    <div class="block block-5a544ded-5812-4ff1-8e15-c4207dfcc3fb block-heading view-1"
        data-block="5a544ded-5812-4ff1-8e15-c4207dfcc3fb">
        <div class="container">
            <h1 class="titular">Política de privacidad</h1>
        </div>
    </div>
    <div class="block block-6f870553-7ad3-4183-a123-85fbdf20cd0a block-texto view-1 rte"
        data-block="6f870553-7ad3-4183-a123-85fbdf20cd0a">
        <div class="container"> </div>
    </div>
</main>

@section('ngFile')
<script src="{{ asset('js/web/controladores/enprogreso.js') }}"></script>
@endsection
