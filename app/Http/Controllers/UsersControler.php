<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersControler extends Controller
{
    public function index()
    {
        $users = user::all();
        return view('users.index', compact('users'));
    }
}
