<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\Api\SessionsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [UsersController::class, 'login']);
Route::post('/UpdatingInfos', [SessionsController::class, 'UpdatingInfos']);
Route::post('/login/update', [UsersController::class, 'loginupdate']);
Route::post('/login/importations/compte', [UsersController::class, 'importationcompte']);

Route::post('store_file', [UsersController::class, 'fileStore']);
Route::post('importations/tables', [UsersController::class, 'importationstables']);


Route::get('/allsessions/{codeEtab}', [SessionsController::class, 'getallsessions']);
Route::get('/getstudentsNb/{sessionEtab}', [SessionsController::class, 'getstudentsnb']);
Route::get('/getclassesNb/{sessionEtab}', [SessionsController::class, 'getclassesnb']);
Route::get('/getclasses/{sessionEtab}', [SessionsController::class, 'getclasses']);
Route::get('/getniveaux/{sessionEtab}', [SessionsController::class, 'getniveaux']);
Route::get('/searching/{studentname}/{sessionEtab}', [UsersController::class, 'searchingstudents']);
Route::get('/getstudentinfos/{studentid}/{sessionEtab}', [UsersController::class, 'getstudentinfos']);
Route::get('/getclasseofTeacher/{user_id}/{sessionEtab}', [TeacherController::class, 'getclasseofTeacher']);
Route::get('/getListeEleveclasseofTeacher/{IdClasse}/{sessionEtab}', [TeacherController::class, 'getListeEleveclasseofTeacher']);
Route::get('/getclasseinfoID/{IdClasse}/{sessionEtab}', [TeacherController::class, 'getclasseinfoID']);