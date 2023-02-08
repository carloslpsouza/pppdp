@extends('layouts.main')
@section('title', 'Principal')
@section('content')
    <div id="sub-menu" class="col-md-12">
        <a href="#">Em aberto</a>
        <a href="#">Respondidos</a>
        <a href="#">Todos</a>
    </div>
    <div id="painel" class="col-md-12 offset-md-1">
        <div id="card-conteiner" class="row">
            @foreach ($entradas as $entrada)
                <p>{{ $entrada['componente'] }}</p>
            @endforeach
            @foreach ($questions as $question)
                <div id="card" class="card col-md-2">
                    <p>Grau de risco:</p>
                    <div class="grisco"></div>
                    <div id="card-content">
                        <p>{{ $question['id'] }} {{ $question['pergunta'] }}</p>
                        <p>Cliente: Termaco</p>
                        <p>Ultimas Atividades: 08/02/2023</p>
                        <p>Colaborador: Maria Luciana</p>
                        <p>Evolução: 10%</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
