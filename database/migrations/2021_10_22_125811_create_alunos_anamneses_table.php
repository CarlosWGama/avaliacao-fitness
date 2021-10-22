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

            // HISTÓRICO PSICOSSCOCIAL

            // ESCALA DE BEM ESTAR

            // ATIVIDADES DIARIAS
            
            // RESULTADO DA AVALIAÇÃO 

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
