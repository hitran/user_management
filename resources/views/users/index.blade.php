@extends('layouts.main')

@section('content')

<div class="container">
    <form actions="/" method="post" style="margin-bottom: 50px;">
        @csrf
        <div class="d-flex align-items-center">
            <div class="form-group">
                <label for="username">Username</label>
                <input 
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    placeholder="username"
                >
            </div>
            <div class="form-group" style="margin-left: 10px;">
                <label for="fullname">Fullname</label>
                <input 
                type="text" 
                class="form-control" 
                id="fullname" 
                name="fullname"
                placeholder="fullname">
            </div>
            
        </div>
        <button class="btn btn-dark">Add New User</button>

    </form>
    
    <div class="row">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Username</th>
                <th scope="col">Fullname</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                <td>
                    <span style="padding-left:10px;">{{$user -> username}}</span>
                </td>
                <td class="align-middle">{{$user->fullname}}</td>
                <td class="align-middle">{{$user->created_at}}</td>
                <td class="align-middle">{{$user->updated_at}}</td>
                <td>
                <a href="/edit/{{$user -> id}}">Edit</a>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
