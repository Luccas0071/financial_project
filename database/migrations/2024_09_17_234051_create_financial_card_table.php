<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_card', function (Blueprint $table) {
            
            $table->id();
            $table->string('identification');
            $table->double('limit');
            $table->integer('due_date');
            
            $table->unsignedBigInteger('financial_institution_id');

            $table->foreign('financial_institution_id')
                    ->references('id')
                    ->on('financial_institution')
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
        Schema::dropIfExists('transaction');
    }
}
