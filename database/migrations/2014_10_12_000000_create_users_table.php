<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('client');
            $table->string('date_nasc');
            $table->string('idade');
            $table->string('cpf', 20);
            $table->string('rg', 30);
            $table->string('peso');
            $table->string('altura', 50);
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('cep', 15);
            $table->string('profissao')->nullable();
            $table->string('fone');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
