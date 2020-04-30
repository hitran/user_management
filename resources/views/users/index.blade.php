@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">User</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                <td class="align-middle" scope="row">{{$user["id"]}}</td>
                <td>
                    <img src="{{$user['profile_img']}}" class="rounded-circle" style="width: 50px;"/>
                    <span style="padding-left:10px;">{{$user["name"]}}</span>
                </td>
                <td class="align-middle">{{$user["username"]}}</td>
                <td class="align-middle">{{$user["email"]}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
