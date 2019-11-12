@include('layout._includes.header')

<div class="container">
    <div class="row">
        <h5>Busca por nome do curso</h5>
        <form action="{{route('cursos.actionSearchName')}}" method="GET">
            <div class="input-field col s12">
                <input id="nomeCurso" name="nomeCurso" type="text" class="validate">
                <label for="nomeCurso">Digite o nome do curso</label>
            </div>
            <div class="input-field col s12">
                <button type="submit" class="btn orange">Pesquisar</button>
            </div>
        </form>
    </div>
    <div class="row">
        <h5>Busca por código do curso</h5>
        <form action="{{route('cursos.actionSearchCode')}}" method="GET">
            <div class="input-field col s12">
                <input id="codigoCurso" name="codigoCurso" type="text" class="validate">
                <label for="codigoCurso">Digite o código do curso</label>
            </div>
            <div class="input-field col s12">
                <button type="submit" class="btn orange">Pesquisar</button>
            </div>
        </form>
    </div>
</div>


@include('layout._includes.footer')
