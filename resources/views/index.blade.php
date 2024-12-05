@extends('template.template')
@section('body-img')
    background-image:url('images/dnit.jpg');
@endsection
@section('content')
        <!-- row inferior -->
        <div class="row card-row align-items-center justify-content-center mb-row-sup">
            <div class="col-4 col-lg-3">
                <div class="row d-flex justify-content-center">
                    <div class="intern-card card col-lg-8 flex-column flex-wrap justify-content-around pb-4">
                        <h1 class="font-rawline small align-self-center">Prazos</h1>
                        <div class="d-flex justify-content-around text-center pl-1 align-items-center">
                            <h1 class="font-rawline small size-h1">Próximo ao vencimento:</h1>
                            <div class="mini-box text-white bg-teste">1</div>
                        </div>
                        <div class="d-flex justify-content-around">
                            <h1 class="font-rawline small pl-4 align-self-end">Vencidos:</h1>
                            <div class="mini-box text-white" id="blinking-element">2</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-4 col-lg-3">
                <div class="row d-flex justify-content-center">
                    <div class="intern-card intern-card-hover card col-lg-8 align-items-center justify-content-center">
                        <h1 class="font-rawline small text-lg-center">Histórico<br>de<br>Movimentações</h1>
                    </div>
                </div>
            </div>
            <div class="col-4 col-lg-3">
                <div class="row d-flex justify-content-center">
                    <div class="intern-card intern-card-hover card col-lg-8 align-items-center justify-content-center">
                        <h1 class="font-rawline small">Lembretes</h1>
                    </div>
                </div>
            </div>
            <div class="col-4 col-lg-3">
                <div class="row d-flex justify-content-center">
                    <div class="intern-card intern-card-hover card col-lg-8 align-items-center justify-content-center">
                            <a class="btn d-flex align-items-center justify-content-center col-lg-12" href="{{route('process')}}" >
                            <h1 class="font-rawline small">Processos</h1>
                            </a>
                    </div>
                </div>
            </div>
        </div>
@endsection
