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
        return view('users.index')->with('users', $users);
    }

    public function getUserDetail($id) {
        $user = DB::table('users')->where('id', $id)->first();
        return view('users.updateUser')->with('user', $user);
    }

    public function addNewUser () {
        DB::table('users')->insert(
            [
                'username' => request('username'),
                'fullname'=> request('fullname')
            ]
        ); 
        return redirect("/");
    }

    public function updateUser($id) {
        DB::table('users')
        ->where('id', $id)
        ->update(
            [
                'username' => request('username'),
                'fullname'=> request('fullname')
            ]
        ); 
        return redirect("/");
    }
}
