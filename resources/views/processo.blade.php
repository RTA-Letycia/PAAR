@extends('template.template')



@section('content')
    <hr class="col-sm-9 col-md-10 col-lg-11">
    <div class="row d-flex justify-content-center mt-5 mb-4 mt-sm-4">
        <input class="col-sm-7 col-md-8 col-lg-10 custom-filter no-outline rounded-input-left font-italic" type="text" id="searchFilter" placeholder="Digite sua pesquisa">
        <div class="col-sm-2 col-lg-1 btn input-group-append custom-dropdown custom-filter d-flex align-items-center justify-content-center rounded-button-left">
                    Filtro
            <span class="material-symbols-outlined light-blue">
                arrow_drop_down
            </span>
            <div class="dropdown-menu flex-column">
                <a class= "dropdown-item" href="#">Operação</a>
                <a class= "dropdown-item" href="#">Construção</a>
                <a class= "dropdown-item" href="#">Manutenção</a>
                <a class= "dropdown-item" href="#">Projetos</a>
                <a class= "dropdown-item" href="#">Meio Ambiente</a>
            </div>
        </div>
        <!-- <div class="container">
            <h1>Processo</h1> <br>
            @foreach($processes as $process)
            <h1>PROCESSO: {{ $process->Assunto }}</h1>
            @endforeach
        </div> -->
    </div>  
    <hr class="col-sm-9 col-md-10 col-lg-11"> 

@endsection