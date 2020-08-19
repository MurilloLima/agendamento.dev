@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dados pessoais') }}</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                    value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date_nasc"
                                class="col-md-4 col-form-label text-md-right">{{ __('Data nascimento') }}</label>
                            <div class="col-md-6">
                                <input id="date_nasc" type="text"
                                    class="form-control date{{ $errors->has('date_nasc') ? ' is-invalid' : '' }}"
                                    name="date_nasc" value="{{ old('date_nasc') }}" required autofocus>

                                @if ($errors->has('date_nasc'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('date_nasc') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date_nasc"
                                class="col-md-4 col-form-label text-md-right">{{ __('Idade') }}</label>
                            <div class="col-md-6">
                                <input id="idade" type="text"
                                    class="form-control{{ $errors->has('idade') ? ' is-invalid' : '' }}" name="idade"
                                    value="{{ old('idade') }}" required autofocus>

                                @if ($errors->has('idade'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('idade') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>
                            <div class="col-md-6">
                                <input id="cpf" type="text"
                                    class="form-control cpf{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf"
                                    value="{{ old('cpf') }}" required autofocus>

                                @if ($errors->has('cpf'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cpf') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rg" class="col-md-4 col-form-label text-md-right">{{ __('RG') }}</label>
                            <div class="col-md-6">
                                <input id="rg" type="text"
                                    class="form-control rg{{ $errors->has('rg') ? ' is-invalid' : '' }}" name="rg"
                                    value="{{ old('rg') }}" required autofocus>

                                @if ($errors->has('rg'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('rg') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="peso"
                                class="col-md-4 col-form-label text-md-right">{{ __('Peso (KG)') }}</label>
                            <div class="col-md-6">
                                <input id="peso" type="text"
                                    class="form-control{{ $errors->has('peso') ? ' is-invalid' : '' }}" name="peso"
                                    value="{{ old('peso') }}" required autofocus>

                                @if ($errors->has('peso'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('peso') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="altura" class="col-md-4 col-form-label text-md-right">{{ __('Altura') }}</label>
                            <div class="col-md-6">
                                <input id="altura" type="text"
                                    class="form-control{{ $errors->has('altura') ? ' is-invalid' : '' }}" name="altura"
                                    value="{{ old('altura') }}" required autofocus>

                                @if ($errors->has('altura'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('altura') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 12px;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Endereço') }}</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="endereco"
                                class="col-md-4 col-form-label text-md-right">{{ __('Logradouro') }}</label>
                            <div class="col-md-6">
                                <input id="endereco" type="text"
                                    class="form-control{{ $errors->has('endereco') ? ' is-invalid' : '' }}"
                                    name="endereco" value="{{ old('endereco') }}" required autofocus>

                                @if ($errors->has('endereco'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('endereco') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bairro" class="col-md-4 col-form-label text-md-right">{{ __('Bairro') }}</label>
                            <div class="col-md-6">
                                <input id="bairro" type="text"
                                    class="form-control{{ $errors->has('bairro') ? ' is-invalid' : '' }}" name="bairro"
                                    value="{{ old('bairro') }}" required autofocus>

                                @if ($errors->has('bairro'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('bairro') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cidade" class="col-md-4 col-form-label text-md-right">{{ __('Cidade') }}</label>
                            <div class="col-md-6">
                                <input id="cidade" type="text"
                                    class="form-control{{ $errors->has('cidade') ? ' is-invalid' : '' }}" name="cidade"
                                    value="{{ old('cidade') }}" required autofocus>

                                @if ($errors->has('cidade'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cidade') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cep" class="col-md-4 col-form-label text-md-right">{{ __('CEP') }}</label>
                            <div class="col-md-6">
                                <input id="cep" type="text"
                                    class="form-control cep{{ $errors->has('cep') ? ' is-invalid' : '' }}" name="cep"
                                    value="{{ old('cep') }}" required autofocus>

                                @if ($errors->has('cep'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cep') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="profissao"
                                class="col-md-4 col-form-label text-md-right">{{ __('Profissão') }}</label>
                            <div class="col-md-6">
                                <input id="profissao" type="text"
                                    class="form-control{{ $errors->has('profissao') ? ' is-invalid' : '' }}"
                                    name="profissao" value="{{ old('cep') }}" required autofocus>

                                @if ($errors->has('profissao'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('profissao') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>
                            <div class="col-md-6">
                                <input id="fone" type="text"
                                    class="form-control phone_with_ddd{{ $errors->has('fone') ? ' is-invalid' : '' }}" name="fone"
                                    value="{{ old('fone') }}" required autofocus>

                                @if ($errors->has('fone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('fone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 12px;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dados de acesso') }}</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="img"
                                class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>
                            <div class="col-md-6">
                                <input id="img" type="file"
                                    class="form-control{{ $errors->has('img') ? ' is-invalid' : '' }}" name="img"
                                    value="{{ old('img') }}" required>

                                @if ($errors->has('img'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('img') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection