@include('layout._includes.header')

<div class="container">
    <div class="row">
        <table class="striped centered">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Nível</th>
                    <th>Vagas</th>
                    <th>Carga horária</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{$curso->codigo}}</td>
                    <td>{{ucfirst($curso->nomecurso)}}</td>
                    <td>{{ucfirst($curso->nivel)}}</td>
                    <td>{{$curso->vagas}}</td>
                    <td>{{$curso->cargahoraria}}</td>
                    <td><a href="{{ route('cursos.actionListEdit', $curso->id)}}" title="Atualizar curso?" class="btn-floating grey"><i class="material-icons">edit</i></a><td>
                    <td><a href="{{ route('cursos.apagar', $curso->id)}}" title="Deletar curso?" class="btn-floating grey"><i class="material-icons">delete</i></a><td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <div class="row links center">
            {{$cursos->appends(['nomeCurso'=>isset($nomeCurso) ? $nomeCurso : ''])->links()}}
        </div>
    </div>

</div>



@include('layout._includes.footer')
