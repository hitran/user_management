<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        // dd($users);
        return view('users.index')->with('users', $users);
    }
}
