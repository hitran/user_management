@extends('layouts.main')

@section('content')

<div class="container">
    <form method="post" action="/edit/{{$user->id}}">
    @csrf
        <div class="d-flex">
            <div class="form-group">
                <label for="username">Username:</label>
                <input 
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    placeholder="Enter username"
                    value="{{$user->username}}"
                >
            </div>
            <div class="form-group" style="margin-left: 10px;">
                <label for="fullname">Fullname</label>
                <input 
                type="text"
                class="form-control"
                id="fullname"
                name="fullname"
                placeholder="Fullname"
                value="{{$user->fullname}}">
            </div>
        </div>
        <button class="btn btn-dark">Save</button>
    </form>
</div>
@endsection
