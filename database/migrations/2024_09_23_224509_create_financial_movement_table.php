<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialMovementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_movement', function (Blueprint $table) {
            $table->id();
            $table->string('identification');
            $table->date('date');
            $table->double('value');
            $table->integer('period_qty ')->nullable();
            $table->string('description')->nullable();
            $table->integer('type')->nullable();
            $table->integer('period')->nullable();
            $table->integer('situation')->nullable();
            $table->integer('metod')->nullable();

            $table->unsignedBigInteger('financial_movement_id')->nullable();
            $table->unsignedBigInteger('financial_card_id')->nullable();
            $table->unsignedBigInteger('source_financial_institution_id')->nullable();
            $table->unsignedBigInteger('destination_financial_institution_id')->nullable();
            $table->unsignedBigInteger('user_id');

            $table->foreign('financial_movement_id')
                    ->references('id')
                    ->on('financial_movement')
                    ->onDelete('restrict');

            $table->foreign('financial_card_id')
                    ->references('id')
                    ->on('financial_card')
                    ->onDelete('restrict');

            $table->foreign('source_financial_institution_id')
                    ->references('id')
                    ->on('financial_institution')
                    ->onDelete('restrict');

            $table->foreign('destination_financial_institution_id')
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
        Schema::dropIfExists('financial_movement');
    }
}
