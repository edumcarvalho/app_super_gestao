<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestão</title>
</head>
<body>
    <h3>Teste! (view)</h3>
    <ul>
        <li> <a href="{{ route('site.index')}}">Principal</a></li>
        <li> <a href="{{ route('site.sobrenos')}}">Sobre nós</a></li>
        <li> <a href="{{ route('site.contato')}}">Contato</a></li>
        
    </ul>
    <h2>
        Valor de p1 é: {{$p1}}
        Valor de p2 é: {{$p2}}
    </h2>
</body>
</html>