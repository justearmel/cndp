<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class ClassesImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $taille=count($collection);
        for($i=0;$i<$taille;$i++)
        {
            $classeid=$collection[$i][0];
            $libelleclasse=$collection[$i][1];
            $codeEtab="000279";
            $sessionEtab=$collection[$i][5];
            $datecrea=$collection[$i][4];
            $datecrea=date('Y-m-d', strtotime($datecrea));

            $cyclelibelle=$collection[$i][15];
            $typeclasse=$collection[$i][11];

            $niveau=$collection[$i][13];
            $cycle=$collection[$i][14];
            $principale=$collection[$i][16];
            $addby=1779;
            $orderclasse=$collection[$i][18];


            DB::table('classes')->insert([
                'id_classes' => $classeid,
                'libelle_classes' => $libelleclasse,
                'codeEtab_classes' => $codeEtab,
                'sessionEtab_classes' => $sessionEtab,
                'datecrea_classes' => $datecrea,
                'addby_classes' => $addby,
                'type_classes' => $typeclasse,
                'libellecycle_classes' => $cyclelibelle,
                'niveau_classes' => $niveau,
                'cycle_classes' => $cycle,
                'principale_classes' => $principale,
                'order_classes' => $orderclasse
               
            ]);


            
        }
    }
}
