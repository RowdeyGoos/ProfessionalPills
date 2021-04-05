<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ParticipantsController extends Controller
{
    // Register route
    public function register(Request $request)
    {
        // Validate input
        $fields = $request->validate([
            'description' => 'nullable',
        ]);

        // Create participant

        $participant = Participant::create([
            'description' => $fields['description'],
            'user_id' => $request->user()->id,
        ]);
//        $user->participant()->create([
//            'description' => $fields['description'],
//        ]);

        $participant->setLocation();
        $participant->save();

        return redirect()->route('signupsuccessful');
    }
}
