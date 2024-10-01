<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('identification');
            $table->string('color')->nullable();
            $table->unsignedBigInteger('category_id')->nullable(); // Cria a coluna para o ID do usuário
            $table->unsignedBigInteger('user_id'); // Cria a coluna para o ID do usuário

            $table->foreign('user_id') // Define como chave estrangeira
                    ->references('id') // Refere-se à coluna 'id'
                    ->on('users') // Refere-se à tabela 'users'
                    ->onDelete('cascade'); // Define o que acontece ao deletar o usuário
            
            $table->foreign('category_id') // Define como chave estrangeira
                    ->references('id') // Refere-se à coluna 'id'
                    ->on('category') // Refere-se à tabela 'users'
                    ->onDelete('cascade'); // Define o que acontece ao deletar o usuário

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
        Schema::dropIfExists('category');
    }
}
