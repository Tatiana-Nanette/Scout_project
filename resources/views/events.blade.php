@extends('layouts.app')

@section('content')
    <h1>Events</h1>
    <ul>
        @foreach ($events as $event)
            <li>
                {{ $event->name }} - {{ $event->date }}
                <button class="enroll-button" data-event-id="{{ $event->id }}">Enroll</button>
            </li>
        @endforeach
    </ul>
@endsection
