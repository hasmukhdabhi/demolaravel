@extends('layouts.app')
@section('content')
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger"></a>
                <form action="" method="POST" style="display:inline">

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>

@endsection