<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    // Admin users delete route
    public function delete(User $user)
    {
        // Delete user
        $user->delete();

    }
}
