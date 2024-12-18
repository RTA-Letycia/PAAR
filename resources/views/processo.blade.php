@extends('template.template')

@section('content')
    <div class="h-100 w-100 pr-5 pl-5">
            <hr class="custom-m">
        <div class="row d-flex-inline m-input">
            <input class="col-sm-10 custom-filter no-outline rounded-input-left font-italic" type="text" id="searchFilter" placeholder="Digite sua pesquisa">
            <div class="col-sm-2 btn input-group-append custom-dropdown custom-filter d-flex align-items-center justify-content-center rounded-button-right">
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
        </div>
        <div class="row d-flex-inline m-input justify-content-between">
                <h1 class="custom-h1">Processos Gerenciados</h1>
            <div class="d-flex justify-content-end">
                <a class="btn bg-light-gray justify-content-center intern-card-hover" href="{{route('processIns')}}">
                    <h1 class="custom-h1">Inserir Processo</h1>
                </a>
            </div>
        </div>
        <div class= "row">
            <div class="col-12">
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
        </div>
        </div>
        </div>
    </div>
@endsection
