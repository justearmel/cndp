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
        Schema::table('inscriptions', function (Blueprint $table) {
           
            $table->integer('doublant_inscriptions')->after('sortant_inscriptions')->default(0);
            $table->integer('affecter_inscriptions')->after('doublant_inscriptions')->default(0);
            $table->integer('interne_inscriptions')->after('affecter_inscriptions')->default(0);
            $table->integer('externe_inscriptions')->after('interne_inscriptions')->default(1);
            $table->integer('orphelins_inscriptions')->after('externe_inscriptions')->default(0);
            $table->integer('bourse_inscriptions')->after('orphelins_inscriptions')->default(1);
            $table->integer('transfert_inscriptions')->after('bourse_inscriptions')->default(0);
            $table->integer('reinscription_inscriptions')->after('transfert_inscriptions')->default(0);
            $table->string('photo_inscriptions',255)->after('reinscription_inscriptions')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inscriptions', function (Blueprint $table) {
            //
        });
    }
};
