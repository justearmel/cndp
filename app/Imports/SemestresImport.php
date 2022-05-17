<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class SemestresImport implements ToCollection
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
            $sessionid=$collection[$i][1];
            $libellesemestre=$collection[$i][2];
            $statut=$collection[$i][3];
            $codeEtab="000279";
            $sessionEtab=$collection[$i][9];
            $next=$collection[$i][5];
            $designation=$collection[$i][6];
            $position=$collection[$i][7];
            $coef=$collection[$i][8];


            DB::table('semestres')->insert([
                'id_semestres' => $id,
                'libelle_semestres' => $libellesemestre,
                'designation_semestres' => $designation,
                'statut_semestres' => $statut,
                'codeEtab_semestres' => $codeEtab,
                'sessiontab_semestres' => $sessionEtab,
                'next_semestres' => $next,
                'position_semestres' => $position,
                'coef_semestres' => $coef
               
            ]);


        }
    }
}
