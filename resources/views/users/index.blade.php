@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <h1>User List</h1>
    {{-- @foreach ($users as $user)
        <ul>
            <li>my name is {{ $user }}</li>
        </ul>
    @endforeach --}}

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row"><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></th>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger">Delete</button>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
