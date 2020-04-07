<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('number');
            $table->unsignedSmallInteger('count_apartments');
            $table->string('note', 100);
            $table->unsignedBigInteger('street_id');
            $table->timestamps();

            $table->foreign('street_id')->references('id')->on('streets');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buildings');
    }
}
