<header class="d-flex">
    <div class="d-flex align-items-center m-auto justify-content-around my-3 w-75">
        <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="">
        <ul class="m-auto d-flex navlink">

            @foreach ($links as $link)
                <li class="position-relative">
                    <a class="fw-bold" href="{{route($link['ref'])}}">{{$link['name']}}</a>
                    <div class="blubox"></div>
                </li>
            @endforeach

        </ul>
    </div>
</header>

