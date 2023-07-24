@extends('layouts.app')

@section('title', 'Welcome')

@section('main-section')
    <h1>
        Welcome, this is Main section area
    </h1>

    @foreach ($comics as $comic)
        <h5>{{$comic->title}}</h5>
    @endforeach
@endsection
