@extends('layout')

@section('content')
    <h1>Jobs</h1>
    <ul>
        @foreach ($jobs as $job)
            <li>
                {{ $job }}
            </li>
        @endforeach
    </ul>
@endsection
