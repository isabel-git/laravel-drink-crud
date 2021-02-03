@extends('layouts.main-layout')

@section('content')
    <h1>INFO DRINK</h1>

    <ul>

        <li>Nome: {{$drink -> name}}</li>
        <li>Gradi Alcol: {{$drink -> degres}}</li>
        <li>Prezzo: {{$drink -> price}}$</li>

    </ul>
@endsection