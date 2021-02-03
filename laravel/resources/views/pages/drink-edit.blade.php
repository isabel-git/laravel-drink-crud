@extends('layouts.main-layout')

@section('content')
    <h1>CHAGE DRINK</h1>

    <form action="{{route('update', $drink -> id)}}" method='POST'>

        @csrf
        @method('POST')

        <label for="name">Nome: </label>
        <input name="name" type="text" value="{{ $drink -> name }}">
        <br>

        <label for="degres">Degres: </label>
        <input name="degres" type="text" value="{{ $drink -> degres }}">
        <br>

        <label for="price">Price: </label>
        <input name="price" type="text" value="{{ $drink -> price }}">
        <br>

        <input type="submit" value="SALVA">

    </form>
@endsection