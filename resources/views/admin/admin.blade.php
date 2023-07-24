@extends('layouts.app')

@section('title', 'Admin')

@section('main-section')
    <h1>
        Welcome, this is Main section area of admin pannel
    </h1>

    <h2>{{$comic->title}}</h2>
@endsection
