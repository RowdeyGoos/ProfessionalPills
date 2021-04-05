<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\MedicalRecord;
use Illuminate\Http\Request;

class ApiMedicalRecordsController extends Controller
{
    // Api medicalrecords show route
    public function show(MedicalRecord $medicalrecord)
    {
        // Return the medicalrecord
        return $medicalrecord;
    }


}
