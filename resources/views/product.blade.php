@extends('master')

@section('content')

<div class="d-flex flex-row text-center justify-content-around m-5" style="height: 6vw">
    @foreach ($productInfo as $info)
        @if ($info['status'] == 'R')
            <a href="details/{{ $info['id'] }}" class="container text-decoration-none">
                <div class="product-container">
                    <img class="card-img-top" src="{{ asset('images/' . $info['image']) }}"
                        alt="{{ $info['name'] }}" style="width: 12vw">
                    <div class="rare text-black" style="background-color: silver">
                        <h4>{{ $info['name'] }}</h4>
                        <p>{{ $info['price'] }}</p>
                    </div>
                </div>
            </a>
        @elseif ($info['status'] == 'SR')
            <a href="details/{{ $info['id'] }}" class="container text-decoration-none">
                <div class="product-container">
                    <img class="card-img-top" src="{{ asset('images/' . $info['image']) }}"
                        alt="{{ $info['name'] }}" style="width: 12vw">
                    <div class="s-rare text-black" style="background-color: gold">
                        <h4>{{ $info['name'] }}</h4>
                        <p>{{ $info['price'] }}</p>
                    </div>
                </div>
            </a>
        @elseif ($info['status'] == 'SSR')
            <a href="details/{{ $info['id'] }}" class="container text-decoration-none">
                <div class="product-container">
                    <img class="card-img-top" src="{{ asset('images/' . $info['image']) }}"
                        alt="{{ $info['name'] }}" style="width: 12vw">
                    <div class="ss-rare text-white" style="background-color: red">
                        <h4>{{ $info['name'] }}</h4>
                        <p>{{ $info['price'] }}</p>
                    </div>
                </div>
            </a>
        @endif
    @endforeach
</div>

@endsection
