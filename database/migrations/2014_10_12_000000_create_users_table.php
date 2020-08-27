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
            $table->string('date_nasc')->nullable();
            $table->string('idade')->nullable();
            $table->string('cpf', 20)->nullable();
            $table->string('rg', 30)->nullable();
            $table->string('peso')->nullable();
            $table->string('altura', 50)->nullable();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('cep', 15)->nullable();
            $table->string('profissao')->nullable();
            $table->string('fone')->nullable();
            $table->string('img');
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
