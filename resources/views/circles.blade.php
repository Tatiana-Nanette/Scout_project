@extends('layouts.app')

@section('content')
    <h1>Circles</h1>
    <ul>
        @foreach ($circles as $circle)
            <li>{{ $circle->name }}</li>
        @endforeach
    </ul>
@endsection
