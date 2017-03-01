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
        Schema::defaultStringLength(191);
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('nome', 255);
            $table->string('telefone', 12);
            $table->date('nascimento');
            $table->string('login', 11)->unique();
            $table->string('password');
            $table->string('cpf', 11);
            $table->decimal('type')->unsigned();

//          Endereco
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->integer('numero');
            $table->string('complemento',50);
            $table->string('rua', 50);

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
