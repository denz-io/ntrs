<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSikadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sikads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('association');
            $table->string('control_number');
            $table->string('operator');
            $table->string('profile');
            $table->string('address');
            $table->string('body_number');
            $table->integer('units');
            $table->string('or_number');
            $table->string('amount_paid');
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
        Schema::dropIfExists('sikads');
    }
}
