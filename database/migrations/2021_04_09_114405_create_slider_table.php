<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->id();
            $table->string('main_slider_1')->nullable();
            $table->string('main_slider_2')->nullable();
            $table->string('main_slider_3')->nullable();
            $table->string('sub_slider_1')->nullable();
            $table->string('sub_slider_2')->nullable();
            $table->string('sub_slider_3')->nullable();
            $table->string('mid_slider_1')->nullable();
            $table->string('mid_slider_2')->nullable();
            $table->string('mid_slider_3')->nullable();
            $table->string('mid_slider_4')->nullable();
           
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
        Schema::dropIfExists('slider');
    }
}
