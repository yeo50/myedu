@extends('layouts.app')
@section('title', 'Todo Edit')
@section('content')
    <h1>Edit Todo</h1>

    <form action="{{ route('todos.update', $todo->id) }}" class="w-50 m-auto m-5 p-5" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <input type="text" value="{{ $todo->name }}" name="name" placeholder="Task..." class="form-control">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Complete</label>
            <input type="checkbox" {{ $todo->completed === 1 ? 'checked' : '' }} value="1" name="completed">
        </div>
        <input type="submit" class="btn btn-primary">
    </form>


@endsection
