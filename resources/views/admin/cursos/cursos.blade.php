@include('layout._includes.header')


<div class="container">
    <div class="row">
    <form action="{{ route('cursos.save')}}" method="POST">
        {{ csrf_field()}}
            <div class="row center">
                <h5>Cadastro de novo curso</h5>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">person_pin</i>
                        <input id="nomeCurso" type="text" class="validate" name="nomeCurso" maxlength="100">
                        <label for="nomeCurso">Nome do curso</label>
                    </div>
                    <div class="input-field col s6">
                        <select name="nivel">
                            <option value="" disabled selected>Nível do curso</option>
                                <option value="Ações extensivas">Ações extensivas</option>
                                <option value="Aprendizagem">Aprendizagem</option>
                                <option value="Qualificação Profissional">Qualificação Profissionalivas</option>
                                <option value="Aperfeiçoamento/Atualização">Aperfeiçoamento/Atualização</option>
                                <option value="Programas Instrumentais">Programas Instrumentaisas</option>
                                <option value="Programas Socioprofissionais">Programas Socioprofissionais</option>
                                <option value="Programas Socioculturais">Programas Socioculturais</option>

                        </select>
                        <label>Nível do curso</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">

                        <select name="qtdadeVagas">
                            <option value="" disabled selected>Qtde de vagas</option>
                            @for ($i = 1; $i <= 40; $i++)
                                <option value="{{$i}}">{{($i)}}</option>
                            @endfor

                        </select>
                        <label>Quantidade de vagas</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix iconColor">person_pin</i>
                        <input id="cargahoraria" type="number" class="validate" name="cargahoraria" min="1">
                        <label for="cargahoraria">Carga horária</label>
                    </div>

                </div>
                <button class="btn waves-effect waves-light orange" type="submit" name="action">Cadastrar
                            <i class="material-icons right">send</i>
                          </button>
            </div>
        </form>
    </div>
</div>


@include('layout._includes.footer')
