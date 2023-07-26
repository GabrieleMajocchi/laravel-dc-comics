@extends('layouts.app')

@section('title', 'Comic info page')

@section('main-section')
<div class="jumbotron"></div>
<div class="showBlueBar"></div>
<div class="container">
    <div class="row justify-content-center">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title  }}">

        <article class="card col-6 p-0 m-3">

            <img src="{{ $comic->thumb }}" class="card-img-top w-25" alt="{{ $comic->title  }}">
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
        <form action="{{ route('admin.destroy', $comic->id) }}" class="d-inline form-terminator" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-sm btn-warning me-2">
                Delete
            </button>
        </form>
    </div>
</div>

@endsection
