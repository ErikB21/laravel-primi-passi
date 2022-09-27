
@extends('layout.app')

@section('title', 'HomePage')

@section('content')
    <h1>{{ $welcome }}</h1>
    <p>{{$title}}</p>
    <a href="{{route('programmingLanguage')}}">Linguaggi di Programmazione</a>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}"/>
@endsection