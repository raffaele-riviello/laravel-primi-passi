@php
    $prodotti = config('products');
    $prodotto = $prodotti[$id];
@endphp
@extends('layouts.layout')
@section('css')
    {{-- css prodotti --}}
@endsection

@section('titolo')
    Prodotti
@endsection

@section('mainContent')
    <main id="product">
        <div class="container">
            <h1>{{$prodotto['titolo']}}</h1>
            <div class="box-img">
                <img src="{{$prodotto['src-h']}}" alt="{{$prodotto['titolo']}}">
            </div>
            <div class="box-img">
                <img src="{{$prodotto['src-p']}}" alt="{{$prodotto['titolo']}}">
            </div>
            <p>{!!$prodotto['descrizione']!!}</p>
        </div>
    </main>
@endsection

@section('scripts')
{{-- scriptjss --}}
@endsection
