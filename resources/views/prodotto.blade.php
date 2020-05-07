@php
    $prodotti = config('products');
    $prodotto = $prodotti[$id];

    $num_of_last_product = count($prodotti) -1;
    // dd($num_of_last_product); // debug

    $prev = ($id == 0) ? $num_of_last_product : $id -1;
    $next = ($id == $num_of_last_product) ? 0 : $id +1;

    //dd($prev);


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
            <div class="controller">
                <a href="{{route('prodotto.show', $prev)}}">
                    <i class="fas fa-arrow-circle-left fa-3x"></i>
                </a>
                <a href="{{route('prodotto.show', $next)}}">
                    <i class="fas fa-arrow-circle-right fa-3x"></i>
                </a>
            </div>
            <div class="box-img">
                <img src="{{$prodotto['src-p']}}" alt="{{$prodotto['titolo']}}">
            </div>
            <div class="descrizione">
                <p>
                    {!!$prodotto['descrizione']!!}
                </p>
            </div>

        </div>
    </main>
@endsection

@section('scripts')
{{-- scriptjss --}}
@endsection
