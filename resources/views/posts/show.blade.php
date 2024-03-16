@extends('layouts.app')
@section('title', 'Show Post')
@section('content')
    <h1>{{ $posts->title }}</h1>
    <ul>
        <li>
            Title is {{ $posts->title }}
        </li>
        <li>
            Title is {{ $posts->description }}
        </li>
        <li>
            Title is {{ $posts->is_featured === 1 ? 'Featured' : 'Not featured' }}
        </li>
        <img src="{{ $posts->photo }}" alt="" class="img-fluid" style="height: 200px; width:200px">
    </ul>

@endsection
