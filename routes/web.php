<?php

Route::group(['prefix' => 'panel/client', 'middleware' => ['auth', 'client.check']], function() {
    
    Route::get('/', 'Panel\Client\HomeController@index')->name('client.index');
    Route::get('meus-agendamentos/', 'Panel\Client\AgendamentosController@index')->name('client.agendamentos');
    Route::get('profile/', 'Panel\Client\ProfileController@profile')->name('client.profile');
    Route::post('profile/store/', 'Panel\Client\ProfileController@store')->name('client.store');

    Route::post('agendamento/store/', 'Panel\Client\AgendamentosController@store')->name('client.agendamentos.store');
    
});

Route::group(['prefix' => 'panel/admin', 'middleware' => ['auth', 'admin.check']], function () {
    Route::get('/', 'Panel\Admin\HomeController@index')->name('admin.index');
    Route::get('clients/', 'Panel\Admin\ClientsController@index')->name('admin.clients');
    Route::get('agendamentos/', 'Panel\Admin\AgendamentosController@index')->name('admin.agendamentos');

    
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();