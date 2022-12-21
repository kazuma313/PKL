<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsiGaleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isi_galeries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('galeri_id')->constrained('galeries')->onDelete('cascade')->onUpdate('cascade');
            $table->string('jenis',25);
            $table->string('letak');
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
        Schema::dropIfExists('isi_galeries');
    }
}
