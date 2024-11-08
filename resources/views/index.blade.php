@extends('template.template')
@section('body-img')
    background-image:url('images/dnit.jpg');
@endsection
@section('content')
        <!-- row inferior -->
        <div class="row card-row align-items-center justify-content-center mb-row-sup">
            <div class="col-12 col-md-6 col-lg-2">
                <div class="row d-flex justify-content-center">
                    <div class="intern-card col-lg-8 flex-column flex-wrap justify-content-around pb-4">
                        <h1 class="card-font align-self-center">Prazos</h1>
                        <div class="d-flex justify-content-around text-center pl-1 align-items-center">
                            <h1 class="card-font size-h1">Próximo ao vencimento:</h1>
                            <div class="mini-box text-white bg-teste">1</div>
                        </div>
                        <div class="d-flex justify-content-around">
                            <h1 class="card-font pl-4 align-self-end">Vencidos:</h1>
                            <div class="mini-box text-white" id="blinking-element">2</div>
                        </div>
                        
                    </div> 
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2 ">
                <div class="row d-flex justify-content-center">
                    <div class="intern-card card col-lg-8 align-items-center justify-content-center">
                        <h1 class="card-font text-lg-center">Histórico<br>de<br>Movimentações</h1>
                    </div> 
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <div class="row d-flex justify-content-center">
                    <div class="intern-card card col-lg-8 align-items-center justify-content-center">
                        <h1 class="card-font">Lembretes</h1>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <div class="row d-flex justify-content-center">
                    <div class="intern-card card col-lg-8 align-items-center justify-content-center">
                            <a class="btn full-size-link" href="{{route('process')}}" >
                            <h1 class="card-font">Processos</h1>
                            </a>
                    </div>
                </div>
            </div>
        </div>
@endsection