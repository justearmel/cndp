<?php

namespace App\Http\Controllers\Api;

use Larinfo;
use App\Imports\NotesImport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Imports\ElevesImport;
use App\Imports\RatingImport;
use App\Imports\ClassesImport;
use App\Imports\MatieresImport;
use App\Imports\SemestresImport;
use Illuminate\Support\Facades\DB;
use App\Imports\InscriptionsImport;
use App\Imports\SousmatieresImport;
use App\Http\Controllers\Controller;
use App\Imports\EtablissementImport;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{

    public function getthestudentinfos($id)
    {
        $users = DB::table('users')
        ->where('type_users', '=','Student')
        ->where('statut_users', '=',1)
        ->where('id', '=',$id)
        ->get();
        $success=true;

        $response = [
            'success' => $success,
            'data' => $users,
        ];

        return response()->json($response);
    }

    public function getstudentinfos($id,$sessionEtab)
    {
        $users = DB::table('users')
        ->join('inscriptions', 'inscriptions.ideleve_inscriptions', '=', 'users.id')
        ->join('classes', 'classes.id_classes', '=', 'inscriptions.idclasse_inscriptions')
        ->where('type_users', '=','Student')
        ->where('statut_users', '=',1)
        ->where('sessionEtab_inscriptions', '=',$sessionEtab)
        ->where('id', '=',$id)
        ->get();

        $success=true;

        $response = [
            'success' => $success,
            'data' => $users,
        ];

        return response()->json($response);


    }

    public function searchingstudents($studentname,$sessionEtab)
    {
        //  echo $studentname."/".$sessionEtab;
        //nous allons rechercher la liste des élèves inscrits cette année scolaire

        $users = DB::table('users')
        ->join('inscriptions', 'inscriptions.ideleve_inscriptions', '=', 'users.id')
        ->join('classes', 'classes.id_classes', '=', 'inscriptions.idclasse_inscriptions')
        ->where('type_users', '=','Student')
        ->where('statut_users', '=',1)
        ->where('sessionEtab_inscriptions', '=',$sessionEtab)
        // ->where('nom_users', 'like', '%'.$studentname.'%')
       ->where('prenom_users', 'like', '%'.$studentname.'%')
        ->orwhere('matricule_users', 'like', '%'.$studentname.'%')
       
        ->orderByRaw('nom_users - prenom_users ASC')
        ->get();


        $taille=count($users);


        if($taille>0)
        {

            $success=true;

            

        }else
        {
            $success=false;

            
        }

        $response = [
            'success' => $success,
            'data' => $users,
            'taille' => $taille,
        ];


        return response()->json($response);

    }

    public function login(Request $request)
    {
        $login=$request->login;
        $password=$request->password;
        // $password=md5($request->password);

        // $larinfo = Larinfo::getInfo();

        // dd($request);

        $user = DB::table('users')
        ->where('login_users', '=',$login)
         ->where('pass_users', '=', $password)
         ->where('statut_users', '=', 1)
        ->get();

        if(count($user)>0)
        {
            //nous allons rechercher les informations de l'utilisateur


            //nous allons faire les roukaskas 

            $typeofuser="";
            $theuserid=0;

           $theuser=json_decode($user);
    
           $typeofuser=$theuser[0]->type_users;
           $theuserid=$theuser[0]->id;
           $dateday=date("Y-m-d");

           $affected = DB::table('users')
              ->where('id', $theuserid)
              ->update(['online_users' => 1,'dateactivation_users' => $dateday]);
          
         

            // foreach($user as $value): 
            //     $typeofuser=$value[0].type_users;
            // endforeach;

           if($theuser[0]->type_users=='Admin_locale')
           {
               //nous sommes dans le cas de figure d'un responsable de l'école
               //nous allons donc récuperer les informations dans assigner aussi pour partie avec
               

               $users = DB::table('users')
               ->join('assigner', 'users.id', '=', 'assigner.idlocale_assigner')
               ->join('etablissements', 'etablissements.code_etab', '=', 'assigner.codeEtab_assigner')
               ->where('id', '=',$theuserid)
               ->get();

               $success = true;
               $message = 'Connexion réussie';
               $data= $users;

           }else
           {
            $success = true;
            $message = 'Connexion réussie';
            $data= $user;
           }

           

            


        }else
        {
            $success = false;
            $message = 'login ou mot de passe incorrect';
            $data= '';
        }


        $response = [
            'success' => $success,
            'message' => $message,
            'data' => $data,
        ];
    
    
    
        return response()->json($response);



    }


   public function loginupdate(Request $request)
   {

    

       $etape=$request->etape;

      if($etape==1)
      {
          //nous devons mettre a jour les informations de connexion

          $id=$request->id;
          $login=$request->login;
          $password=$request->password;
          

          $affected = DB::table('users')
              ->where('id', $id)
              ->update(['login_users' => $login,'pass_users'=>$password]);


              $success = true;
              $message = 'Paramètre de connexion modifié avec succès';
                

      }if($etape==2)
      {
        $id=$request->id;
        $nom=$request->nom;
        $prenom=$request->prenom;
        $datenais=$request->datenais;
        $lieunais=$request->lieunais;
        $nationalite=$request->nationalite;
        $email=$request->email;
        $genre=$request->genre;
        $telephone=$request->telephone;

        $affected = DB::table('users')
              ->where('id', $id)
              ->update(['nom_users' => $nom,'prenom_users'=>$prenom,'datenais_users'=>$datenais,'lieunais_users'=>$lieunais,'nationalite_users'=>$nationalite,'email_users'=>$email,'sexe_users'=>$genre,'tel_users'=>$telephone]);
              $success = true;
              $message = 'Informations personnelles avec succès';

      }

      

      $users= DB::table('users')
      ->join('assigner', 'users.id', '=', 'assigner.idlocale_assigner')
      ->where('id', '=',$id)
      ->get();



      $response = [
        'success' => $success,
        'message' => $message,
        'data' => $user,
    ];



    return response()->json($response);
     

   }

   public function importationcompte(Request $request)
   {
        Excel::import(new UsersImport, request()->file('file'));
   }

   public function fileStore(Request $request)
    {
        $upload_path = public_path('upload');
        $fileName = time().'.'.$request->file->getClientOriginalExtension();
        $request->file->move(public_path('upload'), $fileName);

        $thisfile=$upload_path."/".$fileName;

        

        Excel::import(new UsersImport, $thisfile);
              
        return response()->json(['success'=>'You have successfully upload file.']);
    }

    public function Compteimportation($id,$nom)
    {
        DB::table('users')->insert([
            'id' => $id,
            'nom' => $nom
        ]);
    }

    public function importationstables(Request $request)
    {

        $table=$request->table;
        $upload_path = public_path('upload');
        $fileName =time().'.'.$request->file->getClientOriginalExtension();
        $request->file->move(public_path('upload'), $fileName);
        $thisfile=$upload_path."/".$fileName;

        if($table=="Comptes")
        {
            //nous voulons importer la table compte
            Excel::import(new UsersImport, $thisfile);
        }else if($table=="Elèves")
        {
            Excel::import(new ElevesImport, $thisfile);
        }else if($table=="Inscriptions")
        {
            Excel::import(new InscriptionsImport, $thisfile);
        }else if($table=="Classes")
        {
            Excel::import(new ClassesImport, $thisfile);
        }else if($table=="Matieres")
        {
            Excel::import(new MatieresImport, $thisfile);
        }else if($table=="Semestres")
        {
            Excel::import(new SemestresImport, $thisfile);
        }else if($table=="Sousmatieres")
        {
            Excel::import(new SousmatieresImport, $thisfile);
        }else if($table=="Notes")
        {
            // $fileNames="notes.csv";
            // $thisfile=$upload_path."/".$fileNames;
            Excel::import(new NotesImport, $thisfile);
        }else if($table=="Rating")
        {
            // $fileNames="rating.csv";
            // $thisfile=$upload_path."/".$fileNames;
            Excel::import(new RatingImport, $thisfile);
        }else if($table=="Enseigner")
        {

        }else if($table=="Etablissements")
        {
            Excel::import(new EtablissementImport, $thisfile);
        }

        return response()->json(['success'=>'You have successfully upload file.','loading'=>false]);

    }


}
