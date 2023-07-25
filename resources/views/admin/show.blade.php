@extends('layouts.app')

@section('title', 'Comic info page')

@section('main-section')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                Comic: {{ $comic->title }}
            </h1>
        </div>
    </div>
    <div class="row pokemons justify-content-center">
        <article class="card col-6 p-0 m-3">

            <img src="{{ $comic->thumb }}" class="card-img-top w-25" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $comic->title  }}
                </h5>
                <h6>
                    ID : {{ $comic->id }}
                </h6>
                <p class="card-text">
                    Desc: {{ $comic->description }}
                </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    {{ $comic->price  }}
                </li>
                <li class="list-group-item">
                    {{ $comic->series  }}
                </li>
            </ul>
        </article>
    </div>
</div>

@endsection
