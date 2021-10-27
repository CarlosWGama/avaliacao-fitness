<h1 style="text-align:center;">Anamnese - #{{$anamnese->id}}</h1>

<p><b>Aluno:</b> {{$anamnese->aluno->nome}}</p>
<p><b>Sexo:</b> {{$anamnese->aluno->sexo == 'm' ? 'Masculino': 'Feminino'}}</p>
<p><b>Email:</b> {{$anamnese->aluno->email}}</p>
<p><b>Data de Nascimento:</b> {{date('d/m/Y', strtotime($anamnese->aluno->data_nascimento))}}</p>
<p><b>Telefone:</b> {{$anamnese->aluno->telefone}}</p>
<p><b>Endereço:</b> {{$anamnese->aluno->estado}}, {{$anamnese->aluno->cidade}}, {{$anamnese->aluno->endereco}}</p>
<p><b>Data da Anamnese:</b> {{date('d/m/Y', strtotime($anamnese->created_at))}}</p>



<style>
    h3 { text-align: center; background-color: lightgray; padding: 10px; }
    table {width: 100%}
    td { padding:5px 0px; border-bottom: 1px solid grey; width: 50%; }
</style>

{{--================================================== Histórico Clínico ==================================================--}}
<h3>Histórico Clínico</h3>

<table>
    <tr>
        <td style="text-align: center; font-weight:bold">Pergunta</td>
        <td style="text-align: center; font-weight:bold">Resposta</td>
    </td>
    <tr>
       <td>1. Atualmente algum um médico lhe disse que você possui alguma doença e recomendou que só fizesse atividade física sob supervisão médica?*</td>
        <td align="right"> 
            {{($anamnese->hc_doenca_atividade) ? 'Sim' : 'Não' }}
            @if ($anamnese->hc_doenca_atividade)
            <br/>
            ({{$anamnese->hc_doenca_atividade_qual}})
            @endif
        </td>
    </tr>
    {{-- ------------------------------------------------ --}}
    <!-- hc_doenca_passado -->
    <tr>
        <td>2. Já apresentou alguma doença no passado?*</td>
        <td align="right">
            {{($anamnese->hc_doenca_passado) ? 'Sim' : 'Não' }}
            @if ($anamnese->hc_doenca_passado)
            <br/>
            ({{$anamnese->hc_doenca_passado_qual}})
            @endif
        </td>
    </tr>
    {{-- ------------------------------------------------- --}}
    <!-- hc_patologia -->
    <tr>
        <td>3. Apresenta alguma patologia?*</td>
        
        <td align="right">
            {{($anamnese->hc_patologia) ? 'Sim' : 'Não' }}
            @if ($anamnese->hc_patologia)
            <br/>
            ({{$anamnese->hc_patologia_qual}})
            @endif
        </td>
    </tr>
    {{-- ------------------------------------------------- --}}
    <!-- hc_alergia -->
    <tr>
        <td>4. Apresenta algum tipo de alergia?*</td>
        
        <td align="right">
            {{($anamnese->hc_alergia) ? 'Sim' : 'Não' }}
            @if ($anamnese->hc_alergia)
            <br/>
            ({{$anamnese->hc_alergia_qual}})
            @endif
        </td>
    </tr>
    {{-- ------------------------------------------------- --}}
    <!-- hc_hospitalizado -->
    <tr>
        <td>5. Já teve hospitalizado? *</td>
        
        <td align="right">
            {{($anamnese->hc_hospitalizado) ? 'Sim' : 'Não' }}
            @if ($anamnese->hc_hospitalizado)
            <br/>
            ({{$anamnese->hc_hospitalizado_qual}})
            @endif
        </td>
    </tr>
    {{-- ------------------------------------------------- --}}
    <!-- hc_cirurgia -->
    <tr>
        <td>6. Fez alguma cirurgia? *</td>
        
        <td align="right">
            {{($anamnese->hc_cirurgia) ? 'Sim' : 'Não' }}
            @if ($anamnese->hc_cirurgia)
            <br/>
            ({{$anamnese->hc_cirurgia_qual}})
            @endif
        </td>
    </tr>
    {{-- ------------------------------------------------- --}}
    <!-- hc_medicamento -->
    <tr>
        <td>7. Toma algum tipo de medicamento?*</td>
        
        <td align="right">
            {{($anamnese->hc_medicamento) ? 'Sim' : 'Não' }}
            @if ($anamnese->hc_medicamento)
            <br/>
            ({{$anamnese->hc_medicamento_qual}})
            @endif
        </td>
    </tr>
    {{-- ------------------------------------------------- --}}
    <!-- hc_limitacao -->
    <tr>
        <td>8. Tem alguma limitação articular?*</td>
        
        <td align="right">
            {{($anamnese->hc_limitacao) ? 'Sim' : 'Não' }}
            @if ($anamnese->hc_limitacao)
            <br/>
            ({{$anamnese->hc_limitacao_qual}})
            @endif
        </td>
    </tr>
    {{-- ------------------------------------------------- --}}
    <!-- hc_consciencia -->
    <tr>
        <td>9. Você tende a perder a consciência ou cair, como resultado de tonteira?*</td>
        
        <td align="right">
            {{($anamnese->hc_consciencia) ? 'Sim' : 'Não' }}
            @if ($anamnese->hc_consciencia)
            <br/>
            ({{$anamnese->hc_consciencia_obs}})
            @endif
        </td>
    </tr>
    {{-- ------------------------------------------------- --}}
    <!-- hc_insonia -->
    <tr>
        <td>10. Possui estado de insônia?*</td>
        
        <td align="right">
            {{($anamnese->hc_insonia) ? 'Sim' : 'Não' }}
            @if ($anamnese->hc_insonia)
            <br/>
            ({{$anamnese->hc_insonia_obs}})
            @endif
        </td>
    </tr>
</table>

{{--================================================== Histórico Clínico Familiar ===============================================--}}
<h3>Histórico Clínico Familiar</h3>
<table>
    <tr>
        <td style="text-align: center; font-weight:bold">Pergunta</td>
        <td style="text-align: center; font-weight:bold">Resposta</td>
    </td>
    {{-- ------------------------------------------------- --}}
    <!-- hcf_pai -->
    <tr>
        <td>1. Pai apresenta alguma patologia? *</td>
        
        <td align="right">
            {{($anamnese->hcf_pai) ? 'Sim' : 'Não' }}
            @if ($anamnese->hcf_pai)
            <br/>
            ({{$anamnese->hcf_pai_qual}})
            @endif
        </td>
    </tr>
    {{-- ------------------------------------------------- --}}
    <!-- hcf_mae -->
    <tr>
        <td>2. Mãe apresenta alguma patologia? *</td>
        
        <td align="right">
            {{($anamnese->hcf_mae) ? 'Sim' : 'Não' }}
            @if ($anamnese->hcf_mae)
            <br/>
            ({{$anamnese->hcf_mae_qual}})
            @endif
        </td>
    </tr>
    {{-- ------------------------------------------------- --}}
    <!-- hcf_irmaos -->
    <tr>
        <td>3. Irmão (ã) apresenta alguma patologia? *</td>
        
        <td align="right">
            {{($anamnese->hcf_irmaos) ? 'Sim' : 'Não' }}
            @if ($anamnese->hcf_irmaos)
            <br/>
            ({{$anamnese->hcf_irmaos_qual}})
            @endif
        </td>
    </tr>
    {{-- ------------------------------------------------- --}}
    <!-- hcf_avo1 -->
    <tr>
        <td>4. Avô apresenta alguma patologia? *</td>
        
        <td align="right">
            {{($anamnese->hcf_avo1) ? 'Sim' : 'Não' }}
            @if ($anamnese->hcf_avo1)
            <br/>
            ({{$anamnese->hcf_avo1_qual}})
            @endif
        </td>
    </tr>
    {{-- ------------------------------------------------- --}}
    <!-- hcf_avo0 -->
    <tr>
        <td>5. Avó apresenta alguma patologia? *</td>
        
        <td align="right">
            {{($anamnese->hcf_avo0) ? 'Sim' : 'Não' }}
            @if ($anamnese->hcf_avo0)
            <br/>
            ({{$anamnese->hcf_avo0_qual}})
            @endif
        </td>
    </tr>
</table>

{{--================================================== Histórico Psicossocial ===============================================--}}
<h3>Histórico Psicossocial</h3>
<table>
    <tr>
        <td style="text-align: center; font-weight:bold">Pergunta</td>
        <td style="text-align: center; font-weight:bold">Resposta</td>
    </td>
    {{-- ------------------------------------------------- --}}
    <!-- hp_distraido -->
    <tr>
        <td>1. Você se considera uma pessoa distraída?*</td>
        <td align="right"> {{($anamnese->hp_distraido) ? 'Sim' : 'Não' }} </td>
    </tr>
    
    {{-- ------------------------------------------------- --}}
    <!-- hp_hiperativa -->
    <tr>
        <td>2. Você se considera uma pessoa hiperativa?*</td>
        <td align="right"> {{($anamnese->hp_hiperativa) ? 'Sim' : 'Não' }} </td>
    </tr>
    {{-- ------------------------------------------------- --}}
    <!-- hp_nervosa -->
    <tr>
        <td>3. Você se considera uma pessoa nervosa?*</td>
        <td align="right"> {{($anamnese->hp_nervosa) ? 'Sim' : 'Não' }} </td>
    </tr>
    {{-- ------------------------------------------------- --}}
    <!-- hp_calma -->
    <tr>
        <td>4. Você se considera uma pessoa calma?*</td>
        <td align="right"> {{($anamnese->hp_calma) ? 'Sim' : 'Não' }} </td>
    </tr>
    
    {{-- ------------------------------------------------- --}}
    <!-- hp_expressa_necessidades -->
    <tr>
        <td>5. Você se considera uma pessoa que expressa suas necessidades?*</td>
        <td align="right"> {{($anamnese->hp_expressa_necessidades) ? 'Sim' : 'Não' }} </td>
    </tr>
    
    {{-- ------------------------------------------------- --}}
    <!-- hp_adapta_situacao -->
    <tr>
        <td>6. Você se considera uma pessoa que se adapta a situações adversas? *</td>
        <td align="right"> {{($anamnese->hp_adapta_situacao) ? 'Sim' : 'Não' }} </td>
    </tr>
    
    {{-- ------------------------------------------------- --}}
    <!-- hp_amizades -->
    <tr>
        <td>7. Consegue fazer amizades com facilidade?*</td>
        <td align="right"> {{($anamnese->hp_amizades) ? 'Sim' : 'Não' }} </td>
    </tr>
    
    {{-- ------------------------------------------------- --}}
    <!-- hp_alimentacao -->
    <tr>
        <td>8. Tomou álcool ou se alimentou mal decorrente de alguma decepção? *</td>
        <td align="right">{{($anamnese->hp_alimentacao) ? 'Sim' : 'Não' }} </td>
    </tr>
    
    {{-- ------------------------------------------------- --}}
    <!-- hp_depressao -->
    <tr>
        <td>9. Já foi diagnosticado com depressão?*</td>
        <td align="right">{{($anamnese->hp_depressao) ? 'Sim' : 'Não' }} </td>
    </tr>
</table>

{{--================================================== Escala de bem estar ==================================================--}}
<h3>Escala de bem estar</h3>
<table>
    <tr>
        <td style="text-align: center; font-weight:bold">Pergunta</td>
        <td style="text-align: center; font-weight:bold">Resposta</td>
    </td>
    {{-- ------------------------------------------------- --}}
    <!-- ebe_solitario -->
    <tr>
        <td>1. Ultimamente me sinto solitário porque tenho poucos amigos íntimos com quem eu possa compartilhar minhas preocupações.*</td>
        <td align="right">
            @if($anamnese->ebe_solitario == 1) 1 Discordo totalmente @endif
            @if($anamnese->ebe_solitario == 2)  2 Discordo parcialmente @endif
            @if($anamnese->ebe_solitario == 3)  3 Discordo pouco @endif
            @if($anamnese->ebe_solitario == 4)  4 Concordo pouco @endif
            @if($anamnese->ebe_solitario == 5)  5 Concordo parcialmente @endif
            @if($anamnese->ebe_solitario == 6)  6 Concordo totalmente @endif
        </td>
    </tr>
    
   
    {{-- ------------------------------------------------- --}}
    <!-- ebe_expressao_opiniao -->
    <tr>
        <td>2. Não tenho medo de expressar minhas opiniões, mesmo quando elas são contrárias às opiniões da maioria.*</td>
        <td align="right">
            @if($anamnese->ebe_expressao_opiniao == 1)  1 Discordo totalmente @endif
            @if($anamnese->ebe_expressao_opiniao == 2)  2 Discordo parcialmente @endif
            @if($anamnese->ebe_expressao_opiniao == 3)  3 Discordo pouco @endif
            @if($anamnese->ebe_expressao_opiniao == 4)  4 Concordo pouco @endif
            @if($anamnese->ebe_expressao_opiniao == 5)  5 Concordo parcialmente @endif
            @if($anamnese->ebe_expressao_opiniao == 6)  6 Concordo totalmente @endif
        </td>
    </tr>
    
   
    {{-- ------------------------------------------------- --}}
    <!-- ebe_controle_situacao -->
    <tr>
        <td>3. Sinto que tenho controle sobre as situações do meu dia.*</td>
        <td align="right">
            @if($anamnese->ebe_controle_situacao == 1)  1 Discordo totalmente @endif
            @if($anamnese->ebe_controle_situacao == 2)  2 Discordo parcialmente @endif
            @if($anamnese->ebe_controle_situacao == 3)  3 Discordo pouco @endif
            @if($anamnese->ebe_controle_situacao == 4)  4 Concordo pouco @endif
            @if($anamnese->ebe_controle_situacao == 5)  5 Concordo parcialmente @endif
            @if($anamnese->ebe_controle_situacao == 6)  6 Concordo totalmente @endif
        </td>
    </tr>
    
   
    {{-- ------------------------------------------------- --}}
    <!-- ebe_confiante -->
    <tr>
        <td>4. De forma geral me sinto confiante e positivo sobre mim mesmo*</td>
        <td align="right">
            @if($anamnese->ebe_confiante == 1)  1 Discordo totalmente @endif
            @if($anamnese->ebe_confiante == 2)  2 Discordo parcialmente @endif
            @if($anamnese->ebe_confiante == 3)  3 Discordo pouco @endif
            @if($anamnese->ebe_confiante == 4)  4 Concordo pouco @endif
            @if($anamnese->ebe_confiante == 5)  5 Concordo parcialmente @endif
            @if($anamnese->ebe_confiante == 6)  6 Concordo totalmente @endif
        </td>
    </tr>
    
   
    {{-- ------------------------------------------------- --}}
    <!-- ebe_idade_desenvolvimento -->
    <tr>
        <td>5. Em minha opinião, pessoas de todas as idades são capazes de continuar crescendo e se desenvolvendo.*</td>
        <td align="right">
            @if($anamnese->ebe_idade_desenvolvimento == 1)  1 Discordo totalmente @endif
            @if($anamnese->ebe_idade_desenvolvimento == 2)  2 Discordo parcialmente @endif
            @if($anamnese->ebe_idade_desenvolvimento == 3)  3 Discordo pouco @endif
            @if($anamnese->ebe_idade_desenvolvimento == 4)  4 Concordo pouco @endif
            @if($anamnese->ebe_idade_desenvolvimento == 5)  5 Concordo parcialmente @endif
            @if($anamnese->ebe_idade_desenvolvimento == 6)  6 Concordo totalmente @endif
        </td>
    </tr>
    

    {{-- ------------------------------------------------- --}}
    <!-- ebe_atividades_desinteressantes -->
    <tr>
        <td>6. Na maioria das vezes acho minhas atividades desinteressantes e banais.*</td>
        <td align="right">
            @if($anamnese->ebe_atividades_desinteressantes == 1)  1 Discordo totalmente @endif
            @if($anamnese->ebe_atividades_desinteressantes == 2)  2 Discordo parcialmente @endif
            @if($anamnese->ebe_atividades_desinteressantes == 3)  3 Discordo pouco @endif
            @if($anamnese->ebe_atividades_desinteressantes == 4)  4 Concordo pouco @endif
            @if($anamnese->ebe_atividades_desinteressantes == 5)  5 Concordo parcialmente @endif
            @if($anamnese->ebe_atividades_desinteressantes == 6)  6 Concordo totalmente @endif
        </td>
    </tr>
    

    {{-- ------------------------------------------------- --}}
    <!-- ebe_autoestima -->
    <tr>
        <td>7. Gosto do jeito que sou.*</td>
        <td align="right">
            @if($anamnese->ebe_autoestima == 1)  1 Discordo totalmente @endif
            @if($anamnese->ebe_autoestima == 2)  2 Discordo parcialmente @endif
            @if($anamnese->ebe_autoestima == 3)  3 Discordo pouco @endif
            @if($anamnese->ebe_autoestima == 4)  4 Concordo pouco @endif
            @if($anamnese->ebe_autoestima == 5)  5 Concordo parcialmente @endif
            @if($anamnese->ebe_autoestima == 6)  6 Concordo totalmente @endif
        </td>
    </tr>
    

    {{-- ------------------------------------------------- --}}
    <!-- ebe_convencer_coisas_contrarias -->
    <tr>
        <td>8. As pessoas dificilmente me convencem a fazer coisas que eu não queira.*</td>
        <td align="right">
            @if($anamnese->ebe_convencer_coisas_contrarias == 1)  1 Discordo totalmente @endif
            @if($anamnese->ebe_convencer_coisas_contrarias == 2)  2 Discordo parcialmente @endif
            @if($anamnese->ebe_convencer_coisas_contrarias == 3)  3 Discordo pouco @endif
            @if($anamnese->ebe_convencer_coisas_contrarias == 4)  4 Concordo pouco @endif
            @if($anamnese->ebe_convencer_coisas_contrarias == 5)  5 Concordo parcialmente @endif
            @if($anamnese->ebe_convencer_coisas_contrarias == 6)  6 Concordo totalmente @endif
        </td>
    </tr>
    

    {{-- ------------------------------------------------- --}}
    <!-- ebe_ativa -->
    <tr>
        <td>9. Sou uma pessoa ativa para executar os planos que estipulei.*</td>
        <td align="right">
            @if($anamnese->ebe_ativa == 1)  1 Discordo totalmente @endif
            @if($anamnese->ebe_ativa == 2)  2 Discordo parcialmente @endif
            @if($anamnese->ebe_ativa == 3)  3 Discordo pouco @endif
            @if($anamnese->ebe_ativa == 4)  4 Concordo pouco @endif
            @if($anamnese->ebe_ativa == 5)  5 Concordo parcialmente @endif
            @if($anamnese->ebe_ativa == 6)  6 Concordo totalmente @endif
        </td>
    </tr>
    

    {{-- ------------------------------------------------- --}}
    <!-- ebe_amizade_deslozado -->
    <tr>
        <td>10. Em relação às amizades, eu geralmente me sinto deslocado.*</td>
        <td align="right">
            @if($anamnese->ebe_amizade_deslozado == 1)  1 Discordo totalmente @endif
            @if($anamnese->ebe_amizade_deslozado == 2)  2 Discordo parcialmente @endif
            @if($anamnese->ebe_amizade_deslozado == 3)  3 Discordo pouco @endif
            @if($anamnese->ebe_amizade_deslozado == 4)  4 Concordo pouco @endif
            @if($anamnese->ebe_amizade_deslozado == 5)  5 Concordo parcialmente @endif
            @if($anamnese->ebe_amizade_deslozado == 6)  6 Concordo totalmente @endif
        </td>
    </tr>
</table>

{{--================================================== Atividades diárias ==================================================--}}
<h3>Atividades diárias</h3>
<table>
    <tr>
        <td style="text-align: center; font-weight:bold">Pergunta</td>
        <td style="text-align: center; font-weight:bold">Resposta</td>
    </td>
    <!-- ad_ativa -->
    <tr>
        <td>1. Considera uma pessoa ativa?</td>
        <td align="right">{{$anamnese->ad_ativa}}</td>
    </tr>
    
    <!-- ad_gosta_treinar -->
    <tr>
        <td>2. Você gosta de treinar ou treina por indicação médica, estética ou por algum reconhecimento social?</td>
        <td align="right">{{$anamnese->ad_gosta_treinar}}</td>
    </tr>
    
    <!-- ad_aulas_coletivas -->
    <tr>
        <td>3. Gosta de fazer aulas coletivas? </td>
        <td align="right">{{$anamnese->ad_aulas_coletivas}}</td>
    </tr>
    
    <!-- ad_exercicio_personalizado -->
    <tr>
        <td>4. Já fez exercícios personalizados? </td>
        <td align="right">{{$anamnese->ad_exercicio_personalizado}}</td>
    </tr>
    
    <!-- ad_exercicio_tipo -->
    <tr>
        <td>5. Gosta de exercícios contínuos, intermitentes ou não tem preferência?</td>
        <td align="right">{{$anamnese->ad_exercicio_tipo}}</td>
    </tr>
    
    <!-- ad_esportes -->
    <tr>
        <td>6. Pratica ou gosta de algum esporte?</td>
        <td align="right">{{$anamnese->ad_esportes}}</td>
    </tr>
    
    <!-- ad_treinos_acompanhados -->
    <tr>
        <td>7. Gosta de treinar sozinho, dupla ou em grupo?</td>
        <td align="right">{{$anamnese->ad_treinos_acompanhados}}</td>
    </tr>
       
    <!-- ad_treinos_por_semana -->
    <tr>
        <td>8. Quantas vezes pretende treinar por semana?  </td>
        <td align="right">{{$anamnese->ad_treinos_por_semana}}</td>
    </tr>
    
    <!-- ad_treinos_horarios -->
    <tr>
        <td>9. Pretende estipular um horário específico de treino?</td>
        <td align="right">{{$anamnese->ad_treinos_horarios}}</td>
    </tr>
    
    <!-- ad_treinos_disponibilidade -->
    <tr>
        <td>10. Qual a sua disponibilidade de tempo para treinar?</td>
        <td align="right">{{$anamnese->ad_treinos_disponibilidade}}</td>
    </tr>
    
    <!-- ad_treinos_objetivos -->
    <tr>
        <td>11. Qual o seu objetivo com os treinos?</td>
        <td align="right">{{$anamnese->ad_treinos_objetivos}}</td>
    </tr>
    
    <!-- ad_treinos_prazo -->
    <tr>
        <td>12. Em que tempo pretende alcançar o objetivo?</td>
        <td align="right">{{$anamnese->ad_treinos_prazo}}</td>
    </tr>
    
    <!-- ad_sono_horas -->
    <tr>
        <td>13.	Em média quanto tempo dorme por dia?</td>
        <td align="right">{{$anamnese->ad_sono_horas}}</td>
    </tr>
    
    <!-- ad_sono_cochilo -->
    <tr>
        <td>14. Consegue tirar um cochilo durante o dia?</td>
        <td align="right">{{$anamnese->ad_sono_cochilo}}</td>
    </tr>
    
    <!-- ad_sono_qualidade -->
    <tr>
        <td>15. Qual a qualidade do seu sono?</td>
        <td align="right">{{$anamnese->ad_sono_qualidade}}</td>
    </tr>
    
    <!-- ad_alimentacao -->
    <tr>
        <td>16. Se alimenta bem? </td>
        <td align="right">{{$anamnese->ad_alimentacao}}</td>
    </tr>
    
    <!-- ad_nutricionista -->
    <tr>
        <td>17. Pretende procurar um (a) nutricionista?</td>
        <td align="right">{{$anamnese->ad_nutricionista}}</td>
    </tr>
    
    <!-- ad_ergogenico -->
    <tr>
        <td>18. Atualmente toma ou já tomou algum tipo de ergogênico?</td>
        <td align="right">{{$anamnese->ad_ergogenico}}</td>
    </tr>
    
    <!-- ad_ocupacao -->
    <tr>
        <td>19. Trabalha, estuda ou faz outra atividade? </td>
        <td align="right">{{$anamnese->ad_ocupacao}}</td>
    </tr>
</table>

{{--==================================================Resultado da Avaliação ==================================================--}}
<h3>Resultado da Avaliação</h3>
<table>
    <tr>
        <td style="text-align: center; font-weight:bold">Pergunta</td>
        <td style="text-align: center; font-weight:bold">Resposta</td>
    </td>
    <!-- rf_historico_clinico -->
    <tr>
        <td>Histórico Clínico:</td>
        <td align="right">{{$anamnese->rf_historico_clinico}}</td>
    </tr>
    
    <!-- rf_historico_familiar -->
    <tr>
        <td>Histórico Familiar:</td>
        <td align="right">{{$anamnese->rf_historico_familiar}}</td>
    </tr>
    
    <!-- rf_historico_piscossocial -->
    <tr>
        <td>Histórico Psicossocial:</td>
        <td align="right">{{$anamnese->rf_historico_piscossocial}}</td>
    </tr>
    
    <!-- rf_bem_estar -->
    <tr>
        <td>Escala de Bem Estar:</td>
        <td align="right">{{$anamnese->rf_bem_estar}}</td>
    </tr>

    <!-- rf_atividades_diarias -->
    <tr>
        <td>Atividades Diárias:</td>
        <td align="right">{{$anamnese->rf_atividades_diarias}}</td>
    </tr>
</table>