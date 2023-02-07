@extends('layouts.main')
@section('title', 'Principal')
@section('content')
    <div id="sub-menu" class="col-md-6">
        <a href="#">Em aberto</a>
        <a href="#">Respondidos</a>
        <a href="#">Todos</a>
    </div>
    <div id="questionario" class="col-md-6 offset-md-1">
        <th>ID</th>
            <th>Pergunta</th>
            <th>Resposta</th>
            <th>Complemento</th>
            <th>Data da resposta</th>
            <th>Quem respondeu</th>
        <ul>
            @foreach ($entradas as $entrada)
                <li>{{ $entrada['componente']}}</li>
            @endforeach
            @foreach ($questions as $question)
                <li>{{ $question['id']}} {{$question['pergunta']}}</li>
            @endforeach
        </ul>
    </div>

@endsection
