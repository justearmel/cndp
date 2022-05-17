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
        Schema::create('rating', function (Blueprint $table) {
            $table->id();
            $table->string('codeEtab_rating', 50)->nullable();
            $table->string('sessionEtab_rating', 50)->nullable();
            $table->string('studentmat_rating',50)->nullable();
            $table->integer('ideleve_rating')->default(0);
            $table->integer('idclasse_rating')->default(0);
            $table->integer('idteacher_rating')->default(0);
            $table->integer('idmatiere_rating')->default(0);
            $table->double('totalnotes_rating')->default(0);
            $table->double('totalnotescoef_rating')->default(0);
            $table->double('totalcoef_rating')->default(0);
            $table->integer('nc_rating')->default(0);
            $table->integer('semestre_rating')->default(0);
            $table->double('rating', 2,2)->default(0);
            $table->double('ratingxcoef_rating')->default(0);
            $table->integer('ranking_rating')->nullable();
            $table->string('mention_rating', 255)->nullable();
            $table->enum('niveau_rating', ['SIXIEME', 'CINQUIEME', 'QUATRIEME','TROISIEME','SECONDE','PREMIERE','TERMINALE'])->nullable();
            $table->enum('cycle_rating', ['1ER CYCLE', '2ND CYCLE'])->nullable();
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
        Schema::dropIfExists('rating');
    }
};
