@extends('panel.admin.inc.app',['activePage' => 'admin.profile'])

@section('content')
<section class="content">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Perfil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Perfil</li>
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
                                <h3 class="card-title">Atualizar rerfil</h3>

                                {{-- <div class="card-tools">
                                    <a href="#" data-toggle="modal" data-target="#solicitar" class="btn btn-primary"><i
                                            class="nav-icon fa fa-plus"></i> Novo</a>
                                </div> --}}
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="settings">
                                        <form action="{{ route('admin.profile.update', ['id'=>auth()->user()->id]) }}" method="POST"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Avatar</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" id="inputEmail"
                                                        name="img" value="{{auth()->user()->img, old('img')}}"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputName" name="name"
                                                        value="{{auth()->user()->name, old('name')}}"
                                                        placeholder="Nome">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">E-mail</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputEmail"
                                                        name="email" value="{{auth()->user()->email, old('name')}}"
                                                        placeholder="E-mail">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Senha</label>
                                                <div class="col-sm-10">
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
                                                <div class="col-sm-10">
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