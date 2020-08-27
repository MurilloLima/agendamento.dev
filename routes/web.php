<?php

Route::group(['prefix' => 'panel/client', 'middleware' => ['auth', 'client.check']], function() {
    
    Route::get('/', 'Panel\Client\HomeController@index')->name('client.index');
    Route::get('meus-agendamentos/', 'Panel\Client\AgendamentosController@index')->name('client.agendamentos');
    Route::get('profile/', 'Panel\Client\ProfileController@profile')->name('client.profile');
    Route::post('user/update/', 'Panel\Client\ProfileController@user')->name('client.user.update');
    Route::post('user/questions/', 'Panel\Client\ProfileController@questions')->name('client.user.questions');

    Route::post('agendamento/store/', 'Panel\Client\AgendamentosController@store')->name('client.agendamentos.store');
    
});

Route::group(['prefix' => 'panel/admin', 'middleware' => ['auth', 'admin.check']], function () {
    Route::get('/', 'Panel\Admin\HomeController@index')->name('admin.index');
    Route::get('clients/', 'Panel\Admin\ClientsController@index')->name('admin.clients');
    Route::get('clients/search/', 'Panel\Admin\ClientsController@search')->name('admin.clients.search');
    Route::get('clients/view/{id}', 'Panel\Admin\ClientsController@view')->name('admin.clients.view');
    
    //adgendamento
    Route::get('agendamentos/', 'Panel\Admin\AgendamentosController@index')->name('admin.agendamentos');
    Route::post('agendamento/store/', 'Panel\Admin\AgendamentosController@store')->name('admin.agendamentos.store');
    Route::post('agendamento/update/{id}', 'Panel\Admin\AgendamentosController@update')->name('admin.agendamentos.update');
    Route::get('agendamentos/{id}/delete/', 'Panel\Admin\AgendamentosController@delete')->name('admin.agendamento.delete');
    
    //notification
    Route::get('notification/{id}', 'Panel\Admin\AgendamentosController@notificatonDelete')->name('admin.notificaton.delete');

    //profile
    Route::get('profile/', 'Panel\Admin\ProfileController@profile')->name('admin.profile');
    Route::post('profile/update/{id}', 'Panel\Admin\ProfileController@update')->name('admin.profile.update');

    Route::get('user/{id}/edit/', 'Panel\Admin\UsersController@edit')->name('admin.user.edit');
    Route::get('user/{id}/delete/', 'Panel\Admin\UsersController@delete')->name('admin.user.delete');

    //comments
    Route::get('comments/{id}', 'Panel\Admin\CommentController@index')->name('admin.comments');
    Route::get('comments/{id}/delete/', 'Panel\Admin\CommentController@delete')->name('admin.comments.delete');
    Route::post('comments/store/', 'Panel\Admin\CommentController@store')->name('admin.comments.store');

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();