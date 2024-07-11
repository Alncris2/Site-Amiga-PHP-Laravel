<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Galeria;
use App\Guia;

class GaleriaController extends Controller
{
    public function index($id)
    {
        $guia = Guia::find($id);
        $registros = $guia->galeria()->orderBy('ordem')->get();
        return view('admin.galerias.index', compact('registros','guia')); 
    }

    public function adicionar($id)
    {	
    	$guia = Guia::find($id);

        return view('admin.galerias.adicionar',compact('guia'));
    }

    public function salvar(Request $request,$id)
    {
        $guia = Guia::find($id);

        $dados = $request->all();

        if($guia->galeria()->count())
        {
            $galeria = $guia->galeria()->orderBy('ordem','desc')->first();
            $ordemAtual = $galeria->ordem;
        }
        else{
            $ordemAtual =0;
        }
        if($request->hasFile('imagens'))
        {
            $arquivos = $request->file('imagens');
            foreach ($arquivos as $imagemseg)
            {
                $registro = new Galeria();

                $rand = rand(11111, 99999);
                $diretorio = "public/lib/img/guias/".Str::slug($guia->titulo,'_'). "/";
    		    $ext = $imagemseg->guessClientExtension();
    		    $nomeArquivo = "_img_".$rand.".".$ext;
                $imagemseg->move($diretorio,$nomeArquivo);
                $registro->guia_id = $guia->id;
                $registro->ordem = $ordemAtual + 1;
                $ordemAtual++;
    		    $registro->imagemseg = $diretorio.$nomeArquivo; 
                
                $registro->save();
            }
        }        
        
        \Session::flash('mensagem',['msg'=>'Registro criado com sucesso!','class'=>'alert alert-success']);
        \Session::flash('icon',['class'=>'ion-ios-checkmark-circle']);
        \Session::flash('alert',['msg'=>'Alerta: ','class'=>'mb-0 ml-2']);
         
            return redirect()->route('admin.galerias',$guia->id);
    }

    public function editar($id)
    {	

        $registro = Galeria::find($id);
        $guia = $registro->guia;
        
        return view('admin.galerias.editar',compact('registro','guia'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Galeria::find($id);
        $dados = $request->all();

        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];
        $registro->ordem = $dados['ordem'];
        $guia = $registro->guia;
        
        $file = $request->file('imagemseg');
        if ($file) {
    		$rand = rand(11111, 99999);
    		$diretorio = "public/lib/img/guias/".Str::slug($guia->titulo,'_'). "/";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$registro->imagemseg = $diretorio.$nomeArquivo; 
        }

        

        $registro->update();

        \Session::flash('mensagem',['msg'=>'Registro atualizado com sucesso!','class'=>'alert alert-success']);
        \Session::flash('icon',['class'=>'ion-ios-checkmark-circle']);
        \Session::flash('alert',['msg'=>'Alerta: ','class'=>'mb-0 ml-2']);

        return redirect()->route('admin.galerias',$guia->id);
    }

    public function deletar($id)
    {   
        $galeria = galeria::find($id);
        $guia = $galeria->guia;

        $galeria->delete();

        \Session::flash('mensagem',['msg'=>'Registro deletado com sucesso!','class'=>'alert alert-success']);
        \Session::flash('icon',['class'=>'ion-ios-checkmark-circle']);
        \Session::flash('alert',['msg'=>'Alerta: ','class'=>'mb-0 ml-2']);
         
            return redirect()->route('admin.galerias', $guia->id);
    }
}