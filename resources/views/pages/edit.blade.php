@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>
        [{{$book ->id}}]
        EDIT BOOK
    </h1>

    <form action="#" method="POST">

        @csrf
        @method('PUT')


        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{$book->title}}">
        <br>

        <label for="yearPublish">Year</label>
        <input type="number" name="yearPublish" id="yearPublish" value="{{$book->yearPublish}}">
        <br>

        <label for="author">Author</label>
        <input type="text" name="author" id="author" value="{{$book->author}}">
        <br>

        <input type="submit" value="CREATE">

    </form>
@endsection
