<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('ordems', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            //Dados
            $table->increments('id');
            $table->string('defeito', 255);
            $table->date('data_nota_fiscal');
            $table->decimal('numero_nota_fiscal');
            $table->decimal('orcamento');
            $table->string('status', 20);
            $table->string('tecnico', 50);
            $table->date('data_entrada');
            $table->date('data_saida');
            $table->boolean('aprovacao');
            $table->string('peca', 50);
            $table->string('servico', 255);
            $table->string('observacao', 255);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            //Produto
            $table->string('name',255);
            $table->string('marca',255);
            $table->string('estado',255);
            $table->string('modelo',255);
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
        Schema::dropIfExists('ordems');
    }
}
