<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tipo;
use App\guia;

class TipoController extends Controller
{
    public function index()
    {
        $registros = Tipo::all();
        return view('admin.tipos.index', compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.tipos.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new Tipo();
        $registro->titulo = $dados['titulo'];

        $registro->save();
        return redirect()->route('admin.tipos');

        \Session::flash('mensagem', ['msg' => 'Registro criado com sucesso!', 'class' => 'alert alert-success']);
        \Session::flash('icon', ['class' => 'ion-ios-checkmark-circle']);
        \Session::flash('alert', ['msg' => 'Alerta: ', 'class' => 'mb-0 ml-2']);

        return redirect()->route('admin.tipos');
    }

    public function editar($id)
    {
        $registro = Tipo::find($id);
        return view('admin.tipos.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        $registro = Tipo::find($id);
        $dados = $request->all();
        $registro->titulo = $dados['titulo'] .

            $registro->update();
        \Session::flash('mensagem', ['msg' => 'Registro atualizado com sucesso!', 'class' => 'alert alert-success']);
        \Session::flash('icon', ['class' => 'ion-ios-checkmark-circle']);
        \Session::flash('alert', ['msg' => 'Alerta: ', 'class' => 'mb-0 ml-2']);

        return redirect()->route('admin.tipos');
    }

    public function deletar($id)
    {
        if (guia::where('tipo_id', '=', $id)->count()) {
            $msg = "Não é possivel deletar esse tipo! Essas guias (";

            $guias =  guia::where('tipo_id', '=', $id)->get();

            foreach ($guias as $guia) {
                $msg .= "id " . $guia->id . " ";
            }

            $msg .= ") Estão relacionados";

            \Session::flash('mensagem', ['msg' => $msg, 'class' => 'alert alert-danger']);
            \Session::flash('icon', ['class' => 'ion-ios-danger']);
            \Session::flash('alert', ['msg' => 'Alerta: ', 'class' => 'mb-0 ml-2']);
            return redirect()->route('admin.tipos');
        }



        Tipo::find($id)->delete();

        \Session::flash('mensagem', ['msg' => 'Registro deletado com sucesso!', 'class' => 'alert alert-success']);
        \Session::flash('icon', ['class' => 'ion-ios-checkmark-circle']);
        \Session::flash('alert', ['msg' => 'Alerta: ', 'class' => 'mb-0 ml-2']);
        return redirect()->route('admin.tipos');
    }
}
