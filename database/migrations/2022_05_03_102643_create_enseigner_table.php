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
        Schema::create('enseigner', function (Blueprint $table) {
            $table->id();
            $table->integer('idclasse_enseig')->default(0);
            $table->integer('idteacher_enseig')->default(0);
            $table->integer('idmatiere_enseig')->default(0);
            $table->string('codeEtab_enseig', 50)->nullable();
            $table->string('sessionEtab_enseig', 50)->nullable();
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
        Schema::dropIfExists('enseigner');
    }
};
