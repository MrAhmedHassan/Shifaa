<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patientName');
            $table->date('date');
            $table->softDeletes();
            $table->string('phone');
            $table->unsignedBigInteger('patient_id')->nullable()->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('patient_id')->references('id')->on('users');
            $table->unsignedBigInteger('reveal_id')->nullable()->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('reveal_id')->references('id')->on('reveals');
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
        Schema::dropIfExists('reservations');
    }
}
