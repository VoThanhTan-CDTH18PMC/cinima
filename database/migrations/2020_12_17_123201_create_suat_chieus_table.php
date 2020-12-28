<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuatChieusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suat_chieus', function (Blueprint $table) {
            $table->increments('id');
            $table->time('GioChieu');
            $table->date('NgayChieu');
            $table->integer('phim_id')->unsigned()->index();
            $table->integer('rap_id')->unsigned()->index();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('rap_id')->references('id')->on('raps');
            $table->foreign('phim_id')->references('id')->on('phims');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suat_chieus');
    }
}
