@extends('panel.admin.inc.app',['activePage' => 'admin.profile'])

@section('content')
<section class="content">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cliente</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Editar</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- /.col -->
                    <div class="col-md-12">
                        @include('panel.includes.alerts')
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Atualizar cliente</h3>

                                {{-- <div class="card-tools">
                                    <a href="#" data-toggle="modal" data-target="#solicitar" class="btn btn-primary"><i
                                            class="nav-icon fa fa-plus"></i> Novo</a>
                                </div> --}}
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="settings">
                                        <form action="{{ route('admin.profile.update', ['id'=>$data->id]) }}" method="POST"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputName" name="name"
                                                        value="{{$data->name, old('name')}}"
                                                        placeholder="Nome">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">E-mail</label>
                                                <div class="col-sm-6">
                                                    <input type="email" class="form-control" id="inputEmail"
                                                        name="email" value="{{$data->email, old('name')}}"
                                                        placeholder="E-mail">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Data
                                                    nascimento</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputEmail"
                                                        name="date_nasc"
                                                        value="{{$data->date_nasc, old('date_nasc')}}"
                                                        placeholder="00/00/0000">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Idade</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputEmail" name="idade"
                                                        value="{{$data->idade, old('idade')}}"
                                                        placeholder="Idade">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">CPF</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputEmail" name="cpf"
                                                        value="{{$data->cpf, old('cpf')}}"
                                                        placeholder="000.000.000-00">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">RG</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputEmail" name="rg"
                                                        value="{{$data->rg, old('rg')}}" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Peso</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputEmail" name="peso"
                                                        value="{{$data->peso, old('peso')}}" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Altura</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputEmail"
                                                        name="altura" value="{{$data->altura, old('altura')}}"
                                                        placeholder="0">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Endereço</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputEmail"
                                                        name="endereco"
                                                        value="{{$data->endereco, old('endereco')}}"
                                                        placeholder="Endereço">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Bairro</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputEmail"
                                                        name="bairro" value="{{$data->bairro, old('bairro')}}"
                                                        placeholder="Bairro">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Cidade</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputEmail"
                                                        name="cidade" value="{{$data->cidade, old('cidade')}}"
                                                        placeholder="Cidade">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">CEP</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputEmail" name="cep"
                                                        value="{{$data->cep, old('cep')}}" placeholder="cep">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail"
                                                    class="col-sm-2 col-form-label">Profissão</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputEmail"
                                                        name="profissao"
                                                        value="{{$data->profissao, old('profissao')}}"
                                                        placeholder="Profissao">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Telefone</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="inputEmail" name="fone"
                                                        value="{{$data->fone, old('fone')}}"
                                                        placeholder="Telefone">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Avatar</label>
                                                <div class="col-sm-6">
                                                    <input type="file" class="form-control" id="inputEmail" name="img"
                                                        value="{{$data->img, old('img')}}" placeholder="img">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Senha</label>
                                                <div class="col-sm-6">
                                                    <input type="password"
                                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                        id="inputName2" name="password" placeholder="">

                                                    @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Confirmar
                                                    senha</label>
                                                <div class="col-sm-6">
                                                    <input type="password" class="form-control" id="inputName2"
                                                        name="password_confirmation" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-primary">Atualizar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </section>

</section>
@endsection