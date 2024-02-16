<?php

namespace App\Http\Controllers;

use App\Models\users;

class usersController extends Controller
{
    public function index()
    {
        $users = users::all();

        return response()->json($users);
    }
}
