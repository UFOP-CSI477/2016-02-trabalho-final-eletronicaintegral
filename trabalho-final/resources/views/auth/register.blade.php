@extends('layouts.app')

@section('conteudo')
<div class="container">
    <div class="panel-heading"><h2>Registrar Novo Usuário</h2></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nome" class="col-md-4 control-label">Nome</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="login" class="col-md-4 control-label">Login</label>
                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control" name="login" value="{{ old('login') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Senha</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="telefone" class="col-md-4 control-label">Telefone</label>
                            <div class="col-md-6">
                                <input id="telefone" type="text" class="form-control" name="telefone" value="{{ old('telefone') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nascimento" class="col-md-4 control-label">Data de Nascimento</label>
                            <div class="col-md-6">
                                <input id="nascimento" type="date" class="form-control" name="nascimento" value="{{ old('nascimento') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cpf" class="col-md-4 control-label">Cpf</label>
                            <div class="col-md-6">
                                <input id="cpf" type="number" class="form-control" name="cpf" value="{{ old('cpf') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="type" class="col-md-4 control-label">Tipo</label>
                            <div class="col-md-6">
                                <select name="type" id="type" class="form-control" required autofocus>
                                    <option value="1">1 - Usuário</option>
                                    <option value="2">2 - Administrador</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rua" class="col-md-4 control-label">Rua</label>
                            <div class="col-md-6">
                                <input id="rua" type="text" class="form-control" name="rua" value="{{ old('rua') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bairro" class="col-md-4 control-label">Bairro</label>
                            <div class="col-md-6">
                                <input id="bairro" type="text" class="form-control" name="bairro" value="{{ old('bairro') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="numero" class="col-md-4 control-label">Numero</label>
                            <div class="col-md-6">
                                <input id="numero" type="number" class="form-control" name="numero" value="{{ old('numero') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="complemento" class="col-md-4 control-label">Complemento</label>
                            <div class="col-md-6">
                                <input id="complemento" type="text" class="form-control" name="complemento" value="{{ old('complemento') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cidade" class="col-md-4 control-label">Cidade</label>
                            <div class="col-md-6">
                                <input id="cidade" type="text" class="form-control" name="cidade" value="{{ old('cidade') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
  @endsection
