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
        Schema::create('thegeneralerate', function (Blueprint $table) {
            $table->id();
            $table->string('codeEtab_thegeneralerate', 50)->nullable();
            $table->string('sessionEtab_thegeneralerate', 50)->nullable();
            $table->integer('semetre_thegeneralerate')->nullable();
            $table->string('studentmat_thegeneralerate',50)->nullable();
            $table->integer('ideleve_thegeneralerate')->default(0);
            $table->integer('idclasse_thegeneralerate')->default(0);
            $table->double('mg_thegeneralerate',2,2)->default(0);
            $table->integer('rg_thegeneralerate')->default(0);
            $table->integer('coef_thegeneralerate')->default(0);
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
        Schema::dropIfExists('thegeneralerate');
    }
};
