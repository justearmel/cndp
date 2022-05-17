<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class InscriptionsImport implements ToCollection
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
            $classeid=$collection[$i][1];
            $eleveid=$collection[$i][2];
            $sessionEtab=$collection[$i][4];
            $codeEtab="000279";
            $dateinscrip=$collection[$i][5];
            $dateinscrip=date('Y-m-d', strtotime($dateinscrip));
            $previouschool=$collection[$i][10];
            $addby=1779;

            $niveau=$collection[$i][21];
            $cycle=$collection[$i][22];
            $anneenais=$collection[$i][24];
            $lv2=$collection[$i][25];
            $levelup=$collection[$i][26];

            $type=$collection[$i][18];
            $sexe="F";
            // $sexe=$collection[$i][23];

           
            //nous allons faire l'insertion dans la table inscriptions

            DB::table('inscriptions')->insert([
                'id_inscriptions' => $id,
                'idclasse_inscriptions' => $classeid,
                'ideleve_inscriptions' => $eleveid,
                'date_inscriptions' => $dateinscrip,
                'nais_inscriptions' => $anneenais,
                'sessionEtab_inscriptions' => $sessionEtab,
                'codeEtab_inscriptions' => $codeEtab,
                'type_inscriptions' => $type,
                'previouschool_inscriptions' => $previouschool,
                'niveau_inscriptions' => $niveau,
                'cycle_inscriptions' => $cycle,
                'lv2_inscriptions' => $lv2,
                'levelup_inscriptions' => $levelup,
                'sexe_inscriptions' => $sexe,
                'addby_inscriptions' => $addby
            ]);

            //nous allons recuperer le matricule de l'élève et a l'ajouter

            $users = DB::table('users')
            ->where('id', $eleveid)
            ->get();
            
            $matricule="";
            foreach ($users as $user) {
                 $matricule= $user->matricule_users;
            }

            $affected = DB::table('inscriptions')
            ->where('id_inscriptions', $id)
            ->update(['studentmat_inscriptions' => $matricule]);



        }
    }
}
