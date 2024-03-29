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


Route::get('/',['as'=>'site.home', function(){
    return view('site.home');
}]);
Route::get('/sobre',['as'=>'site.sobre', 'uses' => 'Site\PaginaController@sobre']);

Route::get('/contato',['as'=>'site.contato', 'uses' => 'Site\PaginaController@contato']);

Route::post( '/contato/enviar',['as' =>'site.contato.enviar', 'uses' =>'Site\PaginaController@enviarContato']);



Route::get('/noticia',['as'=>'site.noticia', 'uses' =>'Site\NoticiaController@index']);




Route::get('/portal',['as'=>'site.portal', function(){
    return view('site.portal');
}]);
Route::get('/guia/{id}/{titulo?}',['as'=>'site.guia', 'uses' =>'Site\GuiaController@']);


Route::get('/admin/login',['as' => 'admin.login', function(){
	return view('admin.login.index');
}]);


Route::post('/admin/login', ['as' => 'admin.login', 'uses' => 'Admin\UsuarioController@login']);


Route::middleware(['auth'])->group(function () {

	Route::get('/admin/login/sair', ['as' => 'admin.login.sair', 'uses' => 'Admin\UsuarioController@sair']);


    Route::get('/admin',['as' => 'admin.principal', function(){
	return view('admin.principal.index');
	}]);

    Route::get('/admin/usuarios', ['as' => 'admin.usuarios', 'uses' => 'Admin\UsuarioController@index']);

	Route::get('/admin/usuarios/adicionar', ['as' => 'admin.usuarios.adicionar', 'uses' => 'Admin\UsuarioController@adicionar']);

	Route::get('/admin/usuarios/salvar', ['as' => 'admin.usuarios.salvar', 'uses' => 'Admin\UsuarioController@salvar']);

	Route::get('/admin/usuarios/editar/{id}', ['as' => 'admin.usuarios.editar', 'uses' => 'Admin\UsuarioController@editar']);

	Route::put('/admin/usuarios/atualizar/{id}', ['as' => 'admin.usuarios.atualizar', 'uses' => 'Admin\UsuarioController@atualizar']);

	Route::get('/admin/usuarios/deletar/{id}', ['as' => 'admin.usuarios.deletar', 'uses' => 'Admin\UsuarioController@deletar']);

	Route::get('admin/paginas',['as' => 'admin.paginas', 'uses' => 'Admin\PaginaController@index']);
	
	Route::get('admin/paginas/editar/{id}',['as' => 'admin.paginas.editar', 'uses' => 'Admin\PaginaController@editar']);
	
	Route::put('admin/paginas/atualizar/{id}',['as' => 'admin.paginas.atualizar', 'uses' => 'Admin\PaginaController@atualizar']);


	Route::get('/admin/tipos', ['as' => 'admin.tipos', 'uses' => 'Admin\TipoController@index']);

	Route::get('/admin/tipos/adicionar', ['as' => 'admin.tipos.adicionar', 'uses' => 'Admin\TipoController@adicionar']);

	Route::get('/admin/tipos/salvar', ['as' => 'admin.tipos.salvar', 'uses' => 'Admin\TipoController@salvar']);

	Route::get('/admin/tipos/editar/{id}', ['as' => 'admin.tipos.editar', 'uses' => 'Admin\TipoController@editar']);

	Route::put('/admin/tipos/atualizar/{id}', ['as' => 'admin.tipos.atualizar', 'uses' => 'Admin\TipoController@atualizar']);

	Route::get('/admin/tipos/deletar/{id}', ['as' => 'admin.tipos.deletar', 'uses' => 'Admin\TipoController@deletar']);



	Route::get('/admin/guias', ['as' => 'admin.guias', 'uses' => 'Admin\GuiaController@index']);

	Route::get('/admin/guias/adicionar', ['as' => 'admin.guias.adicionar', 'uses' => 'Admin\GuiaController@adicionar']);

	Route::get('/admin/guias/salvar', ['as' => 'admin.guias.salvar', 'uses' => 'Admin\GuiaController@salvar']);

	Route::get('/admin/guias/editar/{id}', ['as' => 'admin.guias.editar', 'uses' => 'Admin\GuiaController@editar']);

	Route::put('/admin/guias/atualizar/{id}', ['as' => 'admin.guias.atualizar', 'uses' => 'Admin\GuiaController@atualizar']);

	Route::get('/admin/guias/deletar/{id}', ['as' => 'admin.guias.deletar', 'uses' => 'Admin\GuiaController@deletar']);



	Route::get('/admin/galerias/{id}', ['as' => 'admin.galerias', 'uses' => 'Admin\GaleriaController@index']);

	Route::get('/admin/galerias/adicionar/{id}', ['as' => 'admin.galerias.adicionar', 'uses' => 'Admin\GaleriaController@adicionar']);

	Route::get('/admin/galerias/salvar/{id}', ['as' => 'admin.galerias.salvar', 'uses' => 'Admin\GaleriaController@salvar']);

	Route::get('/admin/galerias/editar/{id}', ['as' => 'admin.galerias.editar', 'uses' => 'Admin\GaleriaController@editar']);

	Route::put('/admin/galerias/atualizar/{id}', ['as' => 'admin.galerias.atualizar', 'uses' => 'Admin\GaleriaController@atualizar']);

	Route::get('/admin/galerias/deletar/{id}', ['as' => 'admin.galerias.deletar', 'uses' => 'Admin\GaleriaController@deletar']);


	return view('admin.principal.index');
});

	