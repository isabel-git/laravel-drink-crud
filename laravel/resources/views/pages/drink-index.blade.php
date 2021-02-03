@extends('layouts.main-layout')

@section('content')
    <h1>ALL DRINKS</h1>

    <ul>

        @foreach ($drinks as $drink)
            <a href="{{ route('show', $drink -> id) }}">
                <li>{{$drink -> name}}</li>   
            </a>
        @endforeach

    </ul>
@endsection