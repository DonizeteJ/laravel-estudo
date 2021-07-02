@extends('layouts.principal')

@section('titulo', 'Departamentos')

@section('conteudo')
<h3>Departamentos</h3>

<ul>
    <li>Computadores</li>
    <li>Eletronicos</li>
    <li>Acessórios</li>
    <li>Roupas</li>
</ul>

@alerta(['titulo'=>'Erro fatal', 'tipo' => 'info'])
<p><strong>Erro inesperado</strong></p>
<p>Ocorreu um erro inesperado</p>
@endalerta

@component('components.alerta', ['titulo'=>'Erro fatal', 'tipo' => 'error'])
<p><strong>Erro inesperado</strong></p>
<p>Ocorreu um erro inesperado</p>
@endcomponent

@endsection