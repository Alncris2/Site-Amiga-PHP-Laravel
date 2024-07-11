<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pagina;

class PaginaController extends Controller
{
    public function index()
    {	
    	$paginas = Pagina::all();
    	return view('admin.paginas.index', compact('paginas'));
    }

    public function editar($id)
    {
    	$pagina = Pagina::find($id);
    	return view('admin.paginas.editar', compact('pagina'));
    }

    public function atualizar(Request $request, $id)
    {
    	$dados = $request->all();
    	$pagina = Pagina::find($id);
    	$pagina->titulo = trim($dados['titulo']);
    	$pagina->descricao = trim($dados['descricao']);
		$pagina->texto = trim($dados['texto']);
		

    	if(isset($dados['email'])){
			$pagina->email = trim($dados['email']);
			$pagina->mapa = trim($dados['mapa']);
    	}

    	$file = $request->file('imagem');
    	if ($file) {
    		$rand = rand(11111, 99999);
    		$diretorio = "public/lib/img/pagina/".$id."/";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$pagina->imagem = $diretorio.$nomeArquivo; 
    	}

    	$pagina->update();

		\Session::flash('mensagem', ['msg' => 'Registro atualizado com sucesso!', 'class' => 'alert alert-success']);
        \Session::flash('icon', ['class' => 'ion-ios-checkmark-circle']);
        \Session::flash('alert', ['msg' => 'Alerta: ', 'class' => 'mb-0 ml-2']);

		return redirect()->route('admin.paginas');

    }
}
