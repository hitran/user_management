<?php

namespace App\Http\Controllers;

class UsersController extends Controller
{
    public function index()
    {
        $userJson = file_get_contents(base_path("resources/users/users.json"));
        $users = json_decode($userJson, true);
        return view('users.index')->with('users', $users);
    }
}
