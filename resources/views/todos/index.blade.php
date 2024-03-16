@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <h1>Todo List</h1>
    {{-- @foreach ($users as $user)
        <ul>
            <li>my name is {{ $user }}</li>
        </ul>
    @endforeach --}}
    <p><a href="{{ route('todos.create') }}">Create</a></p>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Complete</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($todos as $todo)
                <tr>
                    <th scope="row"><a href="{{ route('todos.show', $todo->id) }}">{{ $todo->name }}</a></th>
                    <td>{{ $todo->completed === 1 ? 'Completed' : 'Uncomplete' }}</td>
                    <td>
                        <a href="{{ route('todos.edit', $todo->id) }}"class="btn btn-primary"> Edit</a>
                        <form method="post" action="{{ route('todos.destroy', $todo->id) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" onclick="return confirm('are you sure')"
                                class="btn btn-danger">
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
