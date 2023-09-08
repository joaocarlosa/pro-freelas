<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descricao');
            $table->unsignedBigInteger('autor_id');
            $table->string('arquivo')->nullable();
            $table->string('link')->nullable();
            $table->integer('categoria_id');
            $table->enum('status', ['Em Aberto', 'Fechado', 'Concluído', 'Cancelado'])->default('Em Aberto');
            $table->string('prazo');
            $table->string('nivel_experiencia');
            $table->decimal('investimento_inicio')->nullable();
            $table->decimal('investimento_fim')->nullable();
            $table->timestamps();

            $table->foreign('autor_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos');
    }
};
