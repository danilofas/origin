@include('layout._includes.header')

<div class="container">
    <div class="row">
            @foreach ($cursos as $curso)
            <form action="{{ route('cursos.atualizar',$curso->id)}}" method="post">
                {{csrf_field()}}
                    <div class="row center">
                        <h5>Resultado do curso pesquisado</h5>
                        <div class="row">
                            <div class="input-field col s3 left">
                                <i class="material-icons prefix iconColor">call_to_action</i>
                                <input id="codigo" type="text" class="validate" value="{{$curso->codigo}}" name="codigo" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix iconColor">person_pin</i>
                                <input id="nomeCurso" type="text" class="validate" value="{{$curso->nomecurso}}" name="nomeCurso" maxlength="100">
                                <label for="nomeCurso">Nome do curso</label>
                            </div>
                            <div class="input-field col s6">
                                <select name="nivel">

                                        <option selected value="{{$curso->nivel}}">{{$curso->nivel}}</option>
                                        <option value="Ações extensivas">Ações extensivas</option>
                                        <option value="Aprendizagem">Aprendizagem</option>
                                        <option value="Qualificação Profissional">Qualificação Profissional</option>
                                        <option value="Aperfeiçoamento/Atualização">Aperfeiçoamento/Atualização</option>
                                        <option value="Programas Instrumentais">Programas Instrumentais</option>
                                        <option value="Programas Socioprofissionais">Programas Socioprofissionais</option>
                                        <option value="Programas Socioculturais">Programas Socioculturais</option>

                                </select>
                                <label>Nível do curso</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">

                                <select name="qtdadeVagas">
                                    <option value="{{$curso->vagas}}" selected>{{$curso->vagas}}</option>
                                    @php
                                        for($i=1;$i<=40;$i++){
                                            echo "<option value='".$i."'>".$i."</option>";
                                        }
                                    @endphp
                                </select>
                                <label>Quantidade de vagas</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix iconColor">person_pin</i>
                            <input id="cargahoraria" type="number" value="{{$curso->cargahoraria}}" class="validate" name="cargahoraria" min="1">
                                <label for="cargahoraria">Carga horária</label>
                            </div>
                            <button class="btn waves-ligth">Atualizar</button>
                        </div>
                        <input type="hidden" name="id" id="id" value="{{$curso->id}}">
                    </div>
                </form>
            @endforeach
    </div>
</div>
@include('layout._includes.footer')
