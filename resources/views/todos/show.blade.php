@extends('layouts.app')
@section('title', 'Todo')
@section('content')
    <h1>{{ $todo->name }}</h1>
    <ul>
        <li>Name is => {{ $todo->name }}</li>
        <li>Email is => {{ $todo->completed === 1 ? "Complete" : "Uncomplete" }}</li>
        <li>Created date is => {{ $todo->created_at->diffForHumans() }}</li>
    </ul>


@endsection
