<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portal;


class PortalController extends Controller
{
    public function index()
    {
        $registros = Portal::all();
        return view('admin.portals.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.portals.adicionar');
    }

    public function salvar(Request $request)
    {
        if ($request->hasFile('file')) {

            $dados = $request->all();
            $registro = new Portal();

            $registro->titulo = $dados['titulo'];
            $registro->descricao = $dados['descricao'];


            $file = $request->file('file');
            if ($file) {
                $rand = rand(11111, 99999);
                $diretorio = "public/lib/files/uploads/";
    		    $ext = $file->guessClientExtension();
    		    $nomeArquivo = "_arq_".$rand.".".$ext;
                $file->move($diretorio,$nomeArquivo);
    		    $registro->file = $diretorio.$nomeArquivo;

            }

            $registro->save();

            \Session::flash('mensagem', ['msg' => 'Registro criado com sucesso!', 'class' => 'alert alert-success']);
            \Session::flash('icon', ['class' => 'ion-ios-checkmark-circle']);
            \Session::flash('alert', ['msg' => 'Alerta: ', 'class' => 'mb-0 ml-2']);
        }



        return redirect()->route('admin.portals');
    }




    public function editar($id)
    {

        $registro = Portal::find($id);

        return view('admin.portals.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Portal::find($id);
        $dados = $request->all();

        $registro->titulo = $dados['titulo'];
        $registro->descricao = $dados['descricao'];

        $file = $request->file('file');
        if ($file) {
            $rand = rand(11111, 99999);
            $diretorio = "public/lib/files/uploads/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_arq_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $registro->file = $diretorio.$nomeArquivo;
        }

        $registro->update();

        \Session::flash('mensagem', ['msg' => 'Registro atualizado com sucesso!', 'class' => 'alert alert-success']);
        \Session::flash('icon', ['class' => 'ion-ios-checkmark-circle']);
        \Session::flash('alert', ['msg' => 'Alerta: ', 'class' => 'mb-0 ml-2']);

        return redirect()->route('admin.portals');
    }

    public function deletar($id)
    {
        $portal = Portal::find($id);

        $portal->delete();

        \Session::flash('mensagem', ['msg' => 'Registro deletado com sucesso!', 'class' => 'alert alert-success']);
        \Session::flash('icon', ['class' => 'ion-ios-checkmark-circle']);
        \Session::flash('alert', ['msg' => 'Alerta: ', 'class' => 'mb-0 ml-2']);

        return redirect()->route('admin.portals');
    }
}
