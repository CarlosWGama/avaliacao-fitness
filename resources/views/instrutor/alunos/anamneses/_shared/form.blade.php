{{--================================================== Histórico Clínico ==================================================--}}
<h3>Histórico Clínico</h3>
<section>
    
    <!-- hc_doenca_atividade -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">1. Atualmente algum um médico lhe disse que você possui alguma doença e recomendou que só fizesse atividade física sob supervisão médica?*</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" class="campo-habilitar" name="hc_doenca_atividade" data-campo="hc_doenca_atividade_qual" {{old('hc_doenca_atividade', $anamnese->hc_doenca_atividade) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>

    <!-- hc_doenca_atividade_qual -->
    <div class="form-group row" style="display:{{old('hc_doenca_atividade', $anamnese->hc_doenca_atividade) ? 'block' : 'none' }};" id="hc_doenca_atividade_qual">
        <label class="col-sm-2 col-form-label">Qual?</label>
        <div class="col-sm-10">
            <input type="text" name="hc_doenca_atividade_qual" value="{{old('hc_doenca_atividade_qual', $anamnese->hc_doenca_atividade_qual)}}" placeholder="qual?" class="form-control">
        </div>
    </div>
    <hr/>

    {{-- ------------------------------------------------ --}}
    <!-- hc_doenca_passado -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">2. Já apresentou alguma doença no passado?*</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" class="campo-habilitar" name="hc_doenca_passado" data-campo="hc_doenca_passado_qual" {{old('hc_doenca_passado', $anamnese->hc_doenca_passado) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>

    <!-- hc_doenca_passado_qual -->
    <div class="form-group row" style="display:{{old('hc_doenca_passado', $anamnese->hc_doenca_passado) ? 'block' : 'none' }};" id="hc_doenca_passado_qual">
        <label class="col-sm-2 col-form-label">Qual?</label>
        <div class="col-sm-10">
            <input type="text" name="hc_doenca_passado_qual" value="{{old('hc_doenca_passado_qual', $anamnese->hc_doenca_passado_qual)}}" placeholder="qual?" class="form-control">
        </div>
    </div>
    <hr/>

    {{-- ------------------------------------------------- --}}
    <!-- hc_patologia -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">3. Apresenta alguma patologia?*</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" class="campo-habilitar" name="hc_patologia" data-campo="hc_patologia_qual" {{old('hc_patologia', $anamnese->hc_patologia) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>

    <!-- hc_patologia_qual -->
    <div class="form-group row" style="display:{{old('hc_patologia', $anamnese->hc_patologia) ? 'block' : 'none' }};" id="hc_patologia_qual">
        <label class="col-sm-2 col-form-label">Qual?</label>
        <div class="col-sm-10">
            <input type="text" name="hc_patologia_qual" value="{{old('hc_patologia_qual', $anamnese->hc_patologia_qual)}}" placeholder="qual?" class="form-control">
        </div>
    </div>
    <hr/>

    {{-- ------------------------------------------------- --}}
    <!-- hc_alergia -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">4. Apresenta algum tipo de alergia?*</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" class="campo-habilitar" name="hc_alergia" data-campo="hc_alergia_qual" {{old('hc_alergia', $anamnese->hc_alergia) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>

    <!-- hc_alergia_qual -->
    <div class="form-group row" style="display:{{old('hc_alergia', $anamnese->hc_alergia) ? 'block' : 'none' }};" id="hc_alergia_qual">
        <label class="col-sm-2 col-form-label">Qual?</label>
        <div class="col-sm-10">
            <input type="text" name="hc_alergia_qual" value="{{old('hc_alergia_qual', $anamnese->hc_alergia_qual)}}" placeholder="qual?" class="form-control">
        </div>
    </div>
    <hr/>

    {{-- ------------------------------------------------- --}}
    <!-- hc_hospitalizado -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">5. Já teve hospitalizado? *</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" class="campo-habilitar" name="hc_hospitalizado" data-campo="hc_hospitalizado_qual" {{old('hc_hospitalizado', $anamnese->hc_hospitalizado) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>

    <!-- hc_hospitalizado_qual -->
    <div class="form-group row" style="display:{{old('hc_hospitalizado', $anamnese->hc_hospitalizado) ? 'block' : 'none' }};" id="hc_hospitalizado_qual">
        <label class="col-sm-2 col-form-label">Observação</label>
        <div class="col-sm-10">
            <input type="text" name="hc_hospitalizado_qual" value="{{old('hc_hospitalizado_qual', $anamnese->hc_hospitalizado_qual)}}" placeholder="Observação" class="form-control">
        </div>
    </div>
    <hr/>
    
    {{-- ------------------------------------------------- --}}
    <!-- hc_cirurgia -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">6. Fez alguma cirurgia? *</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" class="campo-habilitar" name="hc_cirurgia" data-campo="hc_cirurgia_qual" {{old('hc_cirurgia', $anamnese->hc_cirurgia) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>

    <!-- hc_cirurgia_qual -->
    <div class="form-group row" style="display:{{old('hc_cirurgia', $anamnese->hc_cirurgia) ? 'block' : 'none' }};" id="hc_cirurgia_qual">
        <label class="col-sm-2 col-form-label">Qual?</label>
        <div class="col-sm-10">
            <input type="text" name="hc_cirurgia_qual" value="{{old('hc_cirurgia_qual', $anamnese->hc_cirurgia_qual)}}" placeholder="qual?" class="form-control">
        </div>
    </div>
    <hr/>
    
    {{-- ------------------------------------------------- --}}
    <!-- hc_medicamento -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">7. Toma algum tipo de medicamento?*</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" class="campo-habilitar" name="hc_medicamento" data-campo="hc_medicamento_qual" {{old('hc_medicamento', $anamnese->hc_medicamento) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>

    <!-- hc_medicamento_qual -->
    <div class="form-group row" style="display:{{old('hc_medicamento', $anamnese->hc_medicamento) ? 'block' : 'none' }};" id="hc_medicamento_qual">
        <label class="col-sm-2 col-form-label">Qual?</label>
        <div class="col-sm-10">
            <input type="text" name="hc_medicamento_qual" value="{{old('hc_medicamento_qual', $anamnese->hc_medicamento_qual)}}" placeholder="qual?" class="form-control">
        </div>
    </div>
    <hr/>
    
    {{-- ------------------------------------------------- --}}
    <!-- hc_limitacao -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">8. Tem alguma limitação articular?*</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" class="campo-habilitar" name="hc_limitacao" data-campo="hc_limitacao_qual" {{old('hc_limitacao', $anamnese->hc_limitacao) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>

    <!-- hc_limitacao_qual -->
    <div class="form-group row" style="display:{{old('hc_limitacao', $anamnese->hc_limitacao) ? 'block' : 'none' }};" id="hc_limitacao_qual">
        <label class="col-sm-2 col-form-label">Qual?</label>
        <div class="col-sm-10">
            <input type="text" name="hc_limitacao_qual" value="{{old('hc_limitacao_qual', $anamnese->hc_limitacao_qual)}}" placeholder="qual?" class="form-control">
        </div>
    </div>
    <hr/>
    
    {{-- ------------------------------------------------- --}}
    <!-- hc_consciencia -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">9. Você tende a perder a consciência ou cair, como resultado de tonteira?*</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" class="campo-habilitar" name="hc_consciencia" data-campo="hc_consciencia_obs" {{old('hc_consciencia', $anamnese->hc_consciencia) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>

    <!-- hc_consciencia_obs -->
    <div class="form-group row" style="display:{{old('hc_consciencia', $anamnese->hc_consciencia) ? 'block' : 'none' }};" id="hc_consciencia_obs">
        <label class="col-sm-2 col-form-label">Observação</label>
        <div class="col-sm-10">
            <input type="text" name="hc_consciencia_obs" value="{{old('hc_consciencia_obs', $anamnese->hc_consciencia_obs)}}" placeholder="Observação" class="form-control">
        </div>
    </div>
    <hr/>
    
    {{-- ------------------------------------------------- --}}
    <!-- hc_insonia -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">10. Possui estado de insônia?*</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" class="campo-habilitar" name="hc_insonia" data-campo="hc_insonia_obs" {{old('hc_insonia', $anamnese->hc_insonia) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>

    <!-- hc_insonia_obs -->
    <div class="form-group row" style="display:{{old('hc_insonia', $anamnese->hc_insonia) ? 'block' : 'none' }};" id="hc_insonia_obs">
        <label class="col-sm-2 col-form-label">Observação</label>
        <div class="col-sm-10">
            <input type="text" name="hc_insonia_obs" value="{{old('hc_insonia_obs', $anamnese->hc_insonia_obs)}}" placeholder="Observação" class="form-control">
        </div>
    </div>
    <hr/>

</section>


{{--================================================== Histórico Clínico Familiar ===============================================--}}
<h3>Histórico Clínico Familiar</h3>
<section>
    {{-- ------------------------------------------------- --}}
    <!-- hcf_pai -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">1. Pai apresenta alguma patologia? *</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" class="campo-habilitar" name="hcf_pai" data-campo="hcf_pai_qual" {{old('hcf_pai', $anamnese->hcf_pai) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>

    <!-- hcf_pai_qual -->
    <div class="form-group row" style="display:{{old('hcf_pai', $anamnese->hcf_pai) ? 'block' : 'none' }};" id="hcf_pai_qual">
        <label class="col-sm-2 col-form-label">Qual</label>
        <div class="col-sm-10">
            <input type="text" name="hcf_pai_qual" value="{{old('hcf_pai_qual', $anamnese->hcf_pai_qual)}}" placeholder="Qual" class="form-control">
        </div>
    </div>
    <hr/>

    {{-- ------------------------------------------------- --}}
    <!-- hcf_mae -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">2. Mãe apresenta alguma patologia? *</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" class="campo-habilitar" name="hcf_mae" data-campo="hcf_mae_qual" {{old('hcf_mae', $anamnese->hcf_mae) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>

    <!-- hcf_mae_qual -->
    <div class="form-group row" style="display:{{old('hcf_mae', $anamnese->hcf_mae) ? 'block' : 'none' }};" id="hcf_mae_qual">
        <label class="col-sm-2 col-form-label">Qual</label>
        <div class="col-sm-10">
            <input type="text" name="hcf_mae_qual" value="{{old('hcf_mae_qual', $anamnese->hcf_mae_qual)}}" placeholder="Qual" class="form-control">
        </div>
    </div>
    <hr/>

    {{-- ------------------------------------------------- --}}
    <!-- hcf_irmaos -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">3. Irmão (ã) apresenta alguma patologia? *</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" class="campo-habilitar" name="hcf_irmaos" data-campo="hcf_irmaos_qual" {{old('hcf_irmaos', $anamnese->hcf_irmaos) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>

    <!-- hcf_irmaos_qual -->
    <div class="form-group row" style="display:{{old('hcf_irmaos', $anamnese->hcf_irmaos) ? 'block' : 'none' }};" id="hcf_irmaos_qual">
        <label class="col-sm-2 col-form-label">Qual</label>
        <div class="col-sm-10">
            <input type="text" name="hcf_irmaos_qual" value="{{old('hcf_irmaos_qual', $anamnese->hcf_irmaos_qual)}}" placeholder="Qual" class="form-control">
        </div>
    </div>
    <hr/>

    {{-- ------------------------------------------------- --}}
    <!-- hcf_avo1 -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">4. Avô apresenta alguma patologia? *</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" class="campo-habilitar" name="hcf_avo1" data-campo="hcf_avo1_qual" {{old('hcf_avo1', $anamnese->hcf_avo1) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>

    <!-- hcf_avo1_qual -->
    <div class="form-group row" style="display:{{old('hcf_avo1', $anamnese->hcf_avo1) ? 'block' : 'none' }};" id="hcf_avo1_qual">
        <label class="col-sm-2 col-form-label">Qual</label>
        <div class="col-sm-10">
            <input type="text" name="hcf_avo1_qual" value="{{old('hcf_avo1_qual', $anamnese->hcf_avo1_qual)}}" placeholder="Qual" class="form-control">
        </div>
    </div>
    <hr/>

    {{-- ------------------------------------------------- --}}
    <!-- hcf_avo0 -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">5. Avó apresenta alguma patologia? *</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" class="campo-habilitar" name="hcf_avo0" data-campo="hcf_avo0_qual" {{old('hcf_avo0', $anamnese->hcf_avo0) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>

    <!-- hcf_avo0_qual -->
    <div class="form-group row" style="display:{{old('hcf_avo0', $anamnese->hcf_avo0) ? 'block' : 'none' }};" id="hcf_avo0_qual">
        <label class="col-sm-2 col-form-label">Qual</label>
        <div class="col-sm-10">
            <input type="text" name="hcf_avo0_qual" value="{{old('hcf_avo0_qual', $anamnese->hcf_avo0_qual)}}" placeholder="Qual" class="form-control">
        </div>
    </div>
    <hr/>
</section>


{{--================================================== Histórico Psicossocial ===============================================--}}
<h3>Histórico Psicossocial</h3>
<section>
    {{-- ------------------------------------------------- --}}
    <!-- hp_distraido -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">1. Você se considera uma pessoa distraída?*</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" name="hp_distraido" {{old('hp_distraido', $anamnese->hp_distraido) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>
    <hr/>
    
    {{-- ------------------------------------------------- --}}
    <!-- hp_hiperativa -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">2. Você se considera uma pessoa hiperativa?*</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" name="hp_hiperativa" {{old('hp_hiperativa', $anamnese->hp_hiperativa) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>
    <hr/>
    
    {{-- ------------------------------------------------- --}}
    <!-- hp_nervosa -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">3. Você se considera uma pessoa nervosa?*</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" name="hp_nervosa" {{old('hp_nervosa', $anamnese->hp_nervosa) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>
    <hr/>
    
    {{-- ------------------------------------------------- --}}
    <!-- hp_calma -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">4. Você se considera uma pessoa calma?*</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" name="hp_calma" {{old('hp_calma', $anamnese->hp_calma) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>
    <hr/>
    
    {{-- ------------------------------------------------- --}}
    <!-- hp_expressa_necessidades -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">5. Você se considera uma pessoa que expressa suas necessidades?*</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" name="hp_expressa_necessidades" {{old('hp_expressa_necessidades', $anamnese->hp_expressa_necessidades) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>
    <hr/>
    
    {{-- ------------------------------------------------- --}}
    <!-- hp_adapta_situacao -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">6. Você se considera uma pessoa que se adapta a situações adversas? *</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" name="hp_adapta_situacao" {{old('hp_adapta_situacao', $anamnese->hp_adapta_situacao) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>
    <hr/>
    
    {{-- ------------------------------------------------- --}}
    <!-- hp_amizades -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">7. Consegue fazer amizades com facilidade?*</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" name="hp_amizades" {{old('hp_amizades', $anamnese->hp_amizades) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>
    <hr/>
    
    {{-- ------------------------------------------------- --}}
    <!-- hp_alimentacao -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">8. Tomou álcool ou se alimentou mal decorrente de alguma decepção? *</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" name="hp_alimentacao" {{old('hp_alimentacao', $anamnese->hp_alimentacao) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>
    <hr/>
    
    {{-- ------------------------------------------------- --}}
    <!-- hp_depressao -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">9. Já foi diagnosticado com depressão?*</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox"  value="1" name="hp_depressao" {{old('hp_depressao', $anamnese->hp_depressao) ? 'checked' : '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>
    <hr/>

</section>


{{--================================================== Escala de bem estar ==================================================--}}

<h3>Escala de bem estar</h3>
<section>
    @push('javascript')
    {{-- <link rel="stylesheet" href="{{asset('/admin/js/rating/bars-horizontal.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/js/rating/bars-pill.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/js/rating/bars-square.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/js/rating/bootstrap-stars.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('/admin/js/rating/bars-movie.css')}}">
    <script src="{{asset('/admin/js/rating/jquery.barrating.min.js')}}"></script>
    <script type="text/javascript">
        $(function() {
           $('.rating').barrating({
             theme: 'bars-movie'
           });
        });
     </script>
    @endpush

    <p><b>As relações abaixo se referem à maneira como você lida consigo mesmo e com sua vida. Lembre-se, não há respostas certas ou erradas, apenas marque a alternativa que melhor descreve como você se sente, no momento, em relação a cada frase.</b></p>
    {{-- ------------------------------------------------- --}}
    <!-- ebe_solitario -->
    <div class="form-group">
        <label class="col-form-label">1. Ultimamente me sinto solitário porque tenho poucos amigos íntimos com quem eu possa compartilhar minhas preocupações.*</label>
        <select class="rating" name="ebe_solitario">
            <option value="1" @if(old('ebe_solitario', $anamnese->ebe_solitario) == 1) selected @endif>1 Discordo totalmente</option>
            <option value="2" @if(old('ebe_solitario', $anamnese->ebe_solitario) == 2) selected @endif>2 Discordo parcialmente</option>
            <option value="3" @if(old('ebe_solitario', $anamnese->ebe_solitario) == 3) selected @endif>3 Discordo pouco</option>
            <option value="4" @if(old('ebe_solitario', $anamnese->ebe_solitario) == 4) selected @endif>4 Concordo pouco</option>
            <option value="5" @if(old('ebe_solitario', $anamnese->ebe_solitario) == 5) selected @endif>5 Concordo parcialmente</option>
            <option value="6" @if(old('ebe_solitario', $anamnese->ebe_solitario) == 6) selected @endif>6 Concordo totalmente</option>
          </select>
    </div><br/>
    <hr/>
   
    {{-- ------------------------------------------------- --}}
    <!-- ebe_expressao_opiniao -->
    <div class="form-group">
        <label class="col-form-label">2. Não tenho medo de expressar minhas opiniões, mesmo quando elas são contrárias às opiniões da maioria.*</label>
        <select class="rating" name="ebe_expressao_opiniao">
            <option value="1" @if(old('ebe_expressao_opiniao', $anamnese->ebe_expressao_opiniao) == 1) selected @endif>1 Discordo totalmente</option>
            <option value="2" @if(old('ebe_expressao_opiniao', $anamnese->ebe_expressao_opiniao) == 2) selected @endif>2 Discordo parcialmente</option>
            <option value="3" @if(old('ebe_expressao_opiniao', $anamnese->ebe_expressao_opiniao) == 3) selected @endif>3 Discordo pouco</option>
            <option value="4" @if(old('ebe_expressao_opiniao', $anamnese->ebe_expressao_opiniao) == 4) selected @endif>4 Concordo pouco</option>
            <option value="5" @if(old('ebe_expressao_opiniao', $anamnese->ebe_expressao_opiniao) == 5) selected @endif>5 Concordo parcialmente</option>
            <option value="6" @if(old('ebe_expressao_opiniao', $anamnese->ebe_expressao_opiniao) == 6) selected @endif>6 Concordo totalmente</option>
        </select>
    </div><br/>
    <hr/>
   
    {{-- ------------------------------------------------- --}}
    <!-- ebe_controle_situacao -->
    <div class="form-group">
        <label class="col-form-label">3. Sinto que tenho controle sobre as situações do meu dia.*</label>
        <select class="rating" name="ebe_controle_situacao">
            <option value="1" @if(old('ebe_controle_situacao', $anamnese->ebe_controle_situacao) == 1) selected @endif>1 Discordo totalmente</option>
            <option value="2" @if(old('ebe_controle_situacao', $anamnese->ebe_controle_situacao) == 2) selected @endif>2 Discordo parcialmente</option>
            <option value="3" @if(old('ebe_controle_situacao', $anamnese->ebe_controle_situacao) == 3) selected @endif>3 Discordo pouco</option>
            <option value="4" @if(old('ebe_controle_situacao', $anamnese->ebe_controle_situacao) == 4) selected @endif>4 Concordo pouco</option>
            <option value="5" @if(old('ebe_controle_situacao', $anamnese->ebe_controle_situacao) == 5) selected @endif>5 Concordo parcialmente</option>
            <option value="6" @if(old('ebe_controle_situacao', $anamnese->ebe_controle_situacao) == 6) selected @endif>6 Concordo totalmente</option>
        </select>
    </div><br/>
    <hr/>
   
    {{-- ------------------------------------------------- --}}
    <!-- ebe_confiante -->
    <div class="form-group">
        <label class="col-form-label">4. De forma geral me sinto confiante e positivo sobre mim mesmo*</label>
        <select class="rating" name="ebe_confiante">
            <option value="1" @if(old('ebe_confiante', $anamnese->ebe_confiante) == 1) selected @endif>1 Discordo totalmente</option>
            <option value="2" @if(old('ebe_confiante', $anamnese->ebe_confiante) == 2) selected @endif>2 Discordo parcialmente</option>
            <option value="3" @if(old('ebe_confiante', $anamnese->ebe_confiante) == 3) selected @endif>3 Discordo pouco</option>
            <option value="4" @if(old('ebe_confiante', $anamnese->ebe_confiante) == 4) selected @endif>4 Concordo pouco</option>
            <option value="5" @if(old('ebe_confiante', $anamnese->ebe_confiante) == 5) selected @endif>5 Concordo parcialmente</option>
            <option value="6" @if(old('ebe_confiante', $anamnese->ebe_confiante) == 6) selected @endif>6 Concordo totalmente</option>
        </select>
    </div><br/>
    <hr/>
   
    {{-- ------------------------------------------------- --}}
    <!-- ebe_idade_desenvolvimento -->
    <div class="form-group">
        <label class="col-form-label">5. Em minha opinião, pessoas de todas as idades são capazes de continuar crescendo e se desenvolvendo.*</label>
        <select class="rating" name="ebe_idade_desenvolvimento">
            <option value="1" @if(old('ebe_idade_desenvolvimento', $anamnese->ebe_idade_desenvolvimento) == 1) selected @endif>1 Discordo totalmente</option>
            <option value="2" @if(old('ebe_idade_desenvolvimento', $anamnese->ebe_idade_desenvolvimento) == 2) selected @endif>2 Discordo parcialmente</option>
            <option value="3" @if(old('ebe_idade_desenvolvimento', $anamnese->ebe_idade_desenvolvimento) == 3) selected @endif>3 Discordo pouco</option>
            <option value="4" @if(old('ebe_idade_desenvolvimento', $anamnese->ebe_idade_desenvolvimento) == 4) selected @endif>4 Concordo pouco</option>
            <option value="5" @if(old('ebe_idade_desenvolvimento', $anamnese->ebe_idade_desenvolvimento) == 5) selected @endif>5 Concordo parcialmente</option>
            <option value="6" @if(old('ebe_idade_desenvolvimento', $anamnese->ebe_idade_desenvolvimento) == 6) selected @endif>6 Concordo totalmente</option>
        </select>
    </div><br/>
    <hr/>

    {{-- ------------------------------------------------- --}}
    <!-- ebe_atividades_desinteressantes -->
    <div class="form-group">
        <label class="col-form-label">6. Na maioria das vezes acho minhas atividades desinteressantes e banais.*</label>
        <select class="rating" name="ebe_atividades_desinteressantes">
            <option value="1" @if(old('ebe_atividades_desinteressantes', $anamnese->ebe_atividades_desinteressantes) == 1) selected @endif>1 Discordo totalmente</option>
            <option value="2" @if(old('ebe_atividades_desinteressantes', $anamnese->ebe_atividades_desinteressantes) == 2) selected @endif>2 Discordo parcialmente</option>
            <option value="3" @if(old('ebe_atividades_desinteressantes', $anamnese->ebe_atividades_desinteressantes) == 3) selected @endif>3 Discordo pouco</option>
            <option value="4" @if(old('ebe_atividades_desinteressantes', $anamnese->ebe_atividades_desinteressantes) == 4) selected @endif>4 Concordo pouco</option>
            <option value="5" @if(old('ebe_atividades_desinteressantes', $anamnese->ebe_atividades_desinteressantes) == 5) selected @endif>5 Concordo parcialmente</option>
            <option value="6" @if(old('ebe_atividades_desinteressantes', $anamnese->ebe_atividades_desinteressantes) == 6) selected @endif>6 Concordo totalmente</option>
        </select>
    </div><br/>
    <hr/>

    {{-- ------------------------------------------------- --}}
    <!-- ebe_autoestima -->
    <div class="form-group">
        <label class="col-form-label">7. Gosto do jeito que sou.*</label>
        <select class="rating" name="ebe_autoestima">
            <option value="1" @if(old('ebe_autoestima', $anamnese->ebe_autoestima) == 1) selected @endif>1 Discordo totalmente</option>
            <option value="2" @if(old('ebe_autoestima', $anamnese->ebe_autoestima) == 2) selected @endif>2 Discordo parcialmente</option>
            <option value="3" @if(old('ebe_autoestima', $anamnese->ebe_autoestima) == 3) selected @endif>3 Discordo pouco</option>
            <option value="4" @if(old('ebe_autoestima', $anamnese->ebe_autoestima) == 4) selected @endif>4 Concordo pouco</option>
            <option value="5" @if(old('ebe_autoestima', $anamnese->ebe_autoestima) == 5) selected @endif>5 Concordo parcialmente</option>
            <option value="6" @if(old('ebe_autoestima', $anamnese->ebe_autoestima) == 6) selected @endif>6 Concordo totalmente</option>
        </select>
    </div><br/>
    <hr/>

    {{-- ------------------------------------------------- --}}
    <!-- ebe_convencer_coisas_contrarias -->
    <div class="form-group">
        <label class="col-form-label">8. As pessoas dificilmente me convencem a fazer coisas que eu não queira.*</label>
        <select class="rating" name="ebe_convencer_coisas_contrarias">
            <option value="1" @if(old('ebe_convencer_coisas_contrarias', $anamnese->ebe_convencer_coisas_contrarias) == 1) selected @endif>1 Discordo totalmente</option>
            <option value="2" @if(old('ebe_convencer_coisas_contrarias', $anamnese->ebe_convencer_coisas_contrarias) == 2) selected @endif>2 Discordo parcialmente</option>
            <option value="3" @if(old('ebe_convencer_coisas_contrarias', $anamnese->ebe_convencer_coisas_contrarias) == 3) selected @endif>3 Discordo pouco</option>
            <option value="4" @if(old('ebe_convencer_coisas_contrarias', $anamnese->ebe_convencer_coisas_contrarias) == 4) selected @endif>4 Concordo pouco</option>
            <option value="5" @if(old('ebe_convencer_coisas_contrarias', $anamnese->ebe_convencer_coisas_contrarias) == 5) selected @endif>5 Concordo parcialmente</option>
            <option value="6" @if(old('ebe_convencer_coisas_contrarias', $anamnese->ebe_convencer_coisas_contrarias) == 6) selected @endif>6 Concordo totalmente</option>
        </select>
    </div><br/>
    <hr/>

    {{-- ------------------------------------------------- --}}
    <!-- ebe_ativa -->
    <div class="form-group">
        <label class="col-form-label">9. Sou uma pessoa ativa para executar os planos que estipulei.*</label>
        <select class="rating" name="ebe_ativa">
            <option value="1" @if(old('ebe_ativa', $anamnese->ebe_ativa) == 1) selected @endif>1 Discordo totalmente</option>
            <option value="2" @if(old('ebe_ativa', $anamnese->ebe_ativa) == 2) selected @endif>2 Discordo parcialmente</option>
            <option value="3" @if(old('ebe_ativa', $anamnese->ebe_ativa) == 3) selected @endif>3 Discordo pouco</option>
            <option value="4" @if(old('ebe_ativa', $anamnese->ebe_ativa) == 4) selected @endif>4 Concordo pouco</option>
            <option value="5" @if(old('ebe_ativa', $anamnese->ebe_ativa) == 5) selected @endif>5 Concordo parcialmente</option>
            <option value="6" @if(old('ebe_ativa', $anamnese->ebe_ativa) == 6) selected @endif>6 Concordo totalmente</option>
        </select>
    </div><br/>
    <hr/>

    {{-- ------------------------------------------------- --}}
    <!-- ebe_amizade_deslozado -->
    <div class="form-group">
        <label class="col-form-label">10. Em relação às amizades, eu geralmente me sinto deslocado.*</label>
        <select class="rating" name="ebe_amizade_deslozado">
            <option value="1" @if(old('ebe_amizade_deslozado', $anamnese->ebe_amizade_deslozado) == 1) selected @endif>1 Discordo totalmente</option>
            <option value="2" @if(old('ebe_amizade_deslozado', $anamnese->ebe_amizade_deslozado) == 2) selected @endif>2 Discordo parcialmente</option>
            <option value="3" @if(old('ebe_amizade_deslozado', $anamnese->ebe_amizade_deslozado) == 3) selected @endif>3 Discordo pouco</option>
            <option value="4" @if(old('ebe_amizade_deslozado', $anamnese->ebe_amizade_deslozado) == 4) selected @endif>4 Concordo pouco</option>
            <option value="5" @if(old('ebe_amizade_deslozado', $anamnese->ebe_amizade_deslozado) == 5) selected @endif>5 Concordo parcialmente</option>
            <option value="6" @if(old('ebe_amizade_deslozado', $anamnese->ebe_amizade_deslozado) == 6) selected @endif>6 Concordo totalmente</option>
        </select>
    </div><br/>

</section>

{{--================================================== Atividades diárias ==================================================--}}
<h3>Atividades diárias</h3>
<section>
    <!-- ad_ativa -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">1. Considera uma pessoa ativa?</label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_ativa">{{old('ad_ativa', $anamnese->ad_ativa)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_gosta_treinar -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">2. Você gosta de treinar ou treina por indicação médica, estética ou por algum reconhecimento social?</label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_gosta_treinar">{{old('ad_gosta_treinar', $anamnese->ad_gosta_treinar)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_aulas_coletivas -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">3. Gosta de fazer aulas coletivas? </label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_aulas_coletivas">{{old('ad_aulas_coletivas', $anamnese->ad_aulas_coletivas)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_exercicio_personalizado -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">4. Já fez exercícios personalizados? </label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_exercicio_personalizado">{{old('ad_exercicio_personalizado', $anamnese->ad_exercicio_personalizado)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_exercicio_tipo -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">5. Gosta de exercícios contínuos, intermitentes ou não tem preferência?</label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_exercicio_tipo">{{old('ad_exercicio_tipo', $anamnese->ad_exercicio_tipo)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_esportes -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">6. Pratica ou gosta de algum esporte?</label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_esportes">{{old('ad_esportes', $anamnese->ad_esportes)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_treinos_acompanhados -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">7. Gosta de treinar sozinho, dupla ou em grupo?</label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_treinos_acompanhados">{{old('ad_treinos_acompanhados', $anamnese->ad_treinos_acompanhados)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_treinos_por_semana -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">8. Quantas vezes pretende treinar por semana?  </label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_treinos_por_semana">{{old('ad_treinos_por_semana', $anamnese->ad_treinos_por_semana)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_treinos_horarios -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">9. Pretende estipular um horário específico de treino?</label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_treinos_horarios">{{old('ad_treinos_horarios', $anamnese->ad_treinos_horarios)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_treinos_disponibilidade -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">10. Qual a sua disponibilidade de tempo para treinar?</label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_treinos_disponibilidade">{{old('ad_treinos_disponibilidade', $anamnese->ad_treinos_disponibilidade)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_treinos_objetivos -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">11. Qual o seu objetivo com os treinos?</label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_treinos_objetivos">{{old('ad_treinos_objetivos', $anamnese->ad_treinos_objetivos)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_treinos_prazo -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">12. Em que tempo pretende alcançar o objetivo?</label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_treinos_prazo">{{old('ad_treinos_prazo', $anamnese->ad_treinos_prazo)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_sono_horas -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">13.	Em média quanto tempo dorme por dia?</label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_sono_horas">{{old('ad_sono_horas', $anamnese->ad_sono_horas)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_sono_cochilo -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">14. Consegue tirar um cochilo durante o dia?</label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_sono_cochilo">{{old('ad_sono_cochilo', $anamnese->ad_sono_cochilo)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_sono_qualidade -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">15. Qual a qualidade do seu sono?</label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_sono_qualidade">{{old('ad_sono_qualidade', $anamnese->ad_sono_qualidade)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_alimentacao -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">16. Se alimenta bem? </label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_alimentacao">{{old('ad_alimentacao', $anamnese->ad_alimentacao)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_nutricionista -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">17. Pretende procurar um (a) nutricionista?</label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_nutricionista">{{old('ad_nutricionista', $anamnese->ad_nutricionista)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_ergogenico -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">18. Atualmente toma ou já tomou algum tipo de ergogênico?</label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_ergogenico">{{old('ad_ergogenico', $anamnese->ad_ergogenico)}}</textarea>
        </div>
    </div>
    <hr/>
    
    <!-- ad_ocupacao -->
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">19. Trabalha, estuda ou faz outra atividade? </label>
        <div class="col-sm-8">
            <textarea style="width:100%;" rows="3" name="ad_ocupacao">{{old('ad_ocupacao', $anamnese->ad_ocupacao)}}</textarea>
        </div>
    </div>

</section>

{{--==================================================Resultado da Avaliação ==================================================--}}
<h3>Resultado da Avaliação</h3>
<section>
      <!-- rf_historico_clinico -->
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Histórico Clínico:</label>
        <div class="col-sm-10">
            <textarea style="width:100%;" rows="3" name="rf_historico_clinico">{{old('rf_historico_clinico', $anamnese->rf_historico_clinico)}}</textarea>
        </div>
    </div>
    
    <!-- rf_historico_familiar -->
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Histórico Familiar:</label>
        <div class="col-sm-10">
        <textarea style="width:100%;" rows="3" name="rf_historico_familiar">{{old('rf_historico_familiar', $anamnese->rf_historico_familiar)}}</textarea>
        </div>
    </div>
    
    <!-- rf_historico_piscossocial -->
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Histórico Psicossocial:</label>
        <div class="col-sm-10">
        <textarea style="width:100%;" rows="3" name="rf_historico_piscossocial">{{old('rf_historico_piscossocial', $anamnese->rf_historico_piscossocial)}}</textarea>
        </div>
    </div>
    
    <!-- rf_bem_estar -->
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Escala de Bem Estar:</label>
        <div class="col-sm-10">
        <textarea style="width:100%;" rows="3" name="rf_bem_estar">{{old('rf_bem_estar', $anamnese->rf_bem_estar)}}</textarea>
        </div>
    </div>

    <!-- rf_atividades_diarias -->
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Atividades Diárias:</label>
        <div class="col-sm-10">
        <textarea style="width:100%;" rows="3" name="rf_atividades_diarias">{{old('rf_atividades_diarias', $anamnese->rf_atividades_diarias)}}</textarea>
        </div>
    </div>
</section>




@push('javascript')
<script>
    $(document).ready(() => {
        $('.campo-habilitar').on('change', function() {
            const campo = $(this).data('campo');
            if ($(this).is(':checked'))
                $(`#${campo}`).show('slow');
            else
                $(`#${campo}`).hide('slow');
        })
    })
</script>
@endpush