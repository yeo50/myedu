@extends('layouts.app')
@section('title', 'Todo')
@section('content')
    <h1>Create Todo</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('todos.store') }}" class="w-50 m-auto m-5 p-5" method="post">
        @csrf
        <div class="mb-3">
            <input type="text" name="name" placeholder="Task..." class="form-control">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Complete</label>
            <input type="checkbox" value="1" name="completed">
        </div>
        <input type="submit" class="btn btn-primary">
    </form>


@endsection
