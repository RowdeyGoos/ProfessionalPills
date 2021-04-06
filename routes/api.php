<?php

use App\Http\Controllers\api\ApiMaterialController;
use App\Http\Controllers\api\ApiMedicalRecordsController;
use App\Http\Controllers\api\ApiParticipantsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Doctors
Route::get('medicalrecords/{medicalrecord}', [ApiMedicalRecordsController::class, 'show']);
Route::get('materials', [ApiMaterialController::class, 'index']);
Route::post('participants/{participant}/results', [ApiParticipantsController::class, 'update']);
Route::get('participants/{participant}', [ApiParticipantsController::class, 'show']);


