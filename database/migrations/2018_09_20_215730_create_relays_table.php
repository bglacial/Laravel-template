<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelaysTable extends Migration
{
    /**
     * Run the migrations.
     *kartID, driverID, relayStart, fuel, comments
     * @return void
     */
    public function up()
    {
        Schema::create('relays', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kart_id')->unsigned();
            $table->foreign('kart_id')->references('id')->on('karts')->onDelete('no action');
            $table->integer('pilot_id')->unsigned();
            $table->foreign('pilot_id')->references('id')->on('pilots')->onDelete('no action');
            $table->timestamp('relay_start');
            $table->boolean('fuel');
            $table->text('comment');
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
        Schema::dropIfExists('relays');
    }
}
