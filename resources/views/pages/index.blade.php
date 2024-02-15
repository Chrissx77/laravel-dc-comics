@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Book: {{ count($books) }}</h1>

    <a href="
    {{route('users.create')}}
    ">CREATE</a>
    <br>

    <ul>
        @foreach ($books as $book)
            <li>
                <a href="
                {{ route('users.show', $book->id) }}
                ">
                    <b>{{ $book->title }}</b>
                    {{ $book->author }}
                    {{ $book->yearPublish }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
