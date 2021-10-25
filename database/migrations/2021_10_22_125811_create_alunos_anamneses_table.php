<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosAnamnesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos_anamneses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aluno_id')->references('id')->on('alunos');
            // HISTÓRICO CLINICO
            $table->boolean('hc_doenca_atividade');
            $table->string('hc_doenca_atividade_qual')->nullable;
            $table->boolean('hc_doenca_passado');
            $table->string('hc_doenca_passado_qual')->nullable;
            $table->boolean('hc_patologia');
            $table->string('hc_patologia_qual')->nullable;
            $table->boolean('hc_alergia');
            $table->string('hc_alergia_qual')->nullable;
            $table->boolean('hc_hospitalizado');
            $table->string('hc_hospitalizado_qual')->nullable;
            $table->boolean('hc_cirurgia');
            $table->string('hc_cirurgia_qual')->nullable;
            $table->boolean('hc_medicamento');
            $table->string('hc_medicamento_qual')->nullable;
            $table->boolean('hc_limitacao');
            $table->string('hc_limitacao_qual')->nullable;
            $table->boolean('hc_consciencia');
            $table->string('hc_consciencia_obs')->nullable;
            $table->boolean('hc_insonia');
            $table->string('hc_insonia_obs')->nullable;

            // HISTORICO CLINICO FAMILIAR
            $table->boolean('hcf_pai');
            $table->string('hcf_pai_qual')->nullable;
            $table->boolean('hcf_mae');
            $table->string('hcf_mae_qual')->nullable;
            $table->boolean('hcf_irmaos');
            $table->string('hcf_irmaos_qual')->nullable;
            $table->boolean('hcf_avo1');
            $table->string('hcf_avo1_qual')->nullable;
            $table->boolean('hcf_avo0');
            $table->string('hcf_avo0_qual')->nullable;
            
            // HISTÓRICO PSICOSSCOCIAL
            $table->boolean('hp_distraido');
            $table->boolean('hp_hiperativa');
            $table->boolean('hp_nervosa');
            $table->boolean('hp_calma');
            $table->boolean('hp_expressa_necessidades');
            $table->boolean('hp_adapta_situacao');
            $table->boolean('hp_amizades');
            $table->boolean('hp_alimentacao');
            $table->boolean('hp_depressao');
            
            // ESCALA DE BEM ESTAR
            $table->integer('ebe_solitario');
            $table->integer('ebe_expressao_opiniao');
            $table->integer('ebe_controle_situacao');
            $table->integer('ebe_confiante');
            $table->integer('ebe_idade_desenvolvimento');
            $table->integer('ebe_atividades_desinteressantes');
            $table->integer('ebe_autoestima');
            $table->integer('ebe_convencer_coisas_contrarias');
            $table->integer('ebe_ativa');
            $table->integer('ebe_amizade_deslozado');
            
            // ATIVIDADES DIARIAS
            $table->text('ad_ativa');
            $table->text('ad_gosta_treinar');
            $table->text('ad_aulas_coletivas');
            $table->text('ad_exercicio_personalizado');
            $table->text('ad_exercicio_tipo');
            $table->text('ad_esportes');
            $table->text('ad_treinos_acompanhados');
            $table->text('ad_treinos_por_semana');
            $table->text('ad_treinos_horarios');
            $table->text('ad_treinos_disponibilidade');
            $table->text('ad_treinos_objetivos');
            $table->text('ad_treinos_prazo');
            $table->text('ad_sono_horas');
            $table->text('ad_sono_cochilo');
            $table->text('ad_sono_qualidade');
            $table->text('ad_alimentacao');
            $table->text('ad_nutricionista');
            $table->text('ad_ergogenico');
            $table->text('ad_ocupacao');
            
            // RESULTADO DA AVALIAÇÃO 
            $table->text('rf_historico_clinico');
            $table->text('rf_historico_familiar');
            $table->text('rf_historico_piscossocial');
            $table->text('rf_bem_estar');
            $table->text('rf_atividades_diarias');

            $table->softDeletes();
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
        Schema::dropIfExists('alunos_anamneses');
    }
}
