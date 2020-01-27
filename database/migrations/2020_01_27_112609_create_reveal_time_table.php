<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevealTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reveal_time', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('day', ['satrday', 'sunday','monday','tuesday'
            ,'wednesday','thursday','friday']);
            $table->time('time', 0);
            $table->bigInteger('limit');

            $table->unsignedBigInteger('doctor_id')->nullable()->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('doctor_id')->references('id')->on('users');

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
        Schema::dropIfExists('reveal_time');
    }
}
