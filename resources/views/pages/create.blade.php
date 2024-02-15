@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>
        NEW BOOK
    </h1>

    <form action="{{ route('users.store') }}" method="POST">

        @csrf
        @method('POST')


        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <br>

        <label for="yearPublish">Year</label>
        <input type="number" name="yearPublish" id="yearPublish">
        <br>

        <label for="author">Author</label>
        <input type="text" name="author" id="author">
        <br>

        <input type="submit" value="CREATE">

    </form>
@endsection
