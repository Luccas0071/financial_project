<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_account', function (Blueprint $table) {
            $table->id();
            $table->string('identification');
            $table->double('balance')->nullable();
            $table->string('description')->nullable();
            $table->integer('type')->nullable();

            $table->unsignedBigInteger('institution_id')->nullable();
            $table->unsignedBigInteger('user_id');
            
            $table->foreign('institution_id')
                    ->references('id')
                    ->on('financial_institution')
                    ->onDelete('restrict');

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');


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
        Schema::dropIfExists('financial_account');
    }
}
