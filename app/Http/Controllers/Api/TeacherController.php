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
use Maatwebsite\Excel\Facades\Excel;

class TeacherController extends Controller
{
    //

       public function getclasseofTeacher($id,$sessionEtab)
    {
        $users = DB::table('users')
        ->join('enseigner', 'enseigner.idteacher_enseig', '=', 'users.id')
        ->join('classes', 'classes.id_classes', '=', 'enseigner.idclasse_enseig')
        ->where('enseigner.idteacher_enseig', '=',$id)
        ->where('sessionEtab_enseig', '=',$sessionEtab)->get();

        $success=true;

        $response = [
            'success' => $success,
            'data' => $users,
        ];

        return response()->json($response);


    }

       public function getListeEleveclasseofTeacher($IdClasse,$sessionEtab)
    {
        $data = DB::table('users')
        ->join('inscriptions', 'inscriptions.ideleve_inscriptions', '=', 'users.id')
        ->join('classes', 'classes.id_classes', '=', 'inscriptions.idclasse_inscriptions')
        ->where('classes.id_classes', '=',$IdClasse)
        ->where('inscriptions.sessionEtab_inscriptions', '=',$sessionEtab)->get();

        $success=true;

        $response = [
            'success' => $success,
            'data' => $data,
        ];

        return response()->json($response);


    }
       public function getclasseinfoID($IdClasse,$sessionEtab)
    {
        $data = DB::table('classes')
        ->where('classes.id_classes', '=',$IdClasse)
        ->where('classes.sessionEtab_classes', '=',$sessionEtab)->get();

        $success=true;

        $response = [
            'success' => $success,
            'data' => $data,
        ];

        return response()->json($response);


    }

}