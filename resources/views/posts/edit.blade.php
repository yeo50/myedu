@extends('layouts.app')
@section('title', 'post edit')
@section('content')

    <h1 class="text-center">{{ $post->title }}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('posts.update', $post->id) }}" method="post" class="w-50 border shadow mx-auto p-3 rounded"
        enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <label for="title" class="ms-2 fs-5 fw-medium mb-1">Title</label>
        <input type="text" placeholder="title ...." name="title" class="form-control mb-1" id="title"
            value="{{ $post->title }}">
        <textarea name="description" id="" cols="30" rows="5" class="form-control mb-1"
            placeholder="description">{{ $post->description }}</textarea>
        <input type="checkbox" value="1" id="" name="is_featured"
            {{ $post->is_featured === 1 ? 'checked' : '' }}> Is-featured <br>
        <label for="photo">Choose Photo</label> <br>
        <input type="file" name="photo" id="photo" class="mt-2" value="{{ $post->photo }}">
        <input type="submit" class="form-control btn btn-primary mt-3 shadow">
    </form>
@endsection
