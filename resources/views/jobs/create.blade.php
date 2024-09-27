@extends('layout')

@section('content')
    Create New Job

    <form action="/jobs" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="description" placeholder="Description">
        <button type="submit">Create</button>
    </form>
@endsection
