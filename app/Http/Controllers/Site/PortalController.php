<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portal;

class PortalController extends Controller
{
    public function index()
    {
        $portals =  Portal::orderBy('id', 'desc')->paginate();
        $paginacao = true;
                
        return view('site.portal', compact('portals','paginacao'));
    }

}
