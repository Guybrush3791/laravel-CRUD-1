@extends('layouts.main-layout')

@section('content')
    
    <h1>SAINTS</h1>

    <a href="{{ route('saint.create') }}">CREATE NEW SAINT</a>

    <ul>
        @foreach ($saints as $saint)
            <li>
                <a href="{{ route('saint.show', ['id' => $saint -> id]) }}">
                    {{ $saint -> name }} - {{ $saint -> miracleCount }}
                </a>
                -
                <a href="{{ route('saint.destroy', ['id' => $saint -> id]) }}">X</a>
            </li>
        @endforeach
    </ul>

@endsection