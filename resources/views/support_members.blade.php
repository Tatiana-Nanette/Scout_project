@extends('layouts.app')

@section('content')
    <h1>Support Members</h1>
    <ul>
        @foreach ($supportMembers as $supportMember)
            <li>{{ $supportMember->name }} - {{ $supportMember->relationship }}</li>
        @endforeach
    </ul>
@endsection
