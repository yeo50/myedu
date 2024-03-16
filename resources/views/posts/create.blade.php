@extends('layouts.app')
@section('title', 'Post Create')
@section('content')
    <h1 class="text-center">Create Post</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('posts.store') }}" method="post" class="w-50 border shadow mx-auto p-3 rounded"
        enctype="multipart/form-data">
        @csrf

        <label for="title" class="ms-1 mb-1">Title</label>
        <input type="text" placeholder="title ...." value="{{ old('name') }}" name="title" class="form-control mb-1"
            id="title">

        <textarea name="description" id="" cols="30" rows="5" class="form-control mb-1"
            placeholder="description"></textarea>
        <input type="checkbox" value="1" id="" name="is_featured"> Is-featured <br>
        <label for="photo">Choose Photo</label> <br>
        <input type="file" name="photo" id="photo" class="mt-2">
        <input type="submit" class="form-control btn btn-primary mt-3 shadow">
    </form>
@endsection
