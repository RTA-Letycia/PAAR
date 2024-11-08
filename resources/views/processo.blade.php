@extends('template.template')



@section('content')
<div class="pl-5 pr-5">
    <hr>
    <div class="input-group">
        <input type="text" class="form-control" aria-label="Text input with dropdown button">
    <div class="input-group-append">
        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filtro</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
        </div>
  </div>
</div>

    <div class="container">
        <h1>Processo</h1> <br>
        @foreach($processes as $process)
        <h1>PROCESSO: {{ $process->Assunto }}</h1>
        @endforeach
    </div>
</div>

@endsection