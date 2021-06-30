@extends('layouts.principal')

@section('conteudo')
<h3>Inforamções do Cliente</h3>

<p>ID: {{$cliente['id']}}</p>
<p>NOME: {{$cliente['nome']}}</p>

<a href="{{route('clientes.index')}}">voltar</a>
@endsection
