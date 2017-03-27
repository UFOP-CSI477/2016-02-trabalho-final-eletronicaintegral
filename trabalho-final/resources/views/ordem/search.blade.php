@extends('layouts.app')

@section('conteudo')

    <div class="container">

    <div class="panel-heading"> <h2> Digite o Número da Ordem de Serviço </h2>  </div>
        <div class="panel-body">
        <form action="{{ action('OrdemController@search') }}" method="post">
            {{ csrf_field() }}
                <input type="text" name="id" />
                <input type="submit" value="Pesquisar">
        </form>
        </div>
    </div>

@endsection