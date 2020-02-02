<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reveals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->time('from', 0);
            $table->time('to', 0);
            $table->bigInteger('limit');
            $table->unsignedBigInteger('doctor_id')->nullable()->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('doctor_id')->references('id')->on('users');
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('reveals');
    }
}
