<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTricyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tricycles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('association');
            $table->string('operator');
            $table->string('control_number');
            $table->string('profile');
            $table->string('address');
            $table->string('body_number');
            $table->integer('units');
            $table->string('contact');
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
        Schema::dropIfExists('tricycles');
    }
}
