@extends('client.inc.app', ['activePage' => 'home', 'titlePage' => __('Home')])

@section('content')
<div class="content">
    <div class="container-fluid">
        @include('client.includes.alerts')
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">card_travel</i>
                        </div>
                        <p class="card-category">Seu saldo</p>
                        <h3 class="card-title">R$ {{number_format($amount, 2, '.', '')}}
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href=""><i class="material-icons">history</i> Histórico</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">account_balance_wallet</i>
                        </div>
                        <p class="card-category">Bolsa</p>
                        <h3 class="card-title">R$ 0,00</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">sync</i> Atualizar
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-icon card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">card_giftcard</i>
                        </div>
                        <p class="card-category">Saldo projetado</p>
                        <h3 class="card-title">R$ 0,00</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">sync</i> Atualizar
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-lg btn-primary btn-round" data-toggle="modal" data-target="#deposito"><i
                        class="material-icons">arrow_circle_up</i> Novo depósito</button>
                <button class="btn btn-lg btn-success btn-round" data-toggle="modal" data-target="#retirar"><i
                        class="material-icons">arrow_circle_down</i> Nova retirar</button>
            </div>
        </div>
    </div>
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
                <form action="{{ route('client.deposit.store') }}" class="navbar-form" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        <div class="alert alert-success text-center">
                            <p>Para realizar um novo depósito, utilize a hash abaixo</p>
                            <h4>HASH: 16ChZuhe76ktMLBokiePfwTdxSVDKNiKS3</h4>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label">{{ __('Valor (R$)') }}</label>
                            <div class="col-sm-9">
                                <div class="form-group{{ $errors->has('value') ? ' has-danger' : '' }}">
                                    <input class="form-control money{{ $errors->has('value') ? ' is-invalid' : '' }}"
                                        name="value" type="text" placeholder="{{ __('0.00') }}"
                                        value="{{ old('value') }}" required />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-3 col-form-label">{{ __('Comprovante') }}</label>
                            <div class="col-sm-9">
                                <div class="form-group form-file-upload form-file-multiple">
                                    <input type="file" name="file" class="inputFileHidden">
                                    <div class="input-group{{ $errors->has('file') ? ' has-danger' : '' }}">
                                        <input type="text"
                                            class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }} inputFileVisible"
                                            placeholder="Comprovante deposito" required>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-fab btn-round btn-primary">
                                                <i class="material-icons">attach_file</i>
                                            </button>
                                        </span>
                                    </div>
                                    @if ($errors->has('file'))
                                    <span id="email-error" class="error text-danger">{{ $errors->first('file') }}</span>
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


<!-- Modal retirada-->
<div class="modal fade" id="retirar" tabindex="-1" role="dialog" aria-labelledby="retirar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLabel">Nova retirada</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('client.retirar.store') }}" class="navbar-form" method="post">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        <div class="alert alert-success text-center">
                            <p>Informe o valor da retirada e a hash para deposito.</p>
                        </div>
                        
                        <div class="row">
                            <label class="col-sm-3 col-form-label">{{ __('Valor') }}</label>
                            <div class="col-sm-9">
                                <div class="form-group{{ $errors->has('value') ? ' has-danger' : '' }}">
                                    <input class="form-control{{ $errors->has('value') ? ' is-invalid' : '' }}"
                                        name="value" type="text" placeholder="{{ __('0.00') }}"
                                        value="{{ old('value') }}" required />
                                    @if ($errors->has('value'))
                                    <span id="email-error"
                                        class="error text-danger">{{ $errors->first('value') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3 col-form-label">{{ __('Hash') }}</label>
                            <div class="col-sm-9">
                                <div class="form-group{{ $errors->has('hash') ? ' has-danger' : '' }}">
                                    <input class="form-control{{ $errors->has('hash') ? ' is-invalid' : '' }}"
                                        name="hash" type="text" placeholder="{{ __('Informe sua hash') }}"
                                        value="{{ old('hash') }}" required />
                                    @if ($errors->has('hash'))
                                    <span id="email-error"
                                        class="error text-danger">{{ $errors->first('hash') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Retirar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection