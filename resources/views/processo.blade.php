@extends('template.template')

@section('content')
{{--<<<<<<< HEAD--}}
    <div class="row justify-content-center pr-4 pl-2">
        <hr class="col-sm-8 col-md-10 col-lg-11 custom-m">
    </div>
    <div class="row d-flex justify-content-center mt-4 mb-4 pb-4 mt-sm-4 pr-3">
        <input class="col-sm-6 col-md-8 col-lg-10 custom-filter no-outline rounded-input-left font-italic" type="text" id="searchFilter" placeholder="Digite sua pesquisa">
        <div class="col-sm-1 col-lg-1 btn input-group-append custom-dropdown custom-filter d-flex align-items-center justify-content-center rounded-button-right">
{{--=======--}}
    {{--<hr class="col-sm-9 col-md-10 col-lg-11">--}}
    {{--<div class="row d-flex justify-content-center mt-5 mb-4 mt-sm-4">--}}
        {{--<input class="col-sm-7 col-md-8 col-lg-10 custom-filter no-outline rounded-input-left font-italic" type="text" id="searchFilter" placeholder="Digite sua pesquisa">--}}
        {{--<div class="col-sm-2 col-lg-1 btn input-group-append custom-dropdown custom-filter d-flex align-items-center justify-content-center rounded-button-right">--}}
{{-->>>>>>> 7aeeae9 (:bug: uninstall test db and implement latest db. Fixes #14)--}}
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
{{--<<<<<<< HEAD--}}
    </div>
    <div class="row justify-content-between mr-5 ml-5 mb-3">
        <div class="col-lg-4 d-flex p-0">
            <h1 class="custom-h1">Processos Gerenciados</h1>
        </div>
        <div class="d-flex justify-content-end pr-3">
            <a class="btn bg-light-gray justify-content-center intern-card-hover" href="{{route('processIns')}}">
                <h1 class="custom-h1">Inserir Processo</h1>
            </a>
        </div>
    </div>
    <div class= "row justify-content-center">
        <div class="col-11 d-flex p-0">
            <table class="table table-hover table-border">
                <thead class="bg-light-gray font-rawline custom-h1">
                    <tr>
                        <th scope="col">Tipo de Contrato</th>
                        <th scope="col">Nº Processo</th>
                        <th scope="col">Data de Abertura</th>
                        <th scope="col">Assunto / Motivação</th>
                        <th scope="col">ICONE</th>
                        <th scope="col">Local</th>
                        <th scope="col">Empresa Responsável</th>
                        <th scope="col">CNPJ</th>
                        <th scope="col">Última Movimentação</th>
                        <th scope="col">Status PAAR</th>
                <tbody>
                {{--@foreach($procs as $proc)--}}
                    <tr>
                        {{--<th scope="row">{{$proc->id}}</th>--}}
                        {{--<td>{{$proc->num}}</td>--}}
                        <td></td>
                        <td>@mdo</td>
                        </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
{{--=======--}}
    </div>
 {{--   <hr class="col-sm-9 col-md-10 col-lg-11">--}}
    </div>
    </div>

{{-->>>>>>> 7aeeae9 (:bug: uninstall test db and implement latest db. Fixes #14)--}}
@endsection
