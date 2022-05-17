<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class MatieresImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $taille=count($collection);
        for($i=0;$i<$taille;$i++)
        {
            $id=$collection[$i][0];
            $libellematiere=$collection[$i][1];
            $coef=$collection[$i][2];
            $coef1=$collection[$i][3];
            $classeid=$collection[$i][4];
            $teacherid=$collection[$i][5];
            $codeEtab="000279";
            $sessionEtab=$collection[$i][7];
            $niveau=$collection[$i][10];
            $cycle=$collection[$i][11];
            $facultatif=$collection[$i][12];
            $bilantype=$collection[$i][13];
            $bilanplace=$collection[$i][14];


            DB::table('matieres')->insert([
                'id_mat' => $id,
                'libelle_mat' => $libellematiere,
                'coef_mat' => $coef,
                'coef1_mat' => $coef1,
                'idclasse_mat' => $classeid,
                'idteacher_mat' => $teacherid,
                'codeEtab_mat' => $codeEtab,
                'sessionEtab_mat' => $sessionEtab,
                'niveau_mat' => $niveau,
                'cycle_mat' => $cycle,
                'facultatif_mat' => $facultatif,
                'bilantype_mat' => $bilantype,
                'bilanplace_mat' => $bilanplace
               
            ]);


        }
    }
}
