@extends('site.layouts.basico')

@section('titulo', $titulo)    

@section('conteudo')

    @include('site.layouts._partials.topo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layouts._components.form_contato', ['classe'=>'borda-preta'])
                    <p>Esta é uma maneira de passar parametro para a view dentro de um component</p>
                    
                @endcomponent
            </div>
        </div>  
    </div>

    @include('site.layouts._partials.rodape')
@endsection