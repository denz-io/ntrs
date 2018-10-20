<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Databasechange extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('associations', function (Blueprint $table) {
            $table->renameColumn('head', 'association_head');
            $table->renameColumn('color', 'association_color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('associations', function (Blueprint $table) {
            $table->renameColumn('association_head', 'head');
            $table->renameColumn('association_color', 'color');
        });
    }
}
