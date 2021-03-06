@extends('layouts.app')

@section('conteudo')
    <div class="container">

        <div class="panel-heading"><h2>Lista de Ordem de Serviço </h2> @if(Auth::check()) @if(Auth::user()->type == 2)<a class="btn btn-xs btn-default pull-right" href="{{url('ordems/create')}}">Nova Ordem</a>@endif @endif</div>

                    <div class="panel-body">
                        <table class="table table-responsive table-bordered table-hover">

                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cliente</th>
                                <th>Orçamento</th>
                                <th>Status</th>
                                <th>Aprovado</th>
                                @if(Auth::user()->type == 2)
                                <th>Ações</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @if(Auth::check())
                                @if(Auth::user()->type == 2)
                                    @foreach($ordems as $o)
                                        <tr>
                                            <td>{{ $o->id }}</td>
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
                                @else
                                    @foreach($ordems as $o)
                                        @if($o->user()->first()->id == Auth::user()->id)
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
                                         @endif
                                    @endforeach
                                @endif
                            @endif

                            </tbody>
                        </table>
                        {{--<button class="btn btn-default" onclick="history.back()"><i class="fa fa-arrow-left"></i> Voltar</button>--}}
                    </div>
                </div>

@endsection