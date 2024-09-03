<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(2);

        return response()->json([
            'status' => true,
            'user' => $users,
        ], 200);
    }
}
