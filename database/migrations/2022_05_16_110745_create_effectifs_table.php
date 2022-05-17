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
        Schema::create('effectifs', function (Blueprint $table) {
            $table->id('id_effec');
            $table->string('sessionEtab_effec', 20)->nullable();
            $table->string('codeEtab_effec', 50)->nullable();
            $table->enum('type_effec', ['SIXIEME', 'CINQUIEME', 'QUATRIEME','TROISIEME','SECONDE','PREMIERE','TERMINALE'])->nullable();
            $table->enum('cycle_effec', ['1ER CYCLE', '2ND CYCLE'])->nullable();
            $table->integer('inscrits_effec')->default(0);
            $table->integer('sortant_effec')->default(0);
            $table->integer('doublant_effec')->default(0);
            $table->integer('interne_effec')->default(0);
            $table->integer('externe_effec')->default(0);
            $table->integer('orphelin_effec')->default(0);
            $table->integer('affecte_effec')->default(0);
            $table->integer('nonaffecte_effec')->default(0);
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
        Schema::dropIfExists('effectifs');
    }
};
