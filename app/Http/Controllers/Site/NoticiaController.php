<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Guia;

class HomeController extends Controller
{
    public function index()
    {
        $guias =  Guia::all();
        return view('site.noticia', compact('guias'));
    }
}
