<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class NotesImport implements ToCollection
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
            $libelle=$collection[$i][1];
            $typenote=$collection[$i][2];
            $controleid=$collection[$i][3];
            $classe=$collection[$i][4];
            $matiere=$collection[$i][5];
            $teacherid=$collection[$i][6];
            $eleveid=$collection[$i][7];
            $codeEtab="000279";
           
            $valeur=$collection[$i][9];
            $mention=$collection[$i][10];
            $sessionEtab=$collection[$i][11];
            $semestreid=$collection[$i][12];
            $datenotes=$collection[$i][13];
            $niveau=$collection[$i][14];
            $cycle=$collection[$i][15];
            $sousmatiere=$collection[$i][16];
            $statut=$collection[$i][17];
            $coef=$collection[$i][18];
            $notescoef=$collection[$i][19];
            $nc=$collection[$i][20];
            $addby=1779;

            $deleted = DB::table('notes')->where('id_notes', '=', $id)->delete();

            

            // DB::table('notes')->insert([
            //     'id_notes' => $id,
            //     'libelle_notes' => $libelle,
            //     'type_notes' => $typenote,
            //     'idtype_notes' => $controleid,
            //     'idclasse_notes' => $classe,
            //     'idteacher_notes' => $teacherid,
            //     'idmatiere_notes' => $matiere,
            //     'idsousmatiere_notes' => $sousmatiere,
            //     'ideleve_notes' => $eleveid,
            //     'codeEtab_notes' => $codeEtab,
            //     'sessionEtab_notes' => $sessionEtab,
            //     'valeur_notes' => $valeur,
            //     'coef_notes' => $coef,
            //     'notecoef_notes' => $notescoef,
            //     'mention_notes' => $mention,
            //     'semestre_notes' => $semestreid,
            //     'niveau_notes' => $niveau,
            //     'cycle_notes' => $cycle,
            //     'statut_notes' => $statut,
            //     'nc_notes' => $nc,
            //     'addby_notes' => $addby
               
            // ]);

            //nous allons mettre a jour 


        }
    }
}
