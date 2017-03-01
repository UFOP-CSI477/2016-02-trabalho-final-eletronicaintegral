@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de Ordens @if(Auth::check()) @if(Auth::user()->type == 2)<a class="btn btn-xs btn-default pull-right" href="{{url('ordems/create')}}">Nova Ordem</a>@endif @endif</div>

                    <div class="panel-body">
                        <table class="table table-responsive table-bordered table-hover">

                            <thead>
                            <tr>
                                <th>Cliente</th>
                                <th>Orçamento</th>
                                <th>Status</th>
                                <th>Aprovado</th>
                                {{--@if(\Illuminate\Support\Facades\Auth::check())--}}
                                <th>Ações</th>
                                {{--@endif--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ordems as $o)
                                <tr>
                                    <td>{{ $o->user()->first()->nome }}</td>
                                    <td>R$ {!! $o->orcamento !!}</td>
                                        <td>{!! $o->status !!}</td>
                                    @if($o->aprovacao == 1)
                                        <td> Sim </td>
                                    @else
                                        <td>Não</td>
                                    @endif

                                    <td class="form-horizontal ">

                                        @if(\Illuminate\Support\Facades\Auth::check())
                                            @if(Auth::user()->type == 2)
                                                <a class="btn btn-xs btn-sm btn-info btn-large" href="{{ url('ordems/' . $o->id . '/edit') }}">Editar</a>
                                                {{--<a class="btn btn-xs btn-info" href="{{ url('produtos/' . $p->id ) }}">Excluir</a>--}}
                                            @endif
                                                <a class="btn btn-xs btn-sm btn-primary btn-large" href="{{ url('ordems/' . $o->id ) }}">Visualizar</a>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{--<button class="btn btn-default" onclick="history.back()"><i class="fa fa-arrow-left"></i> Voltar</button>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection