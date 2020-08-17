<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'p_filhos',
        'idade_ultimo_filho',
        'cesaria',
        'qtd_cesaria',
        'cirurgias_anteriores',
        'cirurgias_ant_quais',
        'alergia_medic',
        'alergia_medic_quais',
        'fuma',
        'hipertensao',
        'diabetes',
        'trombose',
        'usa_medicamentos',
        'usa_medicamentos_quais',
        'cirurgia_plastica',
        'cirurgia_plastica_quais',
        'problema_anestesico',
        'problema_anestesico_quais',
        'uso_de_anorexigenos',
        'uso_de_anorexigenos_quais',
        'uso_de_hormonios',
        'uso_de_hormonios_quais',
        'toma_anticoncepcional',
        'toma_anticoncepcional_quais',
        'teve_covid_19',
        'teve_covid_19_qtd_tempo',
        'decidiu_operar_quando',
        'motivaçao',
        'alguem_contra_vc_operar',
        'alguem_contra_vc_operar_quem',
        'expectativa',
        'voce_esta_separado',
        'voce_esta_separado_qtd_tempo',
        'alguma_perda_recente',
        'alguma_perda_recente_qual',
        'fez_tratamento_para_depressao',
        'fez_tratamento_para_depressao_qtd_tempo',
        'avaliar_emocionalmente',
        'voce_esta_seriamente_preocupado',
        'voce_se_observa_no_espelho',
        'voce_evita_olharse_no_espelho',
        'pessoas_possam_estar_observando',
        'voce_tenta_esconder_ou_camuflar',
        'acredita_que_uma_cirurgia_plastica_podera_mudar_radicalmente',
        'voce_negligenciou_suas_atividades',
        'este_defeito_lhe_causa_raiva',
        'voce_quebra_algum_objeto',
        'seu_desespero_e_tamanho_a_ponto_de_desejar_morrer'
    ];
}
