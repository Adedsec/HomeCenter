<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('estate_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('owner_id');
            $table->timestamps();

            $table->foreign('estate_id')
                ->references('id')
                ->on('estates')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreign('customer_id')
                ->references('id')
                ->on('customers')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreign('owner_id')
                ->references('id')
                ->on('owners')
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
        Schema::dropIfExists('orders');
    }
}
