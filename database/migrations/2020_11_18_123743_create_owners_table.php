<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->unsignedInteger('user_id');
            $table->string('father-name', 100);
            $table->text('email');
            $table->string('phone_number', 100);
            $table->string('national_code', 100);
            $table->date('birth_date');
            $table->text('address');
            $table->text('post_code');
            $table->timestamps();


            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owners');
    }
}
