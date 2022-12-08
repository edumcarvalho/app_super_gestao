<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Fornecedor Index (view)</h3>

    {{-- Aqui fica o comentário que será descartado pelo interpretador do blade --}}

    @php 
        // Aqui fica o comentário que será descartado pelo interpretador do blade 
    @endphp

    <ul>
        <li> <a href="{{ route('site.index')}}">Principal</a></li>
        <li> <a href="{{ route('site.sobrenos')}}">Sobre nós</a></li>
        <li> <a href="{{ route('site.contato')}}">Contato</a></li>
        
    </ul>
</body>
</html>