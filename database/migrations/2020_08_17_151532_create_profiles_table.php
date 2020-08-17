<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('p_filhos')->nullable();
            $table->string('idade_ultimo_filho', 2)->nullable();
           
            $table->string('cesaria')->nullable();
            $table->string('qtd_cesaria', 2)->nullable();
            
            $table->string('cirurgias_anteriores')->nullable();
            $table->text('cirurgias_ant_quais')->nullable();
            
            $table->string('alergia_medic')->nullable();
            $table->string('alergia_medic_quais')->nullable();
            
            $table->string('fuma')->nullable();
            $table->string('hipertensao')->nullable();
            $table->string('diabetes')->nullable();
            $table->string('trombose')->nullable();
            
            $table->string('usa_medicamentos')->nullable();
            $table->text('usa_medicamentos_quais')->nullable();
            
            $table->string('cirurgia_plastica', 10)->nullable();
            $table->text('cirurgia_plastica_quais')->nullable();

            $table->string('problema_anestesico', 10)->nullable();
            $table->text('problema_anestesico_quais')->nullable();

            $table->string('uso_de_anorexigenos', 10)->nullable();
            $table->text('uso_de_anorexigenos_quais')->nullable();

            $table->string('uso_de_hormonios')->nullable();
            $table->string('uso_de_hormonios_quais')->nullable();

            $table->string('toma_anticoncepcional')->nullable();
            $table->string('toma_anticoncepcional_quais')->nullable();

            $table->string('teve_covid_19')->nullable();
            $table->string('teve_covid_19_qtd_tempo')->nullable();

            $table->string('decidiu_operar_quando')->nullable(); //select 6 meses 1 ano +1 ano

            $table->string('motivaçao para a cirurgia')->nullable();
            
            $table->string('alguem_contra_vc_operar')->nullable();
            $table->string('alguem_contra_vc_operar_quem')->nullable();

            $table->string('expectativa')->nullable();

            $table->string('voce_esta_separado')->nullable();
            $table->string('voce_esta_separado_qtd_tempo')->nullable();

            $table->string('alguma_perda_recente')->nullable();
            $table->string('alguma_perda_recente_qual')->nullable();

            $table->string('fez_tratamento_para_depressao')->nullable();
            $table->string('fez_tratamento_para_depressao_qtd_tempo')->nullable();

            $table->string('avaliar_emocionalmente')->nullable();

            $table->string('voce_esta_seriamente_preocupado')->nullable();

            $table->string('voce_se_observa_no_espelho')->nullable();

            $table->string('voce_evita_olharse_no_espelho')->nullable();

            $table->string('pessoas_possam_estar_observando')->nullable();

            $table->string('voce_tenta_esconder_ou_camuflar')->nullable();

            $table->string('acredita_que_uma_cirurgia_plastica_podera_mudar_radicalmente')->nullable();

            $table->string('voce_negligenciou_suas_atividades')->nullable();

            $table->string('este_defeito_lhe_causa_raiva')->nullable();

            $table->string('voce_quebra_algum_objeto')->nullable();

            $table->string('seu_desespero_e_tamanho_a_ponto_de_desejar_morrer')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
