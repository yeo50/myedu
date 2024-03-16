@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <h1>{{ $user->name }}</h1>
    <ul>
        <li>Name is => {{ $user->name }}</li>
        <li>Email is => {{ $user->email }}</li>
        <li>Created date is => {{ $user->created_at->diffForHumans() }}</li>
    </ul>


@endsection
