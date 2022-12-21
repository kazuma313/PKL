<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBagianIdToFungsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fungsis', function (Blueprint $table) {
            //
            $table->foreignId('bagian_id')->after('no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fungsis', function (Blueprint $table) {
            //
            $table->dropColumn('bagian_id');
        });
    }
}
