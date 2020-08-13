<?php

Route::get('/', 'Home\HomeController@index')->name('home.index');
Route::get('sobre/', 'Home\HomeController@sobre')->name('home.sobre');
Route::get('como-funciona/', 'Home\HomeController@funciona')->name('home.funciona');
Route::get('seguranca/', 'Home\HomeController@seguranca')->name('home.seguranca');
Route::get('vantagens/', 'Home\HomeController@vantagens')->name('home.vantagens');
Route::get('encontre-um-escritorio/', 'Home\HomeController@encontre')->name('home.encontre');
Route::get('ouvidoria/', 'Home\HomeController@ouvidoria')->name('home.ouvidoria');

// Route::get('lucas/', 'Home\HomeController@lucas')->name('home.lucas');
Route::get('contatos/', 'Home\HomeController@contatos')->name('home.contatos');
//blog
Route::get('blog/', 'Home\HomeController@blog')->name('home.blog');
Route::get('blog/view/{slug}', 'Home\BlogController@view')->name('home.blog.view');
Route::get('blog/search/', 'Home\BlogController@search')->name('home.blog.search');


Route::get('atendimento/', 'Home\HomeController@atendimento')->name('home.atendimento');
Route::get('artigo/', 'Home\HomeController@artigos')->name('home.artigos');
Route::get('analises/', 'Home\HomeController@analises')->name('home.analises');
Route::get('trabalhe-conosco/', 'Home\HomeController@trabalhe')->name('home.trabalhe');

//dashboad admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin.check']], function () {
	Route::get('/', 'Painel\Admin\HomeController@index')->name('admin.index');
	Route::get('blog/', 'Painel\Admin\BlogController@index')->name('admin.blog');

	//planos
	Route::get('planos/', 'Painel\Admin\PlanosController@index')->name('admin.planos');
	Route::post('planos/store/', 'Painel\Admin\PlanosController@store')->name('admin.planos.store');
	Route::get('planos/delete/{id}', 'Painel\Admin\PlanosController@delete')->name('admin.planos.delete');
	Route::post('planos/update/{id}', 'Painel\Admin\PlanosController@update')->name('admin.planos.update');

	//blog
	Route::get('blog/create/', 'Painel\Admin\BlogController@create')->name('admin.blog.create');
	Route::get('blog/edit/{id}', 'Painel\Admin\BlogController@edit')->name('admin.blog.edit');
	Route::post('blog/store/', 'Painel\Admin\BlogController@store')->name('admin.blog.store');
	Route::post('blog/update/{id}', 'Painel\Admin\BlogController@update')->name('admin.blog.update');
	Route::get('blog/delete/{id}', 'Painel\Admin\BlogController@delete')->name('admin.blog.delete');

	//clients
	Route::get('clients/', 'Painel\Admin\ClientsController@index')->name('admin.clients');

	//solicitacoes
	Route::get('depositos/', 'Painel\Admin\SolicitacoesController@depositos')->name('admin.depositos');
	Route::get('retiradas/', 'Painel\Admin\SolicitacoesController@retiradas')->name('admin.retiradas');

	//balance
	Route::post('balance/deposit/store/{id}', 'Painel\Admin\BalanceController@store')->name('admin.deposit.store');
	Route::post('balance/retirar/saldo/{id}', 'Painel\Admin\BalanceController@retirar')->name('admin.deposit.retirar');

	//historic
	Route::get('balance/historic/client/{id}', 'Painel\Admin\BalanceController@historic')->name('admin.client.historic');

	//user profile

	Route::get('profile', ['as' => 'admin.profile.edit', 'uses' => 'Painel\Admin\ProfileController@edit']);
	Route::put('profile', ['as' => 'admin.profile.update', 'uses' => 'Painel\Admin\ProfileController@update']);
	Route::put('profile/password', ['as' => 'admin.profile.password', 'uses' => 'Painel\Admin\ProfileController@password']);

});

//dashboad client
Route::group(['prefix' => 'client', 'middleware' => ['auth', 'client.check']], function () {
	Route::get('/', 'Painel\Client\HomeController@index')->name('client.index');
	Route::get('historic/', 'Painel\Client\BalanceController@historic')->name('client.historic');
	Route::get('conteudos/', 'Painel\Client\HomeController@conteudos')->name('client.conteudos');
	Route::get('ajuda/', 'Painel\Client\HomeController@ajuda')->name('client.ajuda');

	// faz deposito
	Route::post('balance/deposit/store/', 'Painel\Client\DepositoController@store')->name('client.deposit.store');

	//retirada
	Route::post('balance/retirar/store/', 'Painel\Client\RetirarController@store')->name('client.retirar.store');

	//historic
	Route::get('balance/historic/', 'Painel\Client\BalanceController@historic')->name('client.historic');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
Auth::routes();
