@extends('template.template')



@section('content')
    <hr>
    <div class="row d-flex justify-content-center mt-5 mb-4">
        <input class="col-lg-10 custom-w-filter-input" type="text" id="searchFilter" placeholder="Digite sua pesquisa">
        <div class="col-lg-2 input-group-append position-relative custom-dropdown p-0">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filtro</button>  
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
    <hr> 

@endsection