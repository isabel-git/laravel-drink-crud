@extends('layouts.main-layout')

@section('content')
    <h1>ADD DRINK</h1>

    <form action="{{route('store')}}" method='POST'>

        @csrf
        @method('POST')

        <label for="name">Nome</label>
        <input name="name" type="text">
        <br>

        <label for="degres">Degres</label>
        <input name="degres" type="text">
        <br>

        <label for="price">Price</label>
        <input name="price" type="text">
        <br>

        <input type="submit" value="SALVA">

    </form>
@endsection