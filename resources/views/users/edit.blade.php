@extends('layouts.app')
@section('title', 'user edit')
@section('content')

    <h1 class="text-center">{{ $user->name }}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('users.update', $user->id) }}" method="post" class="w-50 border shadow mx-auto p-3 rounded">
        @csrf
        @method('PATCH')
        <label for="name" class="ms-2 fs-5 fw-medium mb-1">Name</label>
        <input type="text" placeholder="name ...." name="name" class="form-control mb-1" id="title"
            placeholder="name" value="{{ $user->name }}">
        <input type="email" name="email" value="{{ $user->email }}" id="" class="form-control my-1"
            placeholder="email">
        <input type="number" name="phone" class="form-control my-2" placeholder="Phone No...">
        <input type="text" name="address" id="" class="form-control my-2" placeholder="Address...">
        <input type="password" name="password" id="" class="form-control my-2" placeholder="Password...">


        <input type="submit" class="form-control btn btn-primary mt-3 shadow">
    </form>
@endsection
