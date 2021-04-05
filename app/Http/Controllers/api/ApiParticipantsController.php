<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use Illuminate\Http\Request;

class ApiParticipantsController extends Controller
{
    // Api participants show route
    public function show(Participant $participant)
    {
        // Return the medicalrecord
        return $participant;
    }

    public function Update(Request $request, Participant $participant)
    {
        $participant->update([
            'trial_results' => $request->input('trial_results'),
        ]);
    }
}
