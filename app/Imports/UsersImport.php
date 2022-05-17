<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

      $id=$row[0];
      $nom=$row[1];
      $prenom=$row[2];
      $datenais=$row[3];
      $lieunais=$row[4];
      $telephone=$row[5];
      $email=$row[6];
      $fonction=$row[7];
      $login=$row[8];
      $password=$row[9];
      $datecnx=$row[10];
      $typecompte=$row[11];
      $dateactivationcompte=$row[12];
      $dateaexpirationcompte=$row[13];
      $statutcompte=$row[14];
      $datecrea=$row[15];
      $photo=$row[16];
      $sexe=$row[17];
      $societe=$row[18];
      $adresse=$row[19];
      $telephoneburo=$row[20];
      $modphoto=$row[21];
      $online=$row[22];
      $lieuhabitation=$row[23];
    

        // return new User([
        //     'id' => $id,
        //     'nom_users' => $nom,
        // ]);


        DB::table('users')->insert([
            'id' => $id,
            'nom_users' => $nom,
            'prenom_users' => $prenom,
            'datenais_users' => $datenais,
            'lieunais_users' => $lieunais,
            'tel_users' => $telephone,
            'email_users' => $email,
            'fonction_users' => $fonction,
            'login_users' => $login,
            'pass_users' => $password,
            'type_users' => $typecompte,
            'statut_users' => $statutcompte,
            'datecrea_users' => $datecrea,
            'sexe_users' => $sexe,
            'lieuh_users' => $lieuhabitation,
        ]);


    }
}
