@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Book: {{ count($books) }}</h1>

    <a href="
    {{ route('users.create') }}
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

                <a class="mx-3" href="{{route('users.edit', $book -> id)}}">
                    EDIT
                </a>

                <form class="d-inline-block" action="{{ route('users.destroy', $book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="x">
                </form>
            </li>
        @endforeach
    </ul>
@endsection
