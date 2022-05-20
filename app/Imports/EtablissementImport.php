<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class EtablissementImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $taille=count($collection);
        var_dump($collection);
        for($i=0;$i<$taille;$i++)
        {
            $id=$collection[$i][0];
            $codeEtab="000279";
            $libelleetab=$collection[$i][2];
            $tel1=$collection[$i][3];
            // $tel2=$collection[$i][4];
            // $email=$collection[$i][5];
            // $adresse=$collection[$i][6];
            // $logo=$collection[$i][7];
            // $datecrea=$collection[$i][8];
            // $datecrea= $date('Y-m-d', strtotime($datecrea));
            // $createby=$collection[$i][9];
            // $pays=$collection[$i][10];
            // $type=$collection[$i][11];
            // $mixte=$collection[$i][12];
            // $cantine=$collection[$i][13];
            // $transport=$collection[$i][14];
            // $agenda=$collection[$i][15];
            // $groupestate=$collection[$i][16];
            // $groupeid=$collection[$i][17];
            // $groupename=$collection[$i][18];
            // $sigle=$collection[$i][19];
            // $primaire=$collection[$i][20];
            // $libelle1=$collection[$i][21];
            // $libelle2=$collection[$i][22];
            // $phone1=$collection[$i][23];
            // $phone2=$collection[$i][24];
            // $directeur=$collection[$i][25];
            // $ministere=$collection[$i][26];
            // $dren=$collection[$i][27];


          //nous allons maitenant faire l'insertion dans la base de donnée


        //   DB::table('etablissements')->insert([
        //     'id_etab' => $id,
        //     'code_etab' => $codeEtab,
        //     'libelle_etab' => $libelleetab,
        //     'tel_etab' => $phone1,
        //     'tel1_etab' => $phone2,
        //     'email_etab' => $email,
        //     'adresse_etab' => $adresse,
        //     'logo_etab' => $logo,
        //     'pays_etab' => $pays,
        //     'type_etab' => $type,
        //     'mixte_etab' => $mixte,
        //     'cantine_etab' => $cantine,
        //     'transport_etab' => $transport,
        //     'agenda_etab' => $angenda,
        //     'sigle_etab' => $sigle,
        //     'groupestate_etab' => $groupestate,
        //     'groupeid_etab' => $groupeid,
        //     'groupename_etab' => $groupename,
        //     'libelle1_etab' => $libelle1,
        //     'libelle2_etab' => $libelle2,
        //     'primaire_etab' => $primaire,
        //     'directeur_etab' => $directeur,
        //     'ministere_etab' => $ministere,
        //     'dren_etab' => $dren,
        // ]);


        }
    }
}
