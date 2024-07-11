<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Guia;
use App\tipo;

class NoticiaController extends Controller
{
    public function index()
    {
        $guias =  Guia::where('publicar', '=', 'sim')->orderBy('id', 'desc')->paginate();

        $paginacao = true;
        $tipos = Tipo::orderBy('titulo')->get();

        return view('site.noticia', compact('guias','paginacao','tipos'));
    }

    public function busca(Request $request)
    {
        $busca = $request->all();
        $guias =  Guia::where('publicar', '=', 'sim')->orderBy('id', 'desc')->get();

        $paginacao = false;
        $tipos = Tipo::orderBy('titulo')->get();

        return view('site.busca', compact('busca','guias','paginacao','tipos'));
    }
}
