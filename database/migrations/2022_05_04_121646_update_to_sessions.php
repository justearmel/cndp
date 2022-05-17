<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->integer('nbfilles_sessions')->default(0);
            $table->integer('nbgarcons_sessions')->default(0);
            $table->integer('nbinternes_sessions')->default(0);
            $table->integer('nbexternes_sessions')->default(0);
            $table->integer('nbaffecte_sessions')->default(0);
            $table->integer('nbnonaffecte_sessions')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sessions', function (Blueprint $table) {
            //
        });
    }
};
