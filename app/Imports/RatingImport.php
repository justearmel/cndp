<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class RatingImport implements ToCollection
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
            $sessionEtab=$collection[$i][1];
            $sessionid=$collection[$i][2];
            $eleveid=$collection[$i][3];
            $classeid=$collection[$i][4];
            $teacherid=$collection[$i][5];
            $matiereid=$collection[$i][6];
            $totalnotes=$collection[$i][7];
            $totalnotescoef=$collection[$i][8];

            $totalcoef=$collection[$i][9];
            $rating=$collection[$i][10];
            $ratingcoef=$collection[$i][11];
            $coefmatrating=$collection[$i][12];
            $codeEtab="000279";
            // $totalnotescoef=$collection[$i][13];
            $ranking=$collection[$i][14];
            $mention=$collection[$i][15];
            $niveau=$collection[$i][16];
            $cycle=$collection[$i][17];
            $nc=$collection[$i][18];

            $users = DB::table('users')
            ->where('id', $eleveid)
            ->get();

            $matricule="";
            foreach ($users as $user) {
                 $matricule= $user->matricule_users;
            }

        

            DB::table('rating')->insert([
                'id_rating' => $id,
                'codeEtab_rating' => $codeEtab,
                'sessionEtab_rating' => $sessionEtab,
                'ideleve_rating' => $eleveid,
                'idclasse_rating' => $classeid,
                'idteacher_rating' => $teacherid,
                'idmatiere_rating' => $matiereid,
                'totalnotes_rating' => $totalnotes,
                'totalnotescoef_rating' => $totalnotescoef,
                'totalcoef_rating' => $totalcoef,
                'nc_rating' => $nc,
                'semestre_rating' => $sessionid,
                'rating' => $rating,
                'ratingxcoef_rating' => $ratingcoef,
                'ranking_rating' => $ranking,
                'mention_rating' => $mention,
                'niveau_rating' => $niveau,
                'cycle_rating' => $cycle,
                'studentmat_rating' => $matricule,
               
            ]);


          
        }
    }
}
