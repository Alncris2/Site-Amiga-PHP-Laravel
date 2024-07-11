<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',['as'=>'site.home', 'uses' => 'Site\PaginaController@index']);

Route::get('/sobre',['as'=>'site.sobre', 'uses' => 'Site\PaginaController@sobre']);

Route::get('/contato',['as'=>'site.contato', 'uses' => 'Site\PaginaController@contato']);

Route::post('/contato/enviar',['as' =>'site.contato.enviar', 'uses' =>'Site\PaginaController@enviarContato']);

Route::get('/portal',['as'=>'site.portal', 'uses' => 'Site\PortalController@index']);

Route::get('/noticia',['as'=>'site.noticia', 'uses' => 'Site\NoticiaController@index']);

Route::get('/guia/{id}/{titulo?}',['as'=>'site.guia', 'uses' =>'Site\GuiaController@index']);

Route::get('/busca',['as'=>'site.busca', 'uses' =>'Site\NoticiaController@busca']);

Route::get('/admin/login',['as' => 'admin.login', function(){
	return view('admin.login.index');
}]);


Route::get('/atividade',['as' => 'site.atividade', function(){
	return view('site.atividade');
}]);

Route::post('/admin/login', ['as' => 'admin.login', 'uses' => 'Admin\UsuarioController@login']);


Route::middleware(['auth'])->group(function () {

	Route::get('/admin/login/sair', ['as' => 'admin.login.sair', 'uses' => 'Admin\UsuarioController@sair']);


    Route::get('/admin',['as' => 'admin.principal', function(){
	return view('admin.principal.index');
	}]);

    Route::get('/admin/usuarios', ['as' => 'admin.usuarios', 'uses' => 'Admin\UsuarioController@index']);

	Route::get('/admin/usuarios/adicionar', ['as' => 'admin.usuarios.adicionar', 'uses' => 'Admin\UsuarioController@adicionar']);

	Route::post('/admin/usuarios/salvar', ['as' => 'admin.usuarios.salvar', 'uses' => 'Admin\UsuarioController@salvar']);

	Route::get('/admin/usuarios/editar/{id}', ['as' => 'admin.usuarios.editar', 'uses' => 'Admin\UsuarioController@editar']);

	Route::put('/admin/usuarios/atualizar/{id}', ['as' => 'admin.usuarios.atualizar', 'uses' => 'Admin\UsuarioController@atualizar']);

	Route::get('/admin/usuarios/deletar/{id}', ['as' => 'admin.usuarios.deletar', 'uses' => 'Admin\UsuarioController@deletar']);


	Route::get('admin/paginas',['as' => 'admin.paginas', 'uses' => 'Admin\PaginaController@index']);
	
	Route::get('admin/paginas/editar/{id}',['as' => 'admin.paginas.editar', 'uses' => 'Admin\PaginaController@editar']);
	
	Route::put('admin/paginas/atualizar/{id}',['as' => 'admin.paginas.atualizar', 'uses' => 'Admin\PaginaController@atualizar']);


	Route::get('/admin/tipos', ['as' => 'admin.tipos', 'uses' => 'Admin\TipoController@index']);

	Route::get('/admin/tipos/adicionar', ['as' => 'admin.tipos.adicionar', 'uses' => 'Admin\TipoController@adicionar']);

	Route::post('/admin/tipos/salvar', ['as' => 'admin.tipos.salvar', 'uses' => 'Admin\TipoController@salvar']);

	Route::get('/admin/tipos/editar/{id}', ['as' => 'admin.tipos.editar', 'uses' => 'Admin\TipoController@editar']);

	Route::put('/admin/tipos/atualizar/{id}', ['as' => 'admin.tipos.atualizar', 'uses' => 'Admin\TipoController@atualizar']);

	Route::get('/admin/tipos/deletar/{id}', ['as' => 'admin.tipos.deletar', 'uses' => 'Admin\TipoController@deletar']);



	Route::get('/admin/guias', ['as' => 'admin.guias', 'uses' => 'Admin\GuiaController@index']);

	Route::get('/admin/guias/adicionar', ['as' => 'admin.guias.adicionar', 'uses' => 'Admin\GuiaController@adicionar']);

	Route::put('/admin/guias/salvar', ['as' => 'admin.guias.salvar', 'uses' => 'Admin\GuiaController@salvar']);

	Route::get('/admin/guias/editar/{id}', ['as' => 'admin.guias.editar', 'uses' => 'Admin\GuiaController@editar']);

	Route::put('/admin/guias/atualizar/{id}', ['as' => 'admin.guias.atualizar', 'uses' => 'Admin\GuiaController@atualizar']);

	Route::get('/admin/guias/deletar/{id}', ['as' => 'admin.guias.deletar', 'uses' => 'Admin\GuiaController@deletar']);



	Route::get('/admin/galerias/{id}', ['as' => 'admin.galerias', 'uses' => 'Admin\GaleriaController@index']);

	Route::get('/admin/galerias/adicionar/{id}', ['as' => 'admin.galerias.adicionar', 'uses' => 'Admin\GaleriaController@adicionar']);

	Route::post('/admin/galerias/salvar/{id}', ['as' => 'admin.galerias.salvar', 'uses' => 'Admin\GaleriaController@salvar']);

	Route::get('/admin/galerias/editar/{id}', ['as' => 'admin.galerias.editar', 'uses' => 'Admin\GaleriaController@editar']);

	Route::put('/admin/galerias/atualizar/{id}', ['as' => 'admin.galerias.atualizar', 'uses' => 'Admin\GaleriaController@atualizar']);

	Route::get('/admin/galerias/deletar/{id}', ['as' => 'admin.galerias.deletar', 'uses' => 'Admin\GaleriaController@deletar']);


	Route::get('/admin/slides', ['as' => 'admin.slides', 'uses' => 'Admin\SlideController@index']);

	Route::get('/admin/slides/adicionar', ['as' => 'admin.slides.adicionar', 'uses' => 'Admin\SlideController@adicionar']);

	Route::post('/admin/slides/salvar', ['as' => 'admin.slides.salvar', 'uses' => 'Admin\SlideController@salvar']);

	Route::get('/admin/slides/editar/{id}', ['as' => 'admin.slides.editar', 'uses' => 'Admin\SlideController@editar']);

	Route::put('/admin/slides/atualizar/{id}', ['as' => 'admin.slides.atualizar', 'uses' => 'Admin\SlideController@atualizar']);

	Route::get('/admin/slides/deletar/{id}', ['as' => 'admin.slides.deletar', 'uses' => 'Admin\SlideController@deletar']);

	
	Route::get('/admin/portals', ['as' => 'admin.portals', 'uses' => 'Admin\PortalController@index']);

	Route::get('/admin/portals/adicionar', ['as' => 'admin.portals.adicionar', 'uses' => 'Admin\PortalController@adicionar']);

	Route::put('/admin/portals/salvar', ['as' => 'admin.portals.salvar', 'uses' => 'Admin\PortalController@salvar']);

	Route::get('/admin/portals/editar/{id}', ['as' => 'admin.portals.editar', 'uses' => 'Admin\PortalController@editar']);

	Route::put('/admin/portals/atualizar/{id}', ['as' => 'admin.portals.atualizar', 'uses' => 'Admin\PortalController@atualizar']);

	Route::get('/admin/portals/deletar/{id}', ['as' => 'admin.portals.deletar', 'uses' => 'Admin\PortalController@deletar']);




	return view('admin.principal.index');
});

	