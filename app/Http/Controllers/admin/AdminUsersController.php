<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    // Admin users delete route
    public function delete(Request $request)
    {

        // Validate input
        $fields = $request->validate([
            'id' => 'required',
            'password' => 'required'
        ]);
        // Delete user
        $user = User::findOrFail($fields['id']);
        $user->delete();

        return redirect()->route('admin.home');

    }
}
