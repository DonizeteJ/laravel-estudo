@extends('layouts.principal')

@section('conteudo')
<h3> Clientes </h3>
<a href="{{route('clientes.create')}}"> Criar Cliente </a>

@if(count($clientes)>0)
    <ul>
        @foreach ($clientes as $c)
            <li>
                {{$c['id']}} | {{$c['nome']}} |
                <a href="{{route('clientes.edit', $c['id'])}}"> Editar </a>
                <a href="{{route('clientes.show', $c['id'])}}"> Info </a>
                <form action="{{route('clientes.destroy', $c['id'])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Apagar">
                </form>
            </li>
        @endforeach
        <li></li>
    </ul>
@endif

@empty($clientes)
    <h4> Não existem clientes cadastrados<h4>
@endempty

@endsection