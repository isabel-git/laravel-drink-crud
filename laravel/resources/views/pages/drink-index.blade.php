@extends('layouts.main-layout')

@section('content')
    <h1>ALL DRINKS</h1>

    <ul>

        @foreach ($drinks as $drink)
            <li>{{$drink -> name}}</li>
        @endforeach

    </ul>
@endsection