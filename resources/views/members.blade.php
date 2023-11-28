@extends('layouts.app')

@section('content')
    <h1>Members</h1>
    <ul>
        @foreach ($members as $member)
            <li>{{ $member->name }} - {{ $member->age }}</li>
        @endforeach
    </ul>
@endsection
