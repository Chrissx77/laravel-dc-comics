@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h2>
        {{$book->title}}
        {{$book->yearPublish}}
    </h2>




@endsection
