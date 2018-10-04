<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLuxuriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luxuries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('luxury_image');
            $table->longText('description');
            $table->string('designer');
            $table->double('offer_price');
            $table->string('status');
            $table->string('bid_status');

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
        Schema::dropIfExists('luxuries');
    }
}
