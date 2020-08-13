@extends('admin.inc.app', ['activePage' => 'home', 'titlePage' => __('Home')])
@section('content')
<div class="content">
   
</div>

<!-- Modal deposito-->
<div class="modal fade" id="deposito" tabindex="-1" role="dialog" aria-labelledby="deposito" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLabel">Novo depósito</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" class="navbar-form" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        <div class="alert alert-success text-center">
                            <p>Escolha o valor do deposito em seguida anexa-lo e enviar o comprovante para validação.
                            </p>
                            <h3>Dados para deposito</h3>
                            <h2>Banco do Brasil</h2>
                            <p>Agência: 0000-0 <br>Conta: 000000-0</p>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label">{{ __('Valor (R$)') }}</label>
                            <div class="col-sm-9">
                                <div class="form-group{{ $errors->has('valor') ? ' has-danger' : '' }}">
                                    <input class="form-control{{ $errors->has('valor') ? ' is-invalid' : '' }}"
                                        name="valor" type="text" placeholder="{{ __('0.00') }}" value="{{ old('valor') }}"
                                        required />
                                    @if ($errors->has('valor'))
                                    <span id="email-error" class="error text-danger">{{ $errors->first('valor') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label">{{ __('Seu CPF') }}</label>
                            <div class="col-sm-9">
                                <div class="form-group{{ $errors->has('cpf') ? ' has-danger' : '' }}">
                                    <input class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}"
                                        name="cpf" type="text" placeholder="{{ __('000.000.000-00') }}" value="{{ old('cpf') }}"
                                        required />
                                    @if ($errors->has('cpf'))
                                    <span id="email-error" class="error text-danger">{{ $errors->first('cpf') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label">{{ __('Comprovante') }}</label>
                            <div class="col-sm-9">
                                <div class="form-group form-file-upload form-file-multiple">
                                    <input type="file" name="img" class="inputFileHidden">
                                    <div class="input-group{{ $errors->has('img') ? ' has-danger' : '' }}">
                                        <input type="text"
                                            class="form-control{{ $errors->has('img') ? ' is-invalid' : '' }} inputFileVisible"
                                            placeholder="Comprovante deposito">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-fab btn-round btn-primary">
                                                <i class="material-icons">attach_file</i>
                                            </button>
                                        </span>
                                    </div>
                                    @if ($errors->has('comprovante'))
                                    <span id="email-error"
                                        class="error text-danger">{{ $errors->first('comprovante') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection