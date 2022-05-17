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
        Schema::create('ratingsous', function (Blueprint $table) {
            $table->id();
            $table->string('codeEtab_ratingsous', 50)->nullable();
            $table->string('sessionEtab_ratingsous', 50)->nullable();
            $table->string('studentmat_ratingsous',50)->nullable();
            $table->integer('ideleve_ratingsous')->default(0);
            $table->integer('idclasse_ratingsous')->default(0);
            $table->integer('idteacher_ratingsous')->default(0);
            $table->integer('idmatiere_ratingsous')->default(0);
            $table->integer('idsousmatiere_ratingsous')->default(0);
            $table->double('totalnotes_ratingsous')->default(0);
            $table->double('totalnotescoef_ratingsous')->default(0);
            $table->double('totalcoef_ratingsous')->default(0);
            $table->integer('nc_ratingsous')->default(0);
            $table->integer('semestre_ratingsous')->default(0);
            $table->double('ratingsous', 2,2)->default(0);
            $table->double('ratingsousmin_ratingsous', 2,2)->default(0);
            $table->double('ratingsousmax_ratingsous', 2,2)->default(0);
            $table->double('ratingxcoef_ratingsous')->default(0);
            $table->integer('ranking_ratingsous')->nullable();
            $table->string('mention_ratingsous', 255)->nullable();
            $table->enum('niveau_ratingsous', ['SIXIEME', 'CINQUIEME', 'QUATRIEME','TROISIEME','SECONDE','PREMIERE','TERMINALE'])->nullable();
            $table->enum('cycle_ratingsous', ['1ER CYCLE', '2ND CYCLE'])->nullable();
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
        Schema::dropIfExists('ratingsous');
    }
};
