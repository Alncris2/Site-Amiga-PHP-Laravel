<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Pagina;

class PaginasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $existe = Pagina::where('tipo','=','sobre')->count();

        if($existe){
        	$paginaSobre = Pagina::where('tipo','=','sobre')->first();
        }
        else{
        	$paginaSobre = new Pagina();
        }

        $paginaSobre->titulo = 'Amiga';
        $paginaSobre->descricao = 'Descrição breve sobre a empresa.';
        $paginaSobre->texto = 'Texto sobre a empresa.';
        $paginaSobre->imagem = 'lib/img/amiga2.jpeg';
        $paginaSobre->tipo = 'sobre';
        $paginaSobre->save();

        if($existe){
            $paginaContato = Pagina::where('tipo','=','contato')->first();
        }
        else{
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = 'Ou entre em contato';
        $paginaContato->descricao = 'Preencha o formulário';
        $paginaContato->texto = '
        Rua Cap. Vitoriano Machado, 565 - Centro
        Igarapava-SP - CEP: 14540-000
        Fone: (16) 98225-0062';
        $paginaContato->imagem = 'lib/img/amiga2.jpeg';
        $paginaContato->email = 'admin@admin.com';
        $paginaContato->mapa = '<iframe
        src="https://www.google.com/maps/embed?pb=!4v1600130783158!6m8!1m7!1slbTAeKhqeCVE4Nh6id27ig!2m2!1d-20.03842936921668!2d-47.75200883792919!3f272.21316806201384!4f-8.684760643138773!5f0.7820865974627469"
        width="600" height="450" frameborder="0" style="border:0;"
        allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
        $paginaContato->tipo = 'contato';
        $paginaContato->save();
    }
}

