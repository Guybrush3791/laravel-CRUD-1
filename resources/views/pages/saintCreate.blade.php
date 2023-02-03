@extends('layouts.main-layout')

@section('content')
    
    <h1>CREATE NEW SAINT</h1>
    <form method="POST" action="{{ route('saint.store') }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="birdPlace">Bird place</label>
        <input type="text" name="birdPlace">
        <br>
        <label for="blessingDate">Blessing date</label>
        <input type="date" name="blessingDate">
        <br>
        <label for="miracleCount">Miracle count</label>
        <input type="number" name="miracleCount">
        <br>
        <input type="submit" value="CREATE NEW SAINT">
    </form>

@endsection