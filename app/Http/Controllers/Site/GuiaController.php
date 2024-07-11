<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Guia;


class GuiaController extends Controller
{
    public function index($id)
    {
        $guia=guia::find($id);

        $seo = [
			'titulo' =>$guia->titulo,
			'descricao' =>$guia->descrição,
			'imagem' =>asset($guia->imagem),
			'url' => route('site.guia',[$guia->id,str_slug($guia->titulo,'_')]),
		];


        return view('site.guia',compact('guia','seo'));

    }
}
