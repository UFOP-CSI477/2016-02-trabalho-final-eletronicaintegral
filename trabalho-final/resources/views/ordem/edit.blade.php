@extends('layouts.app')

@section('conteudo')
    <div class="container">

        <div class="panel-heading"><h2>Editar Ordem Serviço</h2></div>
                    <div class="panel-body">
                        {!! Form::model($ordem, ['method' => 'PATCH', 'route'=> ['ordems.update', $ordem->id], 'class' => 'form-horizontal']) !!}

                        {{ Form::token() }}

                        <div class="form-group">
                            {{Form::label('user_id', 'Cliente', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                                {{Form::select('user_id', [$ordem->user_id => $ordem->user()->first()->nome], null, ['class'=>'form-control', 'disabled' => 'disabled'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('data_nota_fiscal', 'Data Nota Fiscal', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                                {{Form::date('data_nota_fiscal', null, ['class'=>'form-control required'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('numero_nota_fiscal', 'Numero Nota Fiscal', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                                {{Form::text('numero_nota_fiscal',  null, ['class'=>'form-control required'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('orcamento', 'Orcamento', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                                {{Form::text('orcamento', null, ['class'=>'form-control required'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('Status', 'Status', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                                {{Form::select('status', ['Pronto' => 'Pronto', 'Em Conserto' => 'Em conserto',
                                                          'Aguardando Aprovação' => 'Aguardando Aprovação' ], null, ['class'=>'form-control required'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('tecnico', 'Tecnico', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                                {{Form::text('tecnico', null, ['class'=>'form-control required', 'disabled' => 'disabled'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('data_entrada', 'Data Entrada', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                                {{Form::date('data_entrada', null, ['class'=>'form-control required', 'disabled' => 'disabled'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('data_saida', 'Data Saida', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                                {{Form::date('data_saida', null, ['class'=>'form-control required'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('aprovacao', 'Aprovado', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                                {{Form::select('aprovacao', ['1'=>'Sim', '0'=>'Não'], null, ['class'=>'form-control required'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('peca', 'Peça', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                                {{Form::text('peca', null, ['class'=>'form-control required'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('servico', 'Serviço', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                                {{Form::text('servico', null, ['class'=>'form-control required'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('observacao', 'Observação', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                                {{Form::text('observacao', null, ['class'=>'form-control required'])}}
                            </div>
                        </div>


                        <div class="panel-body text-center"><h4>Produto</h4></div>

                        <div class="form-group">
                            {{Form::label('name', 'Nome', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                                {{Form::text('name', null, ['class'=>'form-control required', 'disabled' => 'disabled'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('marca_', 'Marca', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                                {{Form::text('marca', null, ['class'=>'form-control required', 'disabled' => 'disabled'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('modelo', 'Modelo', ['class' => 'col-md-4 control-label', 'disabled' => 'disabled'])}}
                            <div class="col-md-6">
                                {{Form::text('modelo', null, ['class'=>'form-control required', 'disabled' => 'disabled'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            {{Form::label('estado', 'Estado', ['class' => 'col-md-4 control-label', 'disabled' => 'disabled'])}}
                            <div class="col-md-6">
                                {{Form::text('estado', null, ['class'=>'form-control required', 'disabled' => 'disabled'])}}
                            </div>
                        </div>

                        <div class="form-group btn-group-xs" >
                            <div class="col-md-3 col-md-offset-4">
                                {{ Form::submit('Salvar',  ['class' => 'btn btn-primary']) }}
                            </div>

                                <div class="col-md-3">
                                    <button class="btn btn-default" onclick="{{url('ordems')}}"><i class="fa fa-arrow-left"></i> Voltar</button>
                                </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
@endsection