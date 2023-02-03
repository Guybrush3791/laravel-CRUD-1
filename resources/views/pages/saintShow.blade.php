@extends('layouts.main-layout')

@section('content')
    
    <h1>{{ $saint -> name }} - {{ $saint -> miracleCount }}</h1>
    <h3>Birth place: {{ $saint -> birdPlace }}</h3>
    <h3>Blessing date: {{ $saint -> blessingDate }}</h3>
    
@endsection