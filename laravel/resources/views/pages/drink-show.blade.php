@extends('layouts.main-layout')

@section('content')
    <h1>INFO DRINK</h1>

    <ul>

        <li>{{$drink -> name}}</li>
        <li>{{$drink -> degres}}</li>
        <li>{{$drink -> price}}</li>

    </ul>
@endsection