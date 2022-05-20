<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SessionsController extends Controller
{

    public function getniveaux($sessionEtab)
    {
        
    }

    public function UpdatingInfos(Request $request)
    {
        // dd($request);
        $sessionEtab=$request->sessionEtab;
        $etape=$request->etape;

        if($etape==1)
        {
            //nous devons mettre à jour les informations des classes dans le session

            $nclasses= DB::table('classes')
            ->where('sessionEtab_classes', '=',$sessionEtab)
            ->count();

            //nous allons rechercher le nombre d'élève inscrits cette année

            $nbusers= DB::table('users')
            ->join('inscriptions', 'inscriptions.ideleve_inscriptions', '=', 'users.id')
            ->where('type_users', '=','Student')
            ->where('statut_users', '=',1)
            ->where('sessionEtab_inscriptions', '=',$sessionEtab)
            ->count();

            //nous allons rechercher le nombre d'élève affecté

            $nbaffectes= DB::table('users')
            ->join('inscriptions', 'inscriptions.ideleve_inscriptions', '=', 'users.id')
            ->where('type_users', '=','Student')
            ->where('statut_users', '=',1)
            ->where('affecter_inscriptions', '=',1)
            ->where('sessionEtab_inscriptions', '=',$sessionEtab)
            ->count();

            //le nombre d'élève inscrits est égale au nombre de fille

            //nous allons rechercher le nombre d'élève interne

            $nbinterne= DB::table('users')
            ->join('inscriptions', 'inscriptions.ideleve_inscriptions', '=', 'users.id')
            ->where('type_users', '=','Student')
            ->where('statut_users', '=',1)
            ->where('interne_inscriptions', '=',1)
            ->where('sessionEtab_inscriptions', '=',$sessionEtab)
            ->count();


            //nous avons donc le nombre des externes 
            $externes=$nbusers-$nbinterne;

            //nous avons le nombre de non affectés
            $nonaffectes=$nbusers-$nbaffectes;

            $nbgarcon=0;

            //nous faisons la mise à jour 

            $affected = DB::table('sessions')
            ->where('libelle_sessions', $sessionEtab)
            ->update([
                'nbinscrit_sessions' => $nbusers,
                'nbfilles_sessions' => $nbusers,
                'nbgarcons_sessions'=>$nbgarcon,
                'nbinternes_sessions'=>$nbinterne,
                'nbexternes_sessions'=>$externes,
                'nbaffecte_sessions'=>$nbaffectes,
                'nbnonaffecte_sessions'=>$nonaffectes,
               
              ]);
        }else if($etape==2)
        {
            //nous alons rechercher les élèves affecter pour les ajoutés dans dans inscriptions

           
            $datasaffectes= DB::table('users')
            ->join('inscriptions', 'inscriptions.ideleve_inscriptions', '=', 'users.id')
            ->where('type_users', '=','Student')
            ->where('statut_users', '=',1)
            ->where('sessionEtab_inscriptions', '=',$sessionEtab)
            ->get();

            foreach($datasaffectes as $datasaffecte):
                DB::table('inscriptions')
                ->where('ideleve_inscriptions', $datasaffecte->id)
               ->update([
                'affecter_inscriptions' => $datasaffecte->affecter_users,
                'interne_inscriptions' => $datasaffecte->interne_users,
                'externe_inscriptions' => $datasaffecte->externe_users,
                'orphelins_inscriptions' => $datasaffecte->orphelins_users,
                'doublant_inscriptions' => $datasaffecte->doublant_users,
               
               
              ]);
            endforeach;

        }else if($etape==3)
        {
            //nous allons rechercher a ajouter les infos par classes


            $classes= DB::table('classes')
            ->where('sessionEtab_classes', '=',$sessionEtab)
            ->orderByRaw('order_classes ASC')
            ->get();

            foreach($classes as $classe): 
                $classeid=$classe->id_classes;
                //nous allons rechercher le nombre d'élève inscrit dans cette classe

                $datasinscrits= DB::table('users')
                ->join('inscriptions', 'inscriptions.ideleve_inscriptions', '=', 'users.id')
                ->where('type_users', '=','Student')
                ->where('statut_users', '=',1)
                ->where('idclasse_inscriptions', '=',$classeid)
                ->count();

                $nbgarcon=0;

                //nous allons rechercher le nombre d'élève interne de cette classe

                $datasinterne= DB::table('users')
                ->join('inscriptions', 'inscriptions.ideleve_inscriptions', '=', 'users.id')
                ->where('type_users', '=','Student')
                ->where('statut_users', '=',1)
                ->where('interne_inscriptions', '=',1)
                ->where('idclasse_inscriptions', '=',$classeid)
                ->count();

                $externe=$datasinscrits-$datasinterne;


                $datasaffectes= DB::table('users')
                ->join('inscriptions', 'inscriptions.ideleve_inscriptions', '=', 'users.id')
                ->where('type_users', '=','Student')
                ->where('statut_users', '=',1)
                ->where('affecter_inscriptions', '=',1)
                ->where('idclasse_inscriptions', '=',$classeid)
                ->count();

                $nonaffectes=$datasinscrits-$datasaffectes;

                //nous allons mettre a jour maintenant

                DB::table('classes')
                ->where('id_classes', $classeid)
                ->update([
                    'nbfilles_classes' => $datasinscrits,
                    'nbgarcons_classes' => $nbgarcon,
                    'nbexternes_classes' => $externe,
                    'nbinternes_classes' => $datasinterne,
                    'nbinscrit_classes' => $datasinscrits,
                    'nbaffecte_classes' => $datasaffectes,
                    'nbnonaffecte_classes' =>  $nonaffectes,
                   
                   
                  ]);

            endforeach;

        }else if($etape==4)
        {
           //nous allons deteminer les effectifs par niveau et par cycle


           $dataniveaux = DB::table('classes')
           ->select('type_classes','libellecycle_classes','codeEtab_classes')
           ->distinct()
           ->orderByRaw('order_classes ASC')
           ->get();
           

           foreach($dataniveaux as $dataniveau):
            $niveau=$dataniveau->type_classes;
            $cycle=$dataniveau->libellecycle_classes;
            $codeEtab=$dataniveau->codeEtab_classes;

            //nous cherchons l'effectifs de toutes les classes de ce niveau pour faire la mise a jour

            $datasinscrits= DB::table('classes')
            ->where('type_classes', '=',$niveau)
            ->where('libellecycle_classes', '=',$cycle)
            ->get();

             $cumulinscrits=0;
             $cumulexternes=0;
             $cumulinternes=0;
             $nbaffecte_classes=0;
             $nbnonaffecte_classes=0;
             foreach($datasinscrits as $datasinscrit): 
                $cumulinscrits=$cumulinscrits+$datasinscrit->nbinscrit_classes;
                $cumulexternes=$cumulexternes+$datasinscrit->nbexternes_classes;
                $cumulinternes=$cumulinternes+$datasinscrit->nbinternes_classes;
                $nbaffecte_classes=$cumulinscrits+$datasinscrit->nbaffecte_classes;
                $nbnonaffecte_classes=$cumulinscrits+$datasinscrit->nbnonaffecte_classes;
             endforeach;

             //nous faisons l'insertion dans la base 

             $existes= DB::table('effectifs')
            ->where('type_effec', '=',$niveau)
            ->where('cycle_effec', '=',$cycle)
            ->where('sessionEtab_effec', '=',$sessionEtab)
            ->count();

            if($existes==0)
            {
                //nous faisons l'insertion

                DB::table('effectifs')->insert([
                   
                    'codeEtab_effec' => $codeEtab,
                    'sessionEtab_effec' => $sessionEtab,
                    'type_effec' => $niveau,
                    'cycle_effec' => $cycle,
                    'inscrits_effec' => $cumulinscrits,
                    
                   
                ]);

            }

           endforeach; 

        }if($etape==5)
        {
            //nous devons mettre a jour les informations des enseignants
            $matieres=DB::table('matieres')
            ->where('sessionEtab_mat', '=',$sessionEtab)
            ->get();

            foreach($matieres as $matiere): 

                //nous recuperons les informations de la matieres pour mettre dans enseigner

               $matiereid= $matiere->id_mat;
               $teatcherid= $matiere->idteacher_mat;
               $classeid= $matiere->idclasse_mat;
               $codeEtab= $matiere->codeEtab_mat;

                //nous allons verifier si cette ligne existe deja dans la table

                $datanb=DB::table('enseigner')
                ->where('idclasse_enseig', '=',$classeid)
                ->where('idteacher_enseig', '=',$teatcherid)
                ->where('idmatiere_enseig', '=',$matiereid)
                ->where('codeEtab_enseig', '=',$codeEtab)
                ->where('sessionEtab_enseig', '=',$sessionEtab)
                ->count();

                if($datanb==0)
                {
                    DB::table('enseigner')->insert([
                        'idclasse_enseig' => $classeid,
                        'idteacher_enseig' => $teatcherid,
                        'idmatiere_enseig' => $matiereid,
                        'codeEtab_enseig' => $codeEtab,
                        'sessionEtab_enseig' => $sessionEtab,
                       
                     ]);
                }


               


            endforeach;

        }if($etape==6)
        {
           //nous devons changer le sexe de toutes les élèves de l'établissement
           $sexe="F";
           $affected = DB::table('users')
           ->where('type_users', '=','Student')
              ->update([
                  'sexe_users' => $sexe,
                  
                ]);

        }

    }

    public function getallsessions($codeEtab)
    {
        $sessions = DB::table('sessions')
        ->orderBy('sessions.id_sessions', 'desc')
        ->get();
        $success = true;
        $data= $sessions;


        $response = [
            'success' => $success,
            'data' => $data,
        ];
    
    
    
        return response()->json($response);

    }

    public function getclasses($sessionEtab)
    {
        $nclasses= DB::table('classes')
        ->where('sessionEtab_classes', '=',$sessionEtab)
        ->orderByRaw('order_classes ASC')
        ->get();
        $success=true;

        $response = [
            'success' => $success,
            'data' => $nclasses,
        ];


        return response()->json($response);
    }

    public function getclassesnb($sessionEtab)
    {
        $nclasses= DB::table('classes')
        ->where('sessionEtab_classes', '=',$sessionEtab)
        ->count();
        $success=true;

        $response = [
            'success' => $success,
            'data' => $nclasses,
        ];


        return response()->json($response);
    }

public function searchingclasses($classename,$sessionEtab)
{
    $nclasses= DB::table('classes')
    ->where('libelle_classes', 'like', '%'.$classename.'%')
    ->orwhere('type_classes', 'like', '%'.$classename.'%')
    ->where('sessionEtab_classes', '=',$sessionEtab)
    ->orderByRaw('order_classes ASC')
    ->distinct()
    ->get();
    $success=true;

    $response = [
        'success' => $success,
        'data' => $nclasses,
    ];


    return response()->json($response);
}


    public function getteachersnb($sessionEtab)
    {
        $nbusers= DB::table('enseigner')->distinct('idteacher_enseig')
        ->where('sessionEtab_enseig', '=',$sessionEtab)
        ->count('idteacher_enseig');
        $success=true;

        $response = [
            'success' => $success,
            'data' => $nbusers,
        ];


        return response()->json($response);
       

    }

    public function getstudentsnb($sessionEtab)
    {

        $nbusers= DB::table('users')
        ->join('inscriptions', 'inscriptions.ideleve_inscriptions', '=', 'users.id')
        ->where('type_users', '=','Student')
        ->where('statut_users', '=',1)
        ->where('sessionEtab_inscriptions', '=',$sessionEtab)
        ->count();

        $success=true;

        $response = [
            'success' => $success,
            'data' => $nbusers,
        ];


        return response()->json($response);
    }
}
