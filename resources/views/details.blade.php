@extends('master')

@section('content')

@if ($the_details['status'] == 'R')
    <div class="product-container d-flex flex-row justify-content-center m-5">
        <img class="card-img-top" src="{{ asset('images/' . $the_details['image']) }}"
            alt="{{ $the_details['name'] }}" style="width: 12vw">
        <div class="rare text-black p-2" style="background-color: silver">
            <h4>{{ $the_details['name'] }}</h4>
            <p>ID: {{ $the_details['id'] }}</p>
            <p>{{ $the_details['desc'] }}</p>
            <p>{{ $the_details['price'] }}</p>
        </div>
    </div>
@elseif ($the_details['status'] == 'SR')
    <div class="product-container d-flex flex-row justify-content-center m-5">
        <img class="card-img-top" src="{{ asset('images/' . $the_details['image']) }}"
            alt="{{ $the_details['name'] }}" style="width: 12vw">
        <div class="s-rare text-black p-2" style="background-color: gold">
            <h4>{{ $the_details['name'] }}</h4>
            <p>ID: {{ $the_details['id'] }}</p>
            <p>{{ $the_details['desc'] }}</p>
            <p>{{ $the_details['price'] }}</p>
        </div>
    </div>
@elseif ($the_details['status'] == 'SSR')
    <div class="product-container d-flex flex-row justify-content-center m-5">
        <img class="card-img-top" src="{{ asset('images/' . $the_details['image']) }}"
            alt="{{ $the_details['name'] }}" style="width: 12vw">
        <div class="ss-rare text-white p-2" style="background-color: red">
            <h4>{{ $the_details['name'] }}</h4>
            <p>ID: {{ $the_details['id'] }}</p>
            <p>{{ $the_details['desc'] }}</p>
            <p>{{ $the_details['price'] }}</p>
        </div>
    </div>
@endif
