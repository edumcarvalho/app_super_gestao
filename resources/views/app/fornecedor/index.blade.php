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
        /*
            Aqui fica o comentário que será descartado pelo interpretador do blade
        */
    @endphp
       
    {{--  @if (count($fornecedores)> 0 && count($fornecedores)<10)
        <h3> Existem alguns fornecedores cadastrados</h3>                   
    @elseif (count($fornecedores)> 10)
        <h3> Existem vários fornecedores cadastrados</h3>
    @else
        <h3> Ainda não existem fornecedores cadastrados</h3>        
    @endif  --}}

    
    <br>
    @isset($fornecedores)
        Fornecedor: {{ $fornecedores[1]['nome']}}
        <br>
        Status: {{ $fornecedores[1]['status']}}
        <br>
        @isset($fornecedores[1]['cnpj'])
            CNPJ: {{ $fornecedores[1]['cnpj']}}            
        @endisset    
    @endisset
    <br>
    @if (!($fornecedores[0]['status']== 'S'))
        Fornecedore Inativo        
    @endif
    <br>
    @unless ($fornecedores[0]['status']== 'S')
        Fornecedore Inativo unless        
    @endunless
    <br>

    @isset($clientes)
        @if (!($clientes[0]['status']== 'S'))
            Clientes Inativo        
        @endif
        <br>
        @unless ($clientes[0]['status']== 'S')
            Clientes Inativo unless        
        @endunless
        
    @endisset
    



    
    

    <ul>
        <li> <a href="{{ route('site.index')}}">Principal</a></li>
        <li> <a href="{{ route('site.sobrenos')}}">Sobre nós</a></li>
        <li> <a href="{{ route('site.contato')}}">Contato</a></li>
        
    </ul>
</body>
</html>