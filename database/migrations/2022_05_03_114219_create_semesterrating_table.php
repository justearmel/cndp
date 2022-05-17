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
        Schema::create('semesterrating', function (Blueprint $table) {
            $table->id();
            $table->string('codeEtab_semesterrating', 50)->nullable();
            $table->string('sessionEtab_semesterrating', 50)->nullable();
            $table->integer('semestre_semesterrating')->default(0);
            $table->string('studentmat_semesterrating',50)->nullable();
            $table->integer('ideleve_semesterrating')->default(0);
            $table->integer('idclasse_semesterrating')->default(0);
            $table->enum('niveau_semesterrating', ['SIXIEME', 'CINQUIEME', 'QUATRIEME','TROISIEME','SECONDE','PREMIERE','TERMINALE'])->nullable();
            $table->enum('cycle_semesterrating', ['1ER CYCLE', '2ND CYCLE'])->nullable();
            $table->integer('nbnc_semesterrating')->default(0);
            $table->integer('nbclasse_semesterrating')->default(0);
            $table->double('cf_semesterrating',2,2)->default(0);
            $table->double('og_semesterrating',2,2)->default(0);
            $table->double('eo_semesterrating',2,2)->default(0);
            $table->double('fr_semesterrating',2,2)->default(0);
            $table->double('phi_semesterrating',2,2)->default(0);
            $table->double('hg_semesterrating',2,2)->default(0);
            $table->double('an_semesterrating',2,2)->default(0);
            $table->double('all_semesterrating',2,2)->default(0);
            $table->double('esp_semesterrating',2,2)->default(0);
            $table->double('math_semesterrating',2,2)->default(0);
            $table->double('pc_semesterrating',2,2)->default(0);
            $table->double('svt_semesterrating',2,2)->default(0);
            $table->double('em_semesterrating',2,2)->default(0);
            $table->double('ap_semesterrating',2,2)->default(0);
            $table->double('eps_semesterrating',2,2)->default(0);
            $table->double('edhc_semesterrating',2,2)->default(0);
            $table->double('cond_semesterrating',2,2)->default(0);
            $table->double('cout_semesterrating',2,2)->default(0);
            $table->double('tice_semesterrating',2,2)->default(0);
            $table->double('tcf_semesterrating',2,2)->default(0);
            $table->double('tot_semesterrating',2,2)->default(0);
            $table->double('mg_semesterrating',2,2)->default(0);
            $table->double('bilanlettre_semesterrating',2,2)->default(0);
            $table->double('bilanlettrecoef_semesterrating',2,2)->default(0);
            $table->double('bilanlettremoycoef_semesterrating',2,2)->default(0);
            $table->double('bilanscience_semesterrating',2,2)->default(0);
            $table->double('bilansciencecoef_semesterrating',2,2)->default(0);
            $table->double('bilansciencemoycoef_semesterrating',2,2)->default(0);
            $table->double('bilanautre_semesterrating',2,2)->default(0);
            $table->double('bilanautrecoef_semesterrating',2,2)->default(0);
            $table->double('bilanautremoycoef_semesterrating',2,2)->default(0);
            $table->integer('rang_semesterrating')->default(0);
            $table->integer('mention_semesterrating')->default(0);
            $table->integer('nc_semesterrating')->default(0);
            $table->integer('absence_semesterrating')->default(0);
            $table->integer('absencejust_semesterrating')->default(0);
            $table->integer('absencejustnone_semesterrating')->default(0);
            $table->integer('tableau_semesterrating')->default(0);
            $table->integer('felicitation_semesterrating')->default(0);
            $table->integer('tableaufeli_semesterrating')->default(0);
            $table->integer('blamework_semesterrating')->default(0);
            $table->integer('blamecond_semesterrating')->default(0);
            $table->integer('cfcoef_semesterrating')->default(1);
            $table->integer('ogcoef_semesterrating')->default(1);
            $table->integer('eocoef_semesterrating')->default(1);
            $table->integer('frcoef_semesterrating')->default(0);
            $table->integer('phicoef_semesterrating')->default(0);
            $table->integer('hgcoef_semesterrating')->default(0);
            $table->integer('ancoef_semesterrating')->default(0);
            $table->integer('allcoef_semesterrating')->default(0);
            $table->integer('espcoef_semesterrating')->default(0);
            $table->integer('mathcoef_semesterrating')->default(0);
            $table->integer('pccoef_semesterrating')->default(0);
            $table->integer('svtcoef_semesterrating')->default(0);
            $table->integer('emcoef_semesterrating')->default(0);
            $table->integer('epscoef_semesterrating')->default(0);
            $table->integer('edhccoef_semesterrating')->default(0);
            $table->integer('condcoef_semesterrating')->default(0);
            $table->integer('coutcoef_semesterrating')->default(0);
            $table->integer('ticecoef_semesterrating')->default(0);
            $table->integer('bonuscoef_semesterrating')->default(0);
            $table->double('cfmoycoef_semesterrating')->default(0);
            $table->double('ogmoycoef_semesterrating')->default(0);
            $table->double('eomoycoef_semesterrating')->default(0);
            $table->double('frmoycoef_semesterrating')->default(0);
            $table->double('phimoycoef_semesterrating')->default(0);
            $table->double('hgmoycoef_semesterrating')->default(0);
            $table->double('anmoycoef_semesterrating')->default(0);
            $table->double('allmoycoef_semesterrating')->default(0);
            $table->double('espmoycoef_semesterrating')->default(0);
            $table->double('mathmoycoef_semesterrating')->default(0);
            $table->double('pcmoycoef_semesterrating')->default(0);
            $table->double('svtmoycoef_semesterrating')->default(0);
            $table->double('emmoycoef_semesterrating')->default(0);
            $table->double('apmoycoef_semesterrating')->default(0);
            $table->double('epsmoycoef_semesterrating')->default(0);
            $table->double('edhcmoycoef_semesterrating')->default(0);
            $table->double('coutmoycoef_semesterrating')->default(0);
            $table->double('ticemoycoef_semesterrating')->default(0);
            $table->double('moyenneclasse_semesterrating')->default(0);


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
        Schema::dropIfExists('semesterrating');
    }
};
