<?php

namespace App\Imports;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class ElevesImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $taille=count($collection);
        for($i=0;$i<$taille;$i++)
        {
          
            $idcompte=$collection[$i][13];
            $matricule=$collection[$i][1];
            $nom=$collection[$i][2];
            $prenom=$collection[$i][3];
            $datenais=$collection[$i][4];
            $datenais=date('Y-m-d', strtotime($datenais));
            $age = Carbon::parse($datenais)->age;
            $lieunais=$collection[$i][6];
            $genre=$collection[$i][7];
            $nationalite=$collection[$i][21];
            $affecter=$collection[$i][16];
            $doublant=$collection[$i][17];
            $numeroclient=$collection[$i][18];
            $ethnie=$collection[$i][19];
            $religion=$collection[$i][20];
            
            $datestart=$collection[$i][22];
            $datestart=date('Y-m-d', strtotime($datestart));
            $interne=$collection[$i][23];
            $externe=$collection[$i][24];
            $orphelin=$collection[$i][25];
            $bourse=$collection[$i][26];
            $principal=$collection[$i][27];
            $principalcontact=$collection[$i][28];
            $principalsexe=$collection[$i][31];
            $principalprofession=$collection[$i][32];
            $nompere=$collection[$i][33];
            $prenompere=$collection[$i][34];

            $pere=$nompere. " ".$prenompere;

            $genrepere="M";
            $nommere=$collection[$i][40];
            $prenommere=$collection[$i][41];
            $mere=$nommere." ".$prenommere;
            $genremere="F";


            $affected = DB::table('users')
              ->where('id', $idcompte)
              ->update([
                  'matricule_users' => $matricule,
                  'nom_users' => $nom,
                  'prenom_users'=>$prenom,
                  'datenais_users'=>$datenais,
                  'age_users'=>$age,
                  'lieunais_users'=>$lieunais,
                  'sexe_users'=>$genre,
                  'nationalite_users'=>$nationalite,
                  'affecter_users'=>$affecter,
                  'doublant_users'=>$doublant,
                  'numeroclient_users'=>$numeroclient,
                  'ethnie_users'=>$ethnie,
                  'religion_users'=>$religion,
                  'datestart_users'=>$datestart,
                  'interne_users'=>$interne,
                  'externe_users'=>$externe,
                  'orphelins_users'=>$orphelin,
                  'bourse_users'=>$bourse,
                  'principal_users'=>$principal,
                  'contactprincipal_users'=>$principalcontact,
                  'professionprincipal_users'=>$principalprofession,
                  'pere_users'=>$pere,
                  'mere_users'=>$mere,
                ]);

           
           


        }
    }
}
