<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('race_id')->unsigned();
            $table->foreign('race_id')->references('id')->on('races')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karts');
    }
}
