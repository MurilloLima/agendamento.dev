@extends('panel.client.inc.app',['activePage' => 'client.profile'])

@section('content')
<section class="content">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Meus Dados</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    {{-- content --}}
    <div class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('panel.includes.alerts')
                    <!-- general form elements disabled -->
                    <div class="card card-white">
                        <div class="card-header">
                            <h3 class="card-title">Dados pessoais</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('client.user.update') }}" role="form" method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{auth()->user()->name, old('name')}}" placeholder="Seu nome...">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Data nascimento</label>
                                            <input type="text" class="form-control date" placeholder="00/00/0000"
                                                value="{{auth()->user()->date_nasc, old('date_nasc')}}"
                                                name="date_nasc">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>CPF</label>
                                            <input type="text" class="form-control cpf" placeholder="000.000.000-00"
                                                value="{{auth()->user()->cpf, old('cpf')}}" name="cpf">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Idade</label>
                                            <input type="number" class="form-control" placeholder="0"
                                                value="{{auth()->user()->idade, old('idade')}}" name="idade">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>RG</label>
                                            <input type="text" class="form-control" placeholder="0"
                                                value="{{auth()->user()->rg, old('rg')}}" name="rg">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Peso</label>
                                            <input type="text" class="form-control" placeholder="0"
                                                value="{{auth()->user()->peso, old('peso')}}" name="peso">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Altura</label>
                                            <input type="text" class="form-control" placeholder="0"
                                                value="{{auth()->user()->altura, old('altura')}}" name="altura">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Endereço</label>
                                            <input type="text" class="form-control" placeholder="Endereço..."
                                                value="{{auth()->user()->endereco, old('endereco')}}" name="endereco">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Bairro</label>
                                            <input type="text" class="form-control" placeholder="Bairro..."
                                                value="{{auth()->user()->bairro, old('bairro')}}" name="bairro">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Cidade</label>
                                            <input type="text" class="form-control" placeholder="Cidade..."
                                                value="{{auth()->user()->cidade, old('cidade')}}" name="cidade">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>CEP</label>
                                            <input type="text" class="form-control" placeholder="00000000"
                                                value="{{auth()->user()->cep, old('cep')}}" name="cep">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Profissão</label>
                                            <input type="text" class="form-control" placeholder="Profissão..."
                                                value="{{auth()->user()->profissao, old('profissao')}}"
                                                name="profissao">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Telefone</label>
                                            <input type="text" class="form-control phone_with_ddd"
                                                placeholder="(00)0000-0000"
                                                value="{{auth()->user()->fone, old('fone')}}" name="fone">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="email" class="form-control" placeholder="E-mail..."
                                                value="{{auth()->user()->email, old('email')}}" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary float-right">Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card card-white">
                        <div class="card-header">
                            <h3 class="card-title">Questionário</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('client.user.questions') }}" role="form" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                <input type="hidden" name="status" value="1">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Possui filhos?</label>
                                            <div class="form-group" style="margin-left: 10px;">
                                                <div class="col-sm-6">
                                                    {!! Form::radio('p_filhos', 1, auth()->user()->question->p_filhos ==
                                                    1 ?
                                                    'checked' : '', ['class'=>'form-check-input']) !!}
                                                    {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                                </div>
                                                <div class="col-sm-6">
                                                    {!! Form::radio('p_filhos', 0, auth()->user()->question->p_filhos ==
                                                    0 ?
                                                    'checked' : '', ['class'=>'form-check-input']) !!}
                                                    {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="">Idade do ultimo filho?</label>
                                        <input type="number" class="form-control" placeholder="0"
                                            value="{{auth()->user()->question->idade_ultimo_filho, old('idade_ultimo_filho')}}"
                                            name="idade_ultimo_filho">
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="">Cesária?</label>

                                            <div class="form-group" style="margin-left: 10px;">
                                                <div class="col-md-6">
                                                    {!! Form::radio('cesaria', 1, auth()->user()->question->cesaria == 1
                                                    ?
                                                    'checked' : '', ['class'=>'form-check-input']) !!}
                                                    {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                                </div>
                                                <div class="col-md-6">
                                                    {!! Form::radio('cesaria', 0, auth()->user()->question->cesaria == 0
                                                    ?
                                                    'checked' : '',
                                                    ['class'=>'form-check-input']) !!}
                                                    {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Quantas cesária?</label>
                                        <input type="number" class="form-control" placeholder="0"
                                            value="{{auth()->user()->question->qtd_cesaria, old('qtd_cesaria')}}"
                                            name="qtd_cesaria">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Cirurgias Anteriores?</label>

                                            <div class="form-group" style="margin-left: 10px;">
                                                <div class="col-md-6">
                                                    {!! Form::radio('cirurgias_anteriores', 1,
                                                    auth()->user()->question->cirurgias_anteriores == 1 ?
                                                    'checked' : '',
                                                    ['class'=>'form-check-input']) !!}
                                                    {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                                </div>
                                                <div class="col-md-6">
                                                    {!! Form::radio('cirurgias_anteriores',
                                                    0,auth()->user()->question->cirurgias_anteriores == 0 ?
                                                    'checked' : '',
                                                    ['class'=>'form-check-input']) !!}
                                                    {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <label for="">Quais cirurgias?</label>
                                        <input type="text" class="form-control" placeholder="Quais..."
                                            value="{{auth()->user()->question->cirurgias_ant_quais, old('cirurgias_ant_quais')}}"
                                            name="cirurgias_ant_quais">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Alergia a medicamentos?</label>

                                            <div class="form-group" style="margin-left: 10px;">
                                                <div class="col-md-6">
                                                    {!! Form::radio('alergia_medic',
                                                    1,auth()->user()->question->alergia_medic == 1 ?
                                                    'checked' : '', ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                                </div>
                                                <div class="col-md-6">
                                                    {!! Form::radio('alergia_medic',
                                                    0,auth()->user()->question->alergia_medic == 0 ?
                                                    'checked' : '', ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <label for="">Quais medicamentos?</label>
                                        <input type="text" class="form-control" placeholder="Quais..."
                                            value="{{auth()->user()->question->alergia_medic_quais, old('alergia_medic_quais')}}"
                                            name="alergia_medic_quais">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Fumante?</label>

                                            <div class="form-group" style="margin-left: 10px;">
                                                <div class="col-md-6">
                                                    {!! Form::radio('fuma', 1, auth()->user()->question->fuma == 1 ?
                                                    'checked' : '', ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                                </div>

                                                <div class="col-md-6">
                                                    {!! Form::radio('fuma', 0, auth()->user()->question->fuma == 0 ?
                                                    'checked' : '', ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Hipertensão?</label>

                                            <div class="form-group" style="margin-left: 10px;">
                                                <div class="col-md-6">
                                                    {!! Form::radio('hipertensao', 1,
                                                    auth()->user()->question->hipertensao
                                                    == 1 ?
                                                    'checked' : '', ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                                </div>
                                                <div class="col-md-6">
                                                    {!! Form::radio('hipertensao', 0,
                                                    auth()->user()->question->hipertensao
                                                    == 0 ?
                                                    'checked' : '', ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Diabetes?</label>

                                            <div class="form-group" style="margin-left: 10px;">
                                                <div class="col-md-6">
                                                    {!! Form::radio('diabetes', 1, auth()->user()->question->diabetes ==
                                                    1 ?
                                                    'checked' : '', ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                                </div>
                                                <div class="col-md-6">
                                                    {!! Form::radio('diabetes', 0, auth()->user()->question->diabetes ==
                                                    0 ?
                                                    'checked' : '', ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Trombose?</label>

                                            <div class="form-group" style="margin-left: 10px;">
                                                <div class="col-md-6">
                                                    {!! Form::radio('trombose', 1, auth()->user()->question->trombose ==
                                                    1 ?
                                                    'checked' : '', ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                                </div>
                                                <div class="col-md-6">
                                                    {!! Form::radio('trombose', 0, auth()->user()->question->trombose ==
                                                    0 ?
                                                    'checked' : '', ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Faz uso de algum medicamento?</label>
                                            <div class="form-group" style="margin-left: 10px;">
                                                <div class="col-md-6">
                                                    {!! Form::radio('usa_medicamentos', 1,
                                                    auth()->user()->question->usa_medicamentos == 1 ?
                                                    'checked' : '',
                                                    ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                                </div>
                                                <div class="col-md-6">
                                                    {!! Form::radio('usa_medicamentos', 0,
                                                    auth()->user()->question->usa_medicamentos == 0 ?
                                                    'checked' : '',
                                                    ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <label for="">Quais medicamentos?</label>
                                        <input type="text" class="form-control" placeholder="Quais..."
                                            value="{{auth()->user()->question->usa_medicamentos_quais, old('usa_medicamentos_quais')}}"
                                            name="usa_medicamentos_quais">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Já fez cirurgia plástica antes?</label>
                                            <div class="form-group" style="margin-left: 10px;">
                                                <div class="col-md-6">
                                                    {!! Form::radio('cirurgia_plastica', 1,
                                                    auth()->user()->question->cirurgia_plastica == 1 ?
                                                    'checked' : '',
                                                    ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                                </div>
                                                <div class="col-md-6">
                                                    {!! Form::radio('cirurgia_plastica', 0,
                                                    auth()->user()->question->cirurgia_plastica == 0 ?
                                                    'checked' : '',
                                                    ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <label for="">Quais?</label>
                                        <input type="text" class="form-control" placeholder="Quais..."
                                            value="{{auth()->user()->question->cirurgia_plastica_quais, old('cirurgia_plastica_quais')}}"
                                            name="cirurgia_plastica_quais">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Já teve algum problema anestésico?</label>

                                            <div class="form-group" style="margin-left: 10px;">
                                                <div class="col-md-6">
                                                    {!! Form::radio('problema_anestesico', 1,
                                                    auth()->user()->question->problema_anestesico == 1 ?
                                                    'checked' : '',
                                                    ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                                </div>
                                                <div class="col-md-6">
                                                    {!! Form::radio('problema_anestesico', 0,
                                                    auth()->user()->question->problema_anestesico == 0 ?
                                                    'checked' : '',
                                                    ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <label for="">Qual?</label>
                                        <input type="text" class="form-control" placeholder="Quais..."
                                            value="{{auth()->user()->question->problema_anestesico_quais, old('problema_anestesico_quais')}}"
                                            name="problema_anestesico_quais">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Faz uso de anorexígenos?</label>

                                            <div class="form-group" style="margin-left: 10px;">
                                                <div class="col-md-6">
                                                    {!! Form::radio('uso_de_anorexigenos', 1,
                                                    auth()->user()->question->uso_de_anorexigenos == 1 ?
                                                    'checked' : '',
                                                    ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                                </div>
                                                <div class="col-md-6">
                                                    {!! Form::radio('uso_de_anorexigenos', 0,
                                                    auth()->user()->question->uso_de_anorexigenos == 0 ?
                                                    'checked' : '',
                                                    ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <label for="">Qual?</label>
                                        <input type="text" class="form-control" placeholder="Quais..."
                                            value="{{auth()->user()->question->uso_de_anorexigenos_quais, old('uso_de_anorexigenos_quais')}}"
                                            name="uso_de_anorexigenos_quais">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Faz uso de hormônios?</label>

                                            <div class="form-group" style="margin-left: 10px;">
                                                <div class="col-md-6">
                                                    {!! Form::radio('uso_de_hormonios', 1,
                                                    auth()->user()->question->uso_de_hormonios == 1 ?
                                                    'checked' : '',
                                                    ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                                </div>
                                                <div class="col-md-6">
                                                    {!! Form::radio('uso_de_hormonios', 0,
                                                    auth()->user()->question->uso_de_hormonios == 0 ?
                                                    'checked' : '',
                                                    ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <label for="">Qual?</label>
                                        <input type="text" class="form-control" placeholder="Quais..."
                                            value="{{auth()->user()->question->uso_de_hormonios_quais, old('uso_de_hormonios_quais')}}"
                                            name="uso_de_hormonios_quais">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Toma anticoncepcional?</label>

                                            <div class="form-group" style="margin-left: 10px;">
                                                <div class="col-md-6">
                                                    {!! Form::radio('toma_anticoncepcional', 1,
                                                    auth()->user()->question->toma_anticoncepcional == 1 ?
                                                    'checked' : '',
                                                    ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                                </div>
                                                <div class="col-md-6">
                                                    {!! Form::radio('toma_anticoncepcional', 0,
                                                    auth()->user()->question->toma_anticoncepcional == 0 ?
                                                    'checked' : '',
                                                    ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <label for="">Qual?</label>
                                        <input type="text" class="form-control" placeholder="Quais..."
                                            value="{{auth()->user()->question->toma_anticoncepcional_quais, old('toma_anticoncepcional_quais')}}"
                                            name="toma_anticoncepcional_quais">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="">Já teve COVID 19?</label>

                                            <div class="form-group" style="margin-left: 10px;">
                                                <div class="col-md-6">
                                                    {!! Form::radio('teve_covid_19', 1,
                                                    auth()->user()->question->teve_covid_19 == 1 ?
                                                    'checked' : '',
                                                    ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                                </div>
                                                <div class="col-md-6">
                                                    {!! Form::radio('teve_covid_19', 0,
                                                    auth()->user()->question->teve_covid_19 == 0 ?
                                                    'checked' : '',
                                                    ['class'=>'form-check-input'])
                                                    !!}
                                                    {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="">Quanto tempo?</label>
                                        <input type="text" class="form-control" placeholder="0"
                                            value="{{auth()->user()->question->teve_covid_19_qtd_tempo, old('teve_covid_19_qtd_tempo')}}"
                                            name="teve_covid_19_qtd_tempo">
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Há quanto tempo decidiu operar?</label>
                                            {!! Form::select('decidiu_operar_quando', ['6 meses' =>'6 meses', '1
                                            ano'=>'1 ano', '+ de 1 ano'=>'+ de 1 ano'], old('decidiu_operar_quando'),
                                            ['class'=>'form-control']) !!}

                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="">Você está separado? </label>

                                        <div class="form-group" style="margin-left: 10px;">
                                            <div class="col-md-6">
                                                {!! Form::radio('voce_esta_separado', 1,
                                                auth()->user()->question->voce_esta_separado == 1 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::radio('voce_esta_separado', 0,
                                                auth()->user()->question->voce_esta_separado == 0 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="">A quanto tempo?</label>
                                        <input type="text" class="form-control" placeholder="Tempo..."
                                            value="{{auth()->user()->question->expectativa, old('expectativa')}}"
                                            name="expectativa">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="">Existe alguém contra você operar?</label>

                                        <div class="form-group" style="margin-left: 10px;">
                                            <div class="col-md-6">
                                                {!! Form::radio('alguem_contra_vc_operar', 1,
                                                auth()->user()->question->alguem_contra_vc_operar == 1 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::radio('alguem_contra_vc_operar', 0,
                                                auth()->user()->question->alguem_contra_vc_operar == 0 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <label for="">Quém?</label>
                                        <input type="text" class="form-control" placeholder="Quém..."
                                            value="{{auth()->user()->question->alguem_contra_vc_operar_quem, old('alguem_contra_vc_operar_quem')}}"
                                            name="alguem_contra_vc_operar_quem">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Qual sua expectativa sobre a cirurgia? Em relação ao
                                            resultado?</label>
                                        <input type="text" class="form-control" placeholder="Especifique..."
                                            value="{{auth()->user()->question->expectativa, old('expectativa')}}"
                                            name="expectativa">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="">Alguma perda recente? </label>

                                        <div class="form-group" style="margin-left: 10px;">
                                            <div class="col-md-6">
                                                {!! Form::radio('alguma_perda_recente', 1,
                                                auth()->user()->question->alguma_perda_recente == 1 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::radio('alguma_perda_recente', 0,
                                                auth()->user()->question->alguma_perda_recente == 0 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <label for="">Qual perda?</label>
                                        <input type="text" class="form-control" placeholder="Especifique..."
                                            value="{{auth()->user()->question->alguma_perda_recente_qual, old('alguma_perda_recente_qual')}}"
                                            name="alguma_perda_recente_qual">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label for="">Já fez tratamento para depressão ou outro problema de ordem
                                            psiquiátrica ou psicológica?</label>

                                        <div class="form-group" style="margin-left: 10px;">
                                            <div class="col-md-6">
                                                {!! Form::radio('fez_tratamento_para_depressao', 1,
                                                auth()->user()->question->fez_tratamento_para_depressao == 1 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::radio('fez_tratamento_para_depressao', 0,
                                                auth()->user()->question->fez_tratamento_para_depressao == 0 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Quanto tempo ?</label>
                                        <input type="text" class="form-control" placeholder="Tempo..."
                                            value="{{auth()->user()->question->fez_tratamento_para_depressao_qtd_tempo, old('fez_tratamento_para_depressao_qtd_tempo')}}"
                                            name="fez_tratamento_para_depressao_qtd_tempo">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Como você se considera emocionalmente?</label>
                                        <input type="text" class="form-control" placeholder=""
                                            value="{{auth()->user()->question->avaliar_emocionalmente, old('avaliar_emocionalmente')}}"
                                            name="avaliar_emocionalmente">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Você está seriamente preocupado (a) de que uma parte do seu corpo
                                            é diferente?</label>

                                        <div class="form-group" style="margin-left: 10px;">
                                            <div class="col-md-6">
                                                {!! Form::radio('voce_esta_seriamente_preocupado', 1,
                                                auth()->user()->question->voce_esta_seriamente_preocupado == 1 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::radio('voce_esta_seriamente_preocupado', 0,
                                                auth()->user()->question->voce_esta_seriamente_preocupado == 0 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for=""> Você se observa no espelho de forma atenta e repetitiva? </label>

                                        <div class="form-group" style="margin-left: 10px;">
                                            <div class="col-md-6">
                                                {!! Form::radio('voce_se_observa_no_espelho', 1,
                                                auth()->user()->question->voce_se_observa_no_espelho == 1 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::radio('voce_se_observa_no_espelho', 0,
                                                auth()->user()->question->voce_se_observa_no_espelho == 0 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Você evita olhar-se no espelho para não ficar tão
                                            preocupado?</label>

                                        <div class="form-group" style="margin-left: 10px;">
                                            <div class="col-md-6">
                                                {!! Form::radio('voce_evita_olharse_no_espelho', 1,
                                                auth()->user()->question->voce_evita_olharse_no_espelho == 1 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::radio('voce_evita_olharse_no_espelho', 0,
                                                auth()->user()->question->voce_evita_olharse_no_espelho == 0 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for=""> Você se preocupa de que outras pessoas possam estar observando,
                                            falando ou zombando de ser defeito?</label>

                                        <div class="form-group" style="margin-left: 10px;">
                                            <div class="col-md-6">
                                                {!! Form::radio('pessoas_possam_estar_observando', 1,
                                                auth()->user()->question->pessoas_possam_estar_observando == 1 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::radio('pessoas_possam_estar_observando', 0,
                                                auth()->user()->question->pessoas_possam_estar_observando == 0 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Você tenta esconder ou camuflar com as mãos, maquiagem ou
                                            roupas?</label>

                                        <div class="form-group" style="margin-left: 10px;">
                                            <div class="col-md-6">
                                                {!! Form::radio('voce_tenta_esconder_ou_camuflar', 1,
                                                auth()->user()->question->voce_tenta_esconder_ou_camuflar == 1 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::radio('voce_tenta_esconder_ou_camuflar', 0,
                                                auth()->user()->question->voce_tenta_esconder_ou_camuflar == 0 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Você acredita que uma cirurgia plástica poderá mudar radicalmente
                                            a sua vida, corrigindo o defeito que lhe incomoda?</label>

                                        <div class="form-group" style="margin-left: 10px;">
                                            <div class="col-md-6">
                                                {!!
                                                Form::radio('acredita_que_uma_cirurgia_plastica_podera_mudar_radicalmente',
                                                1,
                                                auth()->user()->question->acredita_que_uma_cirurgia_plastica_podera_mudar_radicalmente
                                                == 1 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                {!!
                                                Form::radio('acredita_que_uma_cirurgia_plastica_podera_mudar_radicalmente',
                                                0,
                                                auth()->user()->question->acredita_que_uma_cirurgia_plastica_podera_mudar_radicalmente
                                                == 0 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Você negligenciou suas atividades por causa do defeito?</label>

                                        <div class="form-group" style="margin-left: 10px;">
                                            <div class="col-md-6">
                                                {!! Form::radio('voce_negligenciou_suas_atividades', 1,
                                                auth()->user()->question->voce_negligenciou_suas_atividades == 1 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::radio('voce_negligenciou_suas_atividades', 0,
                                                auth()->user()->question->voce_negligenciou_suas_atividades == 0 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Este defeito lhe causa raiva, impaciência, agressividade,
                                            principalmente no relacionamento com parentes, amigos ou colegas de
                                            trabalho?</label>

                                        <div class="form-group" style="margin-left: 10px;">
                                            <div class="col-md-6">
                                                {!! Form::radio('este_defeito_lhe_causa_raiva', 1,
                                                auth()->user()->question->este_defeito_lhe_causa_raiva == 1 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Sim', 'Sim', ['class'=>'form-check-label']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::radio('este_defeito_lhe_causa_raiva', 0,
                                                auth()->user()->question->este_defeito_lhe_causa_raiva == 0 ?
                                                'checked' : '',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                {!! Form::label('Não', 'Não', ['class'=>'form-check-label']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Nesses momentos, você quebra algum objeto, dá murros ou chuta
                                            paredes e portas? </label>
                                        <input type="text" class="form-control" placeholder=""
                                            value="{{auth()->user()->question->voce_quebra_algum_objeto, old('voce_quebra_algum_objeto')}}"
                                            name="voce_quebra_algum_objeto">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Seu desespero é tamanho a ponto de desejar morrer, ferir-se ou
                                            prejudicar-se em função desse desespero? </label>
                                        <input type="text" class="form-control" placeholder="Tempo..."
                                            value="{{auth()->user()->question->seu_desespero_e_tamanho_a_ponto_de_desejar_morrer, old('seu_desespero_e_tamanho_a_ponto_de_desejar_morrer')}}"
                                            name="seu_desespero_e_tamanho_a_ponto_de_desejar_morrer">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <br>
                                        <button type="submit" class="btn btn-primary float-right">Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
    {{-- end content --}}
</section>
@endsection