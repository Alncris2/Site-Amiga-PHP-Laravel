<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pagina;
use App\Slide;
use App\Guia;

class PaginaController extends Controller
{
	public function sobre()
	{
		$pagina = Pagina::where('tipo', '=', 'sobre')->first();

		return view('site.sobre', compact('pagina'));
	}
	public function contato()
	{
		$pagina = Pagina::where('tipo', '=', 'contato')->first();

		return view('site.contato', compact('pagina'));
	}

	public function index()
	{
		$slides = Slide::where('publicado', '=', 'sim')->orderBy('ordem')->get();
		$pagina = Pagina::where('tipo', '=', 'Home')->first();

		return view('site.home')->with(compact('pagina', 'slides'));
	}

	public function enviarContato(Request $request)
	{
		$pagina = Pagina::where('tipo', '=', 'contato')->first();
		$email = $pagina->email;

		\Mail::send(
			'emails.contato',
			['request' => $request],
			function ($m) use ($request, $email) {
				$m->from($request['email'], $request['nome']);
				$m->replyTo($request['email'], $request['nome']);
				$m->subject('Contato pelo Site');
				$m->To($email, 'Contato do Site');
			}
		);

		\Session::flash('mensagem', ['msg' => 'Contato enviado com sucesso!', 'class' => 'green white-text']);
		\Session::flash('icon', ['class' => 'ion-ios-checkmark-circle']);
		\Session::flash('alert', ['msg' => 'Alerta: ', 'class' => 'mb-0 ml-2']);
		return redirect(route('site.contato'));
	}
}
