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
                            <form action="">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Possui filhos?</label>

                                            <div class="form-check">
                                                {!! Form::radio('p_filhos', 'Sim',
                                                ['class'=>'form-check-input']) !!}
                                                <label for="" class="form-check-label">Sim</label>
                                                {!! Form::radio('p_filhos', 'Não',
                                                ['class'=>'form-check-input']) !!}
                                                <label for="" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="">Idade do ultimo filho?</label>
                                        <input type="number" class="form-control" placeholder="0"
                                            value="{{old('idade_ultimo_filho')}}" name="idade_ultimo_filho">
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Cesária?</label>

                                            <div class="form-check">
                                                {!! Form::radio('cesaria', 'Sim',
                                                ['class'=>'form-check-input']) !!}
                                                <label for="" class="form-check-label">Sim</label>
                                                {!! Form::radio('cesaria', 'Não',
                                                ['class'=>'form-check-input']) !!}
                                                <label for="" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="">Quantas cesária?</label>
                                        <input type="number" class="form-control" placeholder="0"
                                            value="{{old('qtd_cesaria')}}" name="qtd_cesaria">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Cirurgias Anteriores?</label>

                                            <div class="form-check">
                                                {!! Form::radio('cirurgias_anteriores', 'Sim',
                                                ['class'=>'form-check-input']) !!}
                                                <label for="" class="form-check-label">Sim</label>
                                                {!! Form::radio('cirurgias_anteriores', 'Não',
                                                ['class'=>'form-check-input']) !!}
                                                <label for="" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <label for="">Quais cirurgias?</label>
                                        <input type="text" class="form-control" placeholder="Quais..."
                                            value="{{old('cirurgias_ant_quais')}}" name="cirurgias_ant_quais">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Alergia a medicamentos?</label>

                                            <div class="form-check">
                                                {!! Form::radio('alergia_medic', 'Sim', ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Sim</label>
                                                {!! Form::radio('alergia_medic', 'Não', ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <label for="">Quais medicamentos?</label>
                                        <input type="text" class="form-control" placeholder="Quais..."
                                            value="{{old('alergia_medic_quais')}}" name="alergia_medic_quais">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Fumante?</label>

                                            <div class="form-check">
                                                {!! Form::radio('fuma', 'Sim', ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Sim</label>
                                                {!! Form::radio('fuma', 'Não', ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Hipertensão?</label>

                                            <div class="form-check">
                                                {!! Form::radio('hipertensao', 'Sim', ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Sim</label>
                                                {!! Form::radio('hipertensao', 'Não', ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Diabetes?</label>

                                            <div class="form-check">
                                                {!! Form::radio('diabetes', 'Sim', ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Sim</label>
                                                {!! Form::radio('diabetes', 'Não', ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Trombose?</label>

                                            <div class="form-check">
                                                {!! Form::radio('trombose', 'Sim', ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Sim</label>
                                                {!! Form::radio('trombose', 'Não', ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Faz uso de algum medicamento?</label>
                                            <div class="form-check">
                                                {!! Form::radio('usa_medicamentos', 'Sim',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Sim</label>
                                                {!! Form::radio('usa_medicamentos', 'Não',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <label for="">Quais medicamentos?</label>
                                        <input type="text" class="form-control" placeholder="Quais..."
                                            value="{{old('usa_medicamentos_quais')}}" name="usa_medicamentos_quais">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Já fez cirurgia plástica antes?</label>
                                            <div class="form-check">
                                                {!! Form::radio('cirurgia_plastica', 'Sim',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Sim</label>
                                                {!! Form::radio('cirurgia_plastica', 'Não',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <label for="">Quais?</label>
                                        <input type="text" class="form-control" placeholder="Quais..."
                                            value="{{old('cirurgia_plastica_quais')}}" name="cirurgia_plastica_quais">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Já teve algum problema anestésico?</label>

                                            <div class="form-check">
                                                {!! Form::radio('problema_anestesico', 'Sim',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Sim</label>
                                                {!! Form::radio('problema_anestesico', 'Não',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <label for="">Qual?</label>
                                        <input type="text" class="form-control" placeholder="Quais..."
                                            value="{{old('problema_anestesico_quais')}}"
                                            name="problema_anestesico_quais">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Faz uso de anorexígenos?</label>

                                            <div class="form-check">
                                                {!! Form::radio('uso_de_anorexigenos', 'Sim',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Sim</label>
                                                {!! Form::radio('uso_de_anorexigenos', 'Não',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <label for="">Qual?</label>
                                        <input type="text" class="form-control" placeholder="Quais..."
                                            value="{{old('uso_de_anorexigenos_quais')}}"
                                            name="uso_de_anorexigenos_quais">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Faz uso de hormônios?</label>

                                            <div class="form-check">
                                                {!! Form::radio('uso_de_hormonios', 'Sim',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Sim</label>
                                                {!! Form::radio('uso_de_hormonios', 'Não',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <label for="">Qual?</label>
                                        <input type="text" class="form-control" placeholder="Quais..."
                                            value="{{old('uso_de_hormonios_quais')}}" name="uso_de_hormonios_quais">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Toma anticoncepcional?</label>

                                            <div class="form-check">
                                                {!! Form::radio('toma_anticoncepcional', 'Sim',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Sim</label>
                                                {!! Form::radio('toma_anticoncepcional', 'Não',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <label for="">Qual?</label>
                                        <input type="text" class="form-control" placeholder="Quais..."
                                            value="{{old('toma_anticoncepcional_quais')}}"
                                            name="toma_anticoncepcional_quais">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="">Já teve COVID 19?</label>

                                            <div class="form-check">
                                                {!! Form::radio('teve_covid_19', 'Sim',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Sim</label>
                                                {!! Form::radio('teve_covid_19', 'Não',
                                                ['class'=>'form-check-input'])
                                                !!}
                                                <label for="" class="form-check-label">Não</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="">Quanto tempo?</label>
                                        <input type="text" class="form-control" placeholder="0"
                                            value="{{old('teve_covid_19_qtd_tempo')}}" name="teve_covid_19_qtd_tempo">
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

                                        <div class="form-check">
                                            {!! Form::radio('voce_esta_separado', 'Sim',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Sim</label>
                                            {!! Form::radio('voce_esta_separado', 'Não',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Não</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="">A quanto tempo?</label>
                                        <input type="text" class="form-control" placeholder="Tempo..."
                                            value="{{old('expectativa')}}" name="expectativa">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="">Existe alguém contra você operar?</label>

                                        <div class="form-check">
                                            {!! Form::radio('alguem_contra_vc_operar', 'Sim',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Sim</label>
                                            {!! Form::radio('alguem_contra_vc_operar', 'Não',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Não</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <label for="">Quém?</label>
                                        <input type="text" class="form-control" placeholder="Quém..."
                                            value="{{old('alguem_contra_vc_operar_quem')}}"
                                            name="alguem_contra_vc_operar_quem">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Qual sua expectativa sobre a cirurgia? Em relação ao
                                            resultado?</label>
                                        <input type="text" class="form-control" placeholder="Especifique..."
                                            value="{{old('expectativa')}}" name="expectativa">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="">Alguma perda recente? </label>

                                        <div class="form-check">
                                            {!! Form::radio('alguma_perda_recente', 'Sim',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Sim</label>
                                            {!! Form::radio('alguma_perda_recente', 'Não',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Não</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <label for="">Qual perda?</label>
                                        <input type="text" class="form-control" placeholder="Especifique..."
                                            value="{{old('alguma_perda_recente_qual')}}"
                                            name="alguma_perda_recente_qual">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label for="">Já fez tratamento para depressão ou outro problema de ordem
                                            psiquiátrica ou psicológica?</label>

                                        <div class="form-check">
                                            {!! Form::radio('fez_tratamento_para_depressao', 'Sim',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Sim</label>
                                            {!! Form::radio('fez_tratamento_para_depressao', 'Não',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Não</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="">Quanto tempo ?</label>
                                        <input type="text" class="form-control" placeholder="Tempo..."
                                            value="{{old('fez_tratamento_para_depressao_qtd_tempo')}}"
                                            name="fez_tratamento_para_depressao_qtd_tempo">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Como você se considera emocionalmente?</label>
                                        <input type="text" class="form-control" placeholder="Tempo..."
                                            value="{{old('avaliar_emocionalmente')}}" name="avaliar_emocionalmente">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Você está seriamente preocupado (a) de que uma parte do seu corpo
                                            é diferente?</label>

                                        <div class="form-check">
                                            {!! Form::radio('voce_esta_seriamente_preocupado', 'Sim',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Sim</label>
                                            {!! Form::radio('voce_esta_seriamente_preocupado', 'Não',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for=""> Você se observa no espelho de forma atenta e repetitiva? </label>

                                        <div class="form-check">
                                            {!! Form::radio('voce_se_observa_no_espelho', 'Sim',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Sim</label>
                                            {!! Form::radio('voce_se_observa_no_espelho', 'Não',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Você evita olhar-se no espelho para não ficar tão
                                            preocupado?</label>

                                        <div class="form-check">
                                            {!! Form::radio('voce_evita_olharse_no_espelho', 'Sim',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Sim</label>
                                            {!! Form::radio('voce_evita_olharse_no_espelho', 'Não',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for=""> Você se preocupa de que outras pessoas possam estar observando,
                                            falando ou zombando de ser defeito?</label>

                                        <div class="form-check">
                                            {!! Form::radio('pessoas_possam_estar_observando', 'Sim',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Sim</label>
                                            {!! Form::radio('pessoas_possam_estar_observando', 'Não',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Você tenta esconder ou camuflar com as mãos, maquiagem ou
                                            roupas?</label>

                                        <div class="form-check">
                                            {!! Form::radio('voce_tenta_esconder_ou_camuflar', 'Sim',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Sim</label>
                                            {!! Form::radio('voce_tenta_esconder_ou_camuflar', 'Não',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Você acredita que uma cirurgia plástica poderá mudar radicalmente
                                            a sua vida, corrigindo o defeito que lhe incomoda?</label>

                                        <div class="form-check">
                                            {!!
                                            Form::radio('acredita_que_uma_cirurgia_plastica_podera_mudar_radicalmente',
                                            'Sim',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Sim</label>
                                            {!!
                                            Form::radio('acredita_que_uma_cirurgia_plastica_podera_mudar_radicalmente',
                                            'Não',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Você negligenciou suas atividades por causa do defeito?</label>

                                        <div class="form-check">
                                            {!! Form::radio('voce_negligenciou_suas_atividades', 'Sim',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Sim</label>
                                            {!! Form::radio('voce_negligenciou_suas_atividades', 'Não',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Este defeito lhe causa raiva, impaciência, agressividade,
                                            principalmente no relacionamento com parentes, amigos ou colegas de
                                            trabalho?</label>

                                        <div class="form-check">
                                            {!! Form::radio('voce_negligenciou_suas_atividades', 'Sim',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Sim</label>
                                            {!! Form::radio('voce_negligenciou_suas_atividades', 'Não',
                                            ['class'=>'form-check-input'])
                                            !!}
                                            <label for="" class="form-check-label">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Nesses momentos, você quebra algum objeto, dá murros ou chuta
                                            paredes e portas? </label>
                                        <input type="text" class="form-control" placeholder="Tempo..."
                                            value="{{old('voce_quebra_algum_objeto')}}" name="voce_quebra_algum_objeto">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="">Seu desespero é tamanho a ponto de desejar morrer, ferir-se ou
                                            prejudicar-se em função desse desespero? </label>
                                        <input type="text" class="form-control" placeholder="Tempo..."
                                            value="{{old('seu_desespero_e_tamanho_a_ponto_de_desejar_morrer')}}"
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