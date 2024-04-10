@extends('web.layouts.main')
@section('page-title', 'ServiPack - Tu agencia de envíos internacionales')

@section('page-title', 'Usuarios')
@section('ngApp', 'home')
@section('ngController', 'home')

@section('content')




    <main class="content home-grupo">
        <div class="block block-texto view-1 home-grupo-content rte"
            data-block="">
            <div class="container">
                <div class="content rte clearfix">
                    <div class="home-grupo-content-box">

                        <img alt="" src="">

                        <div class="home-box-content-box-texto">
                            <p>Uniendo personas, impulsando negocio</p>
                            <hr>
                        </div>

                        <div class="home-grupo-content-box-form">
                            <form class="form" method="POST" action="{{ route('select.pais') }}">
                                @csrf
                                <div class="input select">
                                    <label for="pais" title="Pais"><span class="label-text">Selecciona un país</span></label>
                                    <select class="personalizado form-control" id="pais" name="pais">
                                        <option value="colombia">Colombia</option>
                                        <option value="ecuador">Ecuador</option>
                                        <option value="europa">España</option>
                                        <option value="usa">USA</option>
                                        <option value="venezuela">Venezuela</option>
                                        <option value="mexico">México</option>
                                        <option value="peru">Perú</option>
                                        <option value="republica-dominicana">República Dominicana</option>
                                        <!-- Agrega más opciones según sea necesario -->
                                    </select>
                                </div>

                                <div class="btn-group">
                                    <button type="submit">Ir</button>
                                </div>
                            </form>
                        </div>

                        <div class="home-grupo-content-box-paises">
                            <a class="home-grupo-content-box-paises-item" href="{{ route('colombia.home') }}">
                                <img alt="ServiPack Colombia" src="{{ asset('img/icon/colombia.png') }}">
                             </a>

                            <a class="home-grupo-content-box-paises-item" href="{{ route('ecuador.home') }}">
                                <img alt="ServiPack Ecuador" src="{{ asset('img/icon/ecuador.png') }}">
                            </a>
                                
                            <a class="home-grupo-content-box-paises-item"  href="{{ route('europa.home') }}">

                                <img alt="ServiPack España" src="{{ asset('img/icon/espana.png') }}">
                            </a> 

                            <a class="home-grupo-content-box-paises-item"
                                href="{{ route('usa.home') }}">
                                <img alt="ServiPack USA" src="{{ asset('img/icon/usa.png') }}">
                            </a>
                           
                            <a class="home-grupo-content-box-paises-item"
                                href="{{ route('venezuela.home') }}">
                                <img alt="ServiPack Venezuela" src="{{ asset('img/icon/venezuela.png') }}">
                            </a>
                       
                            
                            
                            <a class="home-grupo-content-box-paises-item" href="/mexico">

                                <img alt="ServiPack México" src="{{ asset('img/icon/mexico.png') }}">

                            </a> <a class="home-grupo-content-box-paises-item" href="/peru">

                                <img alt="ServiPack Perú" src="{{ asset('img/icon/peru.png') }}">

                            </a> <a class="home-grupo-content-box-paises-item" href="/republica-dominicana">

                                <img alt="ServiPack República Dominicana"
                                    src="{{ asset('img/icon/republica-dominicana.png') }}">

                            </a></div>

                        <hr class="d-none">
                        <div class="home-grupo-content-box-form d-none">
                            <form action="/" class="tracking-form form" id="tracking">
                                <div class="input text"><label for="envio">Localiza tu envío</label> <input
                                        class="form-control" id="envio" name="envio"
                                        placeholder="Inserte su localizador" type="text"></div>

                                <div class="btn-group"><button title="Buscar" type="submit">Buscar</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="loading">
        <div class="loading-spinner"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <input type="hidden" class="is_mobile">

    
    




@endsection

@section('ngFile')
<script src="{{ asset('js/controladores/home.js') }}"></script>

@endsection