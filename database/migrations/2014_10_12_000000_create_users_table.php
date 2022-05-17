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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('matricule_users', 20)->nullable();
            $table->string('numextrait_users', 20)->nullable();
            $table->date('etabliextrait_users')->nullable();
            $table->string('nom_users', 255);
            $table->string('prenom_users', 255);
            $table->date('datenais_users')->nullable();
            $table->integer('age_users')->default(0);
            $table->enum('sexe_users', ['M', 'F',''])->nullable();
            $table->string('lieunais_users', 255)->nullable();
            $table->string('nationalite_users', 255)->nullable();
            $table->string('tel_users')->nullable();
            $table->string('email_users')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('fonction_users', 255)->nullable();
            $table->string('login_users', 255)->nullable();
            $table->string('pass_users', 255)->nullable();
            $table->date('datecnx_users')->nullable();
            $table->enum('type_users', ['Admin_locale', 'Teacher','Student','Parent'])->default('Admin_locale');
            $table->date('datestart_users')->nullable();
            $table->date('dateactivation_users')->nullable();
            $table->date('dateexpiration_users')->nullable();
            $table->integer('statut_users')->default(1);
            $table->date('datecrea_users')->nullable();
            $table->string('photo_users', 255)->nullable();
            $table->string('extrait_users', 255)->nullable();
            $table->string('societe_users', 255)->nullable();
            $table->string('adresse_users', 255)->nullable();
            $table->string('telBuro_users')->nullable();
            $table->integer('modphoto_users')->default(0);
            $table->integer('online_users')->default(0);
            $table->string('religion_users', 255)->nullable();
            $table->string('ethnie_users', 255)->nullable();
            $table->string('lieuh_users', 255)->nullable();
            $table->integer('doublant_users')->default(0);
            $table->integer('affecter_users')->default(0);
            $table->integer('interne_users')->default(0);
            $table->integer('externe_users')->default(1);
            $table->integer('orphelins_users')->default(0);
            $table->integer('bourse_users')->default(1);
            $table->string('principal_users', 255)->nullable();
            $table->string('contactprincipal_users', 255)->nullable();
            $table->string('professionprincipal_users', 255)->nullable();
            $table->string('pere_users', 255)->nullable();
            $table->string('contactpere_users', 255)->nullable();
            $table->string('professionpere_users', 255)->nullable();
            $table->string('mere_users', 255)->nullable();
            $table->string('contactmere_users', 255)->nullable();
            $table->string('professionmere_users', 255)->nullable();
            $table->string('sessionEtab_users', 255)->nullable();
            $table->date('dateemb_users', 255)->nullable();
            $table->string('situation_users', 255)->nullable();
            $table->integer('nbchild_users')->default(0);
            $table->string('cnps_users', 255)->nullable();
            $table->string('mutuelle_users', 255)->nullable();
            $table->double('salairebrut_users', 8, 2)->default(0);
            $table->double('salairenet_users', 8, 2)->default(0);
            $table->string('categorie_users', 255)->nullable();


            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
