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
            $table->boolean('hc_doenca_atividade')->default(false);
            $table->string('hc_doenca_atividade_qual')->nullable();
            $table->boolean('hc_doenca_passado')->default(false);
            $table->string('hc_doenca_passado_qual')->nullable();
            $table->boolean('hc_patologia')->default(false);
            $table->string('hc_patologia_qual')->nullable();
            $table->boolean('hc_alergia')->default(false);
            $table->string('hc_alergia_qual')->nullable();
            $table->boolean('hc_hospitalizado')->default(false);
            $table->string('hc_hospitalizado_qual')->nullable();
            $table->boolean('hc_cirurgia')->default(false);
            $table->string('hc_cirurgia_qual')->nullable();
            $table->boolean('hc_medicamento')->default(false);
            $table->string('hc_medicamento_qual')->nullable();
            $table->boolean('hc_limitacao')->default(false);
            $table->string('hc_limitacao_qual')->nullable();
            $table->boolean('hc_consciencia')->default(false);
            $table->string('hc_consciencia_obs')->nullable();
            $table->boolean('hc_insonia')->default(false);
            $table->string('hc_insonia_obs')->nullable();

            // HISTORICO CLINICO FAMILIAR
            $table->boolean('hcf_pai')->default(false);
            $table->string('hcf_pai_qual')->nullable();
            $table->boolean('hcf_mae')->default(false);
            $table->string('hcf_mae_qual')->nullable();
            $table->boolean('hcf_irmaos')->default(false);
            $table->string('hcf_irmaos_qual')->nullable();
            $table->boolean('hcf_avo1')->default(false);
            $table->string('hcf_avo1_qual')->nullable();
            $table->boolean('hcf_avo0')->default(false);
            $table->string('hcf_avo0_qual')->nullable();
            
            // HISTÓRICO PSICOSSCOCIAL
            $table->boolean('hp_distraido')->default(false);
            $table->boolean('hp_hiperativa')->default(false);
            $table->boolean('hp_nervosa')->default(false);
            $table->boolean('hp_calma')->default(false);
            $table->boolean('hp_expressa_necessidades')->default(false);
            $table->boolean('hp_adapta_situacao')->default(false);
            $table->boolean('hp_amizades')->default(false);
            $table->boolean('hp_alimentacao')->default(false);
            $table->boolean('hp_depressao')->default(false);
            
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
            $table->text('ad_ativa')->nullable();
            $table->text('ad_gosta_treinar')->nullable();
            $table->text('ad_aulas_coletivas')->nullable();
            $table->text('ad_exercicio_personalizado')->nullable();
            $table->text('ad_exercicio_tipo')->nullable();
            $table->text('ad_esportes')->nullable();
            $table->text('ad_treinos_acompanhados')->nullable();
            $table->text('ad_treinos_por_semana')->nullable();
            $table->text('ad_treinos_horarios')->nullable();
            $table->text('ad_treinos_disponibilidade')->nullable();
            $table->text('ad_treinos_objetivos')->nullable();
            $table->text('ad_treinos_prazo')->nullable();
            $table->text('ad_sono_horas')->nullable();
            $table->text('ad_sono_cochilo')->nullable();
            $table->text('ad_sono_qualidade')->nullable();
            $table->text('ad_alimentacao')->nullable();
            $table->text('ad_nutricionista')->nullable();
            $table->text('ad_ergogenico')->nullable();
            $table->text('ad_ocupacao')->nullable();
            
            // RESULTADO DA AVALIAÇÃO 
            $table->text('rf_historico_clinico')->nullable();
            $table->text('rf_historico_familiar')->nullable();
            $table->text('rf_historico_piscossocial')->nullable();
            $table->text('rf_bem_estar')->nullable();
            $table->text('rf_atividades_diarias')->nullable();

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
