<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('association');
            $table->string('type');
            $table->string('control_number');
            $table->string('operator');
            $table->string('profile');
            $table->string('address');
            $table->string('body_number');
            $table->integer('units')->nullable();
            $table->string('or_number');
            $table->string('amount_paid')->nullable();
            $table->string('sticker_number')->nullable();
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
        Schema::dropIfExists('operators');
    }
}
