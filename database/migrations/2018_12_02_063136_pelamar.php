<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pelamar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamar', function(Blueprint $table) {
            $table->increments('id');
            $table->integer("recruitment_id")->unsigned();
            $table->string("email", 100);
            $table->string("nama", 100);
            $table->string("cv", 100);
            $table->string("surat_lamaran", 100);
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
        Schema::dropIfExists('pelamar');
    }
}
