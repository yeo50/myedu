@extends('layouts.app')
@section('title', 'Post')
@section('content')
    <h1 class="text-center"> Posts</h1>
    <a href="{{ route('posts.create') }}" class="mb-4">Create Post</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Is_featured</th>
                <th scope="col">Photo</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></th>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->is_featured === 1 ? 'Featured' : 'Not featured' }}</td>
                    <td><img src="{{ asset('storage/' . $post->photo) }}" alt="" width="200px"></td>
                    <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                        <form method="post" action="{{ route('posts.destroy', $post->id) }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger"
                                onclick="return confirm('are you sure?')">
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
