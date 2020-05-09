<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
        // $userJson = file_get_contents(base_path("resources/users/users.json"));
        // $users = json_decode($userJson, true);
        $users = DB::table('users')->get();
        dd($users);
        //return view('users.index')->with('users', $users);
    }
}
