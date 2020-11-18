<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('owner_id');
            $table->string('title', 100);
            $table->text('description');
            $table->Integer('price'); // - rahn & + sell
            $table->unsignedInteger('rent_price'); //  ejare
            $table->string('usage', 100);
            $table->integer('area');
            $table->string('location', 50);
            $table->string('img_link', 255);
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id ')
                ->on('users')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('owner_id')
                ->references('id ')
                ->on('owners')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estates');
    }
}
