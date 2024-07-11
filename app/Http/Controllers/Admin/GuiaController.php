<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Guia;
use App\tipo;

class guiaController extends Controller
{
	 public function index()
    {
        $registros = Guia::all();
        return view('admin.guias.index', compact('registros')); 
    }

    public function adicionar()
    {	
    	$tipos = tipo::all();

        return view('admin.guias.adicionar',compact('tipos'));
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new Guia();
        $registro->titulo = $dados['titulo'];
        $registro->descrição = $dados['descrição'];
        $registro->texto = $dados['texto'];
        $registro->paragrafo2 = $dados['paragrafo2'];
        $registro->publicar = $dados['publicar'];
        $registro->visualizacoes = 0;
        $registro->tipo_id = $dados['tipo_id'];

        $file = $request->file('imagem');
    	if ($file) {
    		$rand = rand(11111, 99999);
            $diretorio = "public/lib/img/guias/".Str::slug($dados['titulo'],'_'). "/";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$registro->imagem = $diretorio.$nomeArquivo; 
        }
        $file = $request->file('imagemseg');
    	if ($file) {
    		$rand = rand(11111, 99999);
            $diretorio = "public/lib/img/guias/".Str::slug($dados['titulo'],'_'). "/";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$registro->imagemseg = $diretorio.$nomeArquivo; 
    	}

        $registro->save();
        
        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'alert alert-success']);
        \Session::flash('icon',['class'=>'ion-ios-checkmark-circle']);
        \Session::flash('alert',['msg'=>'Alerta: ','class'=>'mb-0 ml-2']);
         
            return redirect()->route('admin.guias');
    }

    public function editar($id)
    {	

    	$registro = Guia::find($id);
    	$tipos = Tipo::all();
       
        return view('admin.guias.editar',compact('registro','tipos'));
    }

    public function atualizar(Request $request, $id)
    {
         $registro = Guia::find($id);
        $dados = $request->all();
        $registro->titulo = $dados['titulo'];
        $registro->descrição = $dados['descrição'];
        $registro->texto = $dados['texto'];
        $registro->paragrafo2 = $dados['paragrafo2'];
        $registro->publicar = $dados['publicar'];
        $registro->tipo_id = $dados['tipo_id'];

        $file = $request->file('imagem');
    	if ($file) {
    		$rand = rand(11111, 99999);
    		$diretorio = "public/lib/img/guias/".$id."/";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$registro->imagem = $diretorio.$nomeArquivo; 
        }
        $file = $request->file('imagemseg');
        if ($file) {
    		$rand = rand(11111, 99999);
    		$diretorio = "public/lib/img/guias/".$id."/";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$registro->imagemseg = $diretorio.$nomeArquivo; 
    	}

        $registro->update();
        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'alert alert-success']);
        \Session::flash('icon',['class'=>'ion-ios-checkmark-circle']);
        \Session::flash('alert',['msg'=>'Alerta: ','class'=>'mb-0 ml-2']);

         
            return redirect()->route('admin.guias');
    }

    public function deletar($id)
    {   
        
        guia::find($id)->delete();

        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'alert alert-success']);
        \Session::flash('icon',['class'=>'ion-ios-checkmark-circle']);
        \Session::flash('alert',['msg'=>'Alerta: ','class'=>'mb-0 ml-2']);
         
            return redirect()->route('admin.guias');
    }
}
