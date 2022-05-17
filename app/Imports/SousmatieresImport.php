<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class SousmatieresImport implements ToCollection
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
            $matiereid=$collection[$i][1];
            $libelle=$collection[$i][2];
            $teacherid=$collection[$i][3];
            $libellematiere=$collection[$i][4];
            $coef=$collection[$i][5];


            // DB::table('sousmatieres')->insert([
            //     'id_semestres' => $id,
            //     'libelle_semestres' => $libellesemestre,
            //     'designation_semestres' => $designation,
            //     'statut_semestres' => $statut,
            //     'codeEtab_semestres' => $codeEtab,
            //     'sessiontab_semestres' => $sessionEtab,
            //     'next_semestres' => $next,
            //     'position_semestres' => $position,
            //     'coef_semestres' => $coef
               
            // ]);


        }
    }
}
