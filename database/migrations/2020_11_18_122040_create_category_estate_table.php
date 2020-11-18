<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryEstateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_estate', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('estate_id');
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('estate_id')
                ->references('id')
                ->on('estates')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_estate');
    }
}
