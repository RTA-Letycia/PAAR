@extends('template.template')
@section('body-img')
    background-image:url('images/dnit.jpg');
@endsection
@section('content')
        <!-- row inferior -->
    <div class="d-flex h-100 align-items-center justify-content-center">
        <div class="row card-row align-items-center">
            <div class="col-3 col-md-4 col-lg-3 col-xl-2">
                <div class="row d-flex justify-content-center">
                    <div class="intern-card card col-md-9 flex-column flex-wrap justify-content-around pb-4">
                        <h1 class="font-rawline small align-self-center pb-1">Prazos</h1>
                            <div class="d-flex justify-content-end text-center pl-1 align-items-center">
                                    <h1 class="font-rawline small size-h1">Próximo ao vencimento:</h1>
                                    <div class="mini-box text-white bg-teste">1</div>
                            </div>
                            <div class="d-flex justify-content-end">
                                    <h1 class="font-rawline small pl-4 align-self-end">Vencidos:</h1>
                                    <div class="mini-box text-white" id="blinking-element">2</div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-3 col-md-2 col-lg-3 col-xl-2">
                <div class="row d-flex justify-content-center">
                    <div class="intern-card intern-card-hover card col-lg-8 align-items-center justify-content-center">
                        <a class="btn d-flex align-items-center justify-content-center col-lg-12" href="{{route('move')}}">
                            <h1 class="font-rawline small text-center">Histórico de Movimentações</h1>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3 col-md-2 col-lg-3 col-xl-2">
                <div class="row d-flex justify-content-center">
                    <div class="intern-card intern-card-hover card col-lg-8 align-items-center justify-content-center">
                        <a class="btn d-flex align-items-center justify-content-center col-lg-12" href="{{route('map')}}">
                            <h1 class="font-rawline small">Mapa de Fluxo</h1>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-3 col-md-2 col-lg-3 col-xl-2">
                <div class="row d-flex justify-content-center">
                    <div class="intern-card intern-card-hover card col-lg-8 align-items-center justify-content-center">
                        <a class="btn d-flex align-items-center justify-content-center col-lg-12" href="{{route('process.show')}}" >
                            <h1 class="font-rawline small">Processos</h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
