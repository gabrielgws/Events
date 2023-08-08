<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <h1>Algum título</h1>
        <img src="/img/banner.jpg" alt="banner">
        @if(10 > 15)
            <p>A condição é true</p>     
        @endif

        <p>{{ $nome }}</p>

        @if($nome == "Pedro")
            <p>O nome é Pedro</p>
        @elseif($nome == "Gabriel")
            <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos, e trabalha como {{ $profissao }}</p>
        @else
            <p>O nome não é Pedro</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p> {{ $arr[$i] }} - {{ $i }} </p>
            @if($i == 2)
                <p>O i é 2</p>
            @endif
        @endfor

        @foreach ($nomes as $nome)
            <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>
        @endforeach

        @php
            $name = 'João';
            echo $name;
        @endphp

        <!-- Comentário do HTML -->
        {{-- Esté é o comentário do blade --}}
    </body>
</html>
