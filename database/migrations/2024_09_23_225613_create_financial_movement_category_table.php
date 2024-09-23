<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialMovementCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_movement_category', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('financial_movement_id');

            $table->foreign('category_id')
                    ->references('id')
                    ->on('category')
                    ->onDelete('cascade');

            $table->foreign('financial_movement_id')
                    ->references('id')
                    ->on('financial_movement')
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
        Schema::dropIfExists('financial_movement_category');
    }
}
