<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cursos;
use League\Flysystem\Exception;

class CursosController extends Controller
{

    public function adicionar()
    {
        return view('admin.cursos.cursos');
    }

    public function pesquisar(){
        return view('admin.cursos.pesquisa');
    }

    public function acaoPesquisaNome(Request $request){
        $nomeCurso = $request->nomeCurso;
        $cursos = Cursos::where('nomecurso', 'LIKE', "%$nomeCurso%")->paginate(5);
        return view ('admin.cursos.resultadonome')->with('cursos', $cursos)->with('nomeCurso', $nomeCurso);
    }

    public function acaoPesquisaCodigo(Request $request){
        $codigoCurso = $request->codigoCurso;
        $cursos = Cursos::where('codigo', '=', "$codigoCurso")->get();
        return view ('admin.cursos.resultadocodigo', compact('cursos'));
    }

    public function acaoListaEditar($id){
        $cursos = Cursos::where('id', '=', "$id")->get();
        // dd($cursos);
        return view ('admin.cursos.resultadocodigo', compact('cursos'));
    }

    public function salvar(Request $request)
    {
        $curso = new Cursos();
        $ultimoCodigo = Cursos::select('codigo')->orderBy('codigo', 'desc')->limit(1)->get();
        // dump($ultimoCodigo);

        if($ultimoCodigo->isNotEmpty()):
            foreach($ultimoCodigo as $uC){
                $curso->codigo = $uC->codigo + 1;
        }
        else:
            $curso->codigo = 10000;
        endif;

        $curso->nomecurso = $request->input('nomeCurso');
        $curso->nivel = $request->nivel;
        $curso->vagas = $request->qtdadeVagas;
        $curso->cargahoraria = $request->cargahoraria;
        $curso->save();

        return view('admin.cursos.welcome');
    }

    public function atualizar(Request $request, $id){
        try{
            Cursos::find($id)->update(['codigo' => $request->codigo,
                                        'nomecurso' => $request->nomeCurso,
                                        'nivel' => $request->nivel,
                                        'vagas' => $request->qtdadeVagas,
                                        'cargahoraria'=> $request->cargahoraria]);
            return view('admin.cursos.pesquisa');
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function apagar($id){

        Cursos::find($id)->delete();
        return view ('admin.cursos.pesquisa');
    }
}
