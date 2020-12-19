<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EstateTableFix extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estates', function (Blueprint $table) {
            $table->string('rent_price')->nullable()->change();
            $table->integer('room_count')->default(1)->after('img_link');
            $table->boolean('parking')->default(false)->after('img_link');
            $table->boolean('anbari')->default(false)->after('img_link');
            $table->boolean('elevator')->default(false)->after('img_link');
            $table->date('build_date')->after('area');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estates', function (Blueprint $table) {
            $table->dropColumn('room_count');
            $table->dropColumn('parking');
            $table->dropColumn('anbari');
            $table->dropColumn('elevator');
        });
    }
}
