@extends('layouts.main')
@section('title', 'Principal')
@section('content')
    <h1>Principal</h1>
    <div id="questionario" class="col-md-6 offset-md-1">
        <th>ID</th>
            <th>Pergunta</th>
            <th>Resposta</th>
            <th>Complemento</th>
            <th>Data da resposta</th>
            <th>Quem respondeu</th>
        <ul>
            @foreach ($questions as $question)
                <li>{{ $question['id']}} {{$question['pergunta']}}</li>
            @endforeach
        </ul>
    </div>

@endsection
