<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$data->name}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <h2>Dados do cliente</h2>
                    Nome: {{$data->name}} <br>
                    E-mail: {{$data->email}} <br>
                    Data nascimento: {{$data->date_nasc}} <br>
                    Idade: {{$data->idade}} <br>
                    CPF: {{$data->cpf}} <br>
                    RG: {{$data->rg}} <br>
                    Peso: {{$data->peso}} <br>
                    Altura: {{$data->altura}} <br>

                    <h2>Endereço</h2>
                    Rua: {{$data->endereco}} <br>
                    Bairro: {{$data->bairro}} <br>
                    Cidade: {{$data->cidade}} <br>
                    CEP: {{$data->cep}} <br>
                    Profissão: {{$data->profissao}} <br>
                    Telefone: {{$data->fone}} <br>

                    <h2>Questionário</h2>
                    Tem filhos? {{$data->question->p_filhos == 0 ? 'Não' : 'Sim'}} <br>
                    Idade do ultimo filho? {{$data->question->idade_ultimo_filho}} <br>
                    Cesária? {{$data->question->cesaria == 0 ? 'Não' : 'Sim'}} <br>
                    Quantos? {{$data->question->qtd_cesaria}} <br>
                    Cirurgias Anteriores? {{$data->question->cirurgias_anteriores == 0 ? 'Não' : 'Sim'}} <br>
                    Quais? {{$data->question->cirurgias_ant_quais}} <br>
                    Alergia a medicamentos? {{$data->question->alergia_medic == 0 ? 'Não' : 'Sim'}} <br>
                    Quais? {{$data->question->alergia_medic_quais}} <br>
                    Fumante? {{$data->question->fuma == 0 ? 'Não' : 'Sim'}} <br>
                    Hipertensão? {{$data->question->hipertensao}} <br>
                    Diabetes? {{$data->question->diabetes}} <br>
                    Trombose? {{$data->question->trombose}} <br>
                    Faz uso de algum medicamento?{{$data->question->usa_medicamentos == 0 ? 'Não' : 'Sim'}} <br>
                    Qual? {{$data->question->usa_medicamentos_quais}} <br>
                    Já fez cirurgia plástica antes? {{$data->question->cirurgia_plastica == 0 ? 'Não' : 'Sim'}} <br>
                    Qual? {{$data->question->cirurgia_plastica_quais}} <br>

                    Já teve algum problema anestésico? {{$data->question->problema_anestesico == 0 ? 'Não' : 'Sim'}}
                    <br>
                    Qual? {{$data->question->problema_anestesico_quais}} <br>
                    Faz uso de anorexígenos? {{$data->question->uso_de_anorexigenos == 0 ? 'Não' : 'Sim'}} <br>
                    Qual? {{$data->question->uso_de_anorexigenos_quais}} <br>
                    Faz uso de hormônios? {{$data->question->uso_de_hormonios == 0 ? 'Não' : 'Sim'}} <br>
                    Qual? {{$data->question->uso_de_hormonios_quais}} <br>
                    Toma anticoncepcional? {{$data->question->toma_anticoncepcional == 0 ? 'Não' : 'Sim'}} <br>
                    Qual? {{$data->question->toma_anticoncepcional_quais}} <br>
                    Já teve COVID 19? {{$data->question->teve_covid_19 == 0 ? 'Não' : 'Sim'}} <br>
                    Quanto tempo? {{$data->question->teve_covid_19_qtd_tempo}} <br>

                    Há quanto tempo decidiu operar? {{$data->question->decidiu_operar_quando}} <br>
                    Qual sua motivação para a cirurgia? {{$data->question->motivaçao}} <br>
                    Existe alguém contra você operar ? {{$data->question->alguem_contra_vc_operar == 0 ? 'Não' : 'Sim'}}
                    <br>
                    Quem? {{$data->question->alguem_contra_vc_operar_quem}} <br>
                    Qual sua expectativa sobre a cirurgia? Em relação ao resultado? {{$data->question->expectativa}}
                    <br>
                    Você está separado (a) no momento? {{$data->question->voce_esta_separado == 0 ? 'Não' : 'Sim'}} <br>
                    Quanto tempo? {{$data->question->voce_esta_separado_qtd_tempo}} <br>
                    Alguma perda recente? {{$data->question->alguma_perda_recente == 0 ? 'Não' : 'Sim'}} <br>
                    Qual? {{$data->question->alguma_perda_recente_qual}} <br>
                    Já fez tratamento para depressão ou outro problema de ordem psiquiátrica ou psicológica?
                    {{$data->question->fez_tratamento_para_depressao == 0 ? 'Não' : 'Sim'}} <br>
                    Quanto tempo? {{$data->question->fez_tratamento_para_depressao_qtd_tempo}} <br>
                    Como você se considera emocionalmente? {{$data->question->avaliar_emocionalmente}} <br>
                    Você está seriamente preocupado (a) de que uma parte do seu corpo é diferente?
                    {{$data->question->voce_esta_seriamente_preocupado == 0 ? 'Não' : 'Sim'}} <br>
                    Você se observa no espelho de forma atenta e repetitiva?
                    {{$data->question->voce_se_observa_no_espelho == 0 ? 'Não' : 'Sim'}} <br>
                    Você evita olhar-se no espelho para não ficar tão preocupado?
                    {{$data->question->voce_evita_olharse_no_espelho == 0 ? 'Não' : 'Sim'}} <br>
                    Você se preocupa de que outras pessoas possam estar observando, falando ou zombando de ser defeito?
                    {{$data->question->pessoas_possam_estar_observando == 0 ? 'Não' : 'Sim'}} <br>
                    Você tenta esconder ou camuflar com as mãos, maquiagem ou roupas?
                    {{$data->question->voce_tenta_esconder_ou_camuflar == 0 ? 'Não' : 'Sim'}} <br>
                    Você acredita que uma cirurgia plástica poderá mudar radicalmente a sua vida, corrigindo o defeito
                    que lhe incomoda?
                    {{$data->question->acredita_que_uma_cirurgia_plastica_podera_mudar_radicalmente == 0 ? 'Não' : 'Sim'}}
                    <br>
                    Você negligenciou suas atividades por causa do defeito?
                    {{$data->question->voce_negligenciou_suas_atividades == 0 ? 'Não' : 'Sim'}} <br>
                    Este defeito lhe causa raiva, impaciência, agressividade, principalmente no relacionamento com
                    parentes, amigos ou colegas de trabalho?
                    {{$data->question->este_defeito_lhe_causa_raiva == 0 ? 'Não' : 'Sim'}} <br>
                    Nesses momentos, você quebra algum objeto, dá murros ou chuta paredes e portas?
                    {{$data->question->voce_quebra_algum_objeto}} <br>
                    Seu desespero é tamanho a ponto de desejar morrer, ferir-se ou prejudicar-se em função desse
                    desespero?
                    {{$data->question->seu_desespero_e_tamanho_a_ponto_de_desejar_morrer == 0 ? 'Não' : 'Sim'}} <br>
                </div>
            </div>
        </section>
    </div>
</body>

</html>