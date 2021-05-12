@extends('layouts.main')

@section('pageTitle')
    Prodotto
@endsection

@section('main')
<div class="product">
    <div class="container">
        <h1>{{$pasta['titolo']}}</h1>
        <img src="{{$pasta['src-h']}}" alt="#">
        <img src="{{$pasta['src-p']}}" alt="#">
        <p>
            {!!$pasta['descrizione']!!}
        </p>
    </div>
</div>
@endsection