{{-- Histórico Clínico --}}
<h3>Histórico Clínico</h3>
<section>
    
    <!-- hc_doenca_atividade -->
    <div class="form-group row">
        <label class="col-sm-10 col-form-label">Atualmente algum um médico lhe disse que você possui alguma doença e recomendou que só fizesse atividade física sob supervisão médica?*</label>
        
        <div class="col-sm-2">
            <label class="switch">
                <input type="checkbox" name="hc_doenca_atividade" {{old('hc_doenca_atividade_qual', $anamnese->hc_doenca_atividade) ? 'checked' ? '' }}>
                <span class="slider"></span>
              </label>
        </div>
    </div>

    <!-- hc_doenca_atividade_qual -->
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Qual?</label>
        <div class="col-sm-10">
            <input type="text" id="username" name="hc_doenca_atividade_qual" value="{{old('hc_doenca_atividade_qual', $anamnese->hc_doenca_atividade_qual)}}" placeholder="Nome" class="form-control">
        </div>
    </div>
    <hr/>

</section>

{{-- Histórico Clínico Familiar --}}
<h3>Histórico Clínico Familiar</h3>
<section>
    <p>Wonderful transition effects.</p>
</section>

{{-- Escala de bem estar --}}
<h3>Escala de bem estar</h3>
<section>
    <p>The next and previous buttons help you to navigate through your content.</p>
</section>

{{-- Atividades diárias --}}
<h3>Atividades diárias</h3>
<section>
    <p>The next and previous buttons help you to navigate through your content.</p>
</section>

{{-- Resultado da Avaliação --}}
<h3>Resultado da Avaliação</h3>
<section>
    <p>The next and previous buttons help you to navigate through your content.</p>
</section>
