@extends('layouts.main-layout')

@section('content')
    <h1>ALL DRINKS</h1>

    <a href="{{ route('create') }}">+AGGIUNGI</a>

    <ul>

        @foreach ($drinks as $drink)
        <li>
            <a href="{{ route('show', $drink -> id) }}">
                {{$drink -> name}} 
            </a>

            <a href="{{ route('edit', $drink -> id)}}">EDIT</a>
            <a href="{{ route('delete', $drink -> id) }}">DELETE</a>
        </li>  
        @endforeach

    </ul>
@endsection