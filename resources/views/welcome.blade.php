@extends('layouts.app')

@section('title', 'Homepage')

@section('main-section')

    <div class="jumbotron"></div>
    <div class="products">
        <div class="box m-auto w-75 d-flex align-item-center justify-content-between flex-wrap position-relative">
            <div class="current-series fw-bold">CURRENT SERIES</div>

            @foreach ($comics as $comic)
                <div class="comics">
                    <span class="fw-bold fs-2">{{$comic['price']}}</span>
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    <a href="{{route('admin.show', $comic->id)}}"><p class="comics-title">{{$comic['series']}}</p></a>
                </div>
            @endforeach

            <a href="#" class="load-more fw-bold m-auto">LOAD MORE</a>
        </div>
    </div>
    <div class="blubox d-flex align-item-center justify-content-center">
        <div class="element d-flex align-items-center px-5">
            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
            <p>DIGITAL COMICS</p>
        </div>
        <div class="element d-flex align-items-center px-5">
            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="">
            <p>DC MERCHANDISE</p>
        </div>
        <div class="element d-flex align-items-center px-5">
            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
            <p>SUBSCRIPTION</p>
        </div>
        <div class="element d-flex align-items-center px-5">
            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="">
            <p>COMIC SHOP LOCATOR</p>
        </div>
        <div class="element d-flex align-items-center px-5">
            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
            <p>DC POWER VISA</p>
        </div>
    </div>


@endsection
