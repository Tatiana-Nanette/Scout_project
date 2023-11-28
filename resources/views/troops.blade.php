@extends('layouts.app')

@section('content')
    <h1>Troops</h1>
    <ul>
        @foreach ($troops as $troop)
            <li>{{ $troop->name }}</li>
        @endforeach
    </ul>
@endsection
