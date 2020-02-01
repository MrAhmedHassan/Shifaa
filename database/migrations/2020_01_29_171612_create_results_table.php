<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fromm')->nullable();
            $table->bigInteger('too')->nullable();
            $table->string('result')->nullable();
            $table->unsignedBigInteger('test_id')->nullable()->on('tests')->onUpdate('cascade')->onDelete('set null')->nullable();
            $table->foreign('test_id')->references('id')->on('tests')->nullable();
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
        Schema::dropIfExists('results');
    }
}
