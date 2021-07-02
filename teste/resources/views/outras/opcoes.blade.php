@extends('layouts.principal')

@section('titulo', 'Opcoes')

@section('conteudo')
<div class="options">
    <ul>
        <li><a class="warning" href="{{route('opcoes', 1)}}">Warning</a></li>
        <li><a class="info" href="{{route('opcoes', 2)}}">Info</a></li>
        <li><a class="success" href="{{route('opcoes', 3)}}">Success</a></li>
        <li><a class="error" href="{{route('opcoes', 4)}}">Error</a></li>
    </ul>
</div>

@if(isset($opcao))

    @switch($opcao)
        @case(1)
            @alerta(['titulo' => 'Warning', 'tipo' => 'warning'])
                <p><strong>Warning</strong></p>
                <p>Problemas podem ocorrer com o aplicativo</p>
            @endalerta   
            @break
        @case(2)
            @alerta(['titulo' => 'Info', 'tipo' => 'info'])
                <p><strong>Info</strong></p>
                <p>O aplicativo está funcionando corretamente</p>
            @endalerta
            @break
        @case(3)
            @alerta(['titulo' => 'Succes', 'tipo' => 'success'])
                <p><strong>Success</strong></p>
                <p>Compra efetuada com sucesso</p>
            @endalerta
            @break
        @case(4)
            @alerta(['titulo' => 'Error', 'tipo' => 'error'])
                <p><strong>Error</strong></p>
                <p>Ocorreu um erro inesperado</p>
            @endalerta
            @break
    @endswitch

@endif

@endsection