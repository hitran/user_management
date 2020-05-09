@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <table class="table margin-central">
                <tr>
                    <th>User ID</th>
                    <th>User name</th>
                    <th>Full name</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Action</th>
                </tr>
            @foreach($users as $user)
                <tr>
                    <th>{{ $user-> id }}</th>
                    <th>{{ $user-> username }}</th>
                    <th>{{ $user-> fullname }}</th>
                    <th>{{ $user-> created_at }}</th>
                    <th>{{ $user-> updated_at }}</th>
                    <th>
                        <a href="{{ url('userslist/edit/'.$user-> id) }}"><i class="fa fa-edit" style="font-size:24px"></i></a>
                        <a><i class="fa fa-trash-o" style="font-size:24px" id="{{ $user-> id }}"></i></a>
                    </th>
                </tr>
            @endforeach
            <table>
    </div>
</div>
@endsection
