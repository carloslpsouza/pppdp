@extends('layouts.main')
@section('title', 'Principal')
@section('content')
    <h1>Principal</h1>
    <div id="questionario" class="col-md-3 offset-md-1">
        <ul>
            <th>ID</th>
            <th>Pergunta</th>
            @foreach ($questions as $question)
                <li>{{ $question['id'] . $question['pergunta'] }}</li>
            @endforeach
        </ul>
    </div>

@endsection
