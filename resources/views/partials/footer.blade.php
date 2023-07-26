<footer>
    <div class="background">
        <div class="top-footer d-flex w-75 m-auto position-relative">

            <div class="link-section">
                <h3>DC COMICS</h3>
                <ul>
                @foreach ($links as $section)
                    <li>
                        <a href="{{route($section['ref'])}}">{{$section['name']}}</a>
                    </li>
                @endforeach
                </ul>
                <h3>SHOP</h3>
                <ul>
                    <li>
                        <a href="#">Shop DC</a>
                    </li>
                    <li>
                        <a href="#">Shop DC Collectibles</a>
                    </li>
                </ul>
            </div>

            <div class="link-section">
                <h3>DC</h3>
                <ul>
                @foreach ($dc as $section)
                    <li>
                        <a href="{{route($section['ref'])}}">{{$section['name']}}</a>
                    </li>
                @endforeach
                </ul>
            </div>

            <div class="link-section">
                <h3>SITES</h3>
                <ul>
                @foreach ($sites as $section)
                    <li>
                        <a href="{{route($section['ref'])}}">{{$section['name']}}</a>
                    </li>
                @endforeach
                </ul>
            </div>

            <div class="dc position-absolute"></div>
        </div>
    </div>

    <div class="lower-footer  d-flex w-75 m-auto position-relative align-items-center justify-content-between">
        <div class="button">
            <a href="#" class="fw-bold">SIGN-UP NOW!</a>
        </div>
        <div class="socials d-flex">
            <p class="fw-bold">FOLLOW US</p>
            <img src="{{ Vite::asset('resources/img/footer-facebook.png')}}" alt="">
            <img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt="">
            <img src="{{ Vite::asset('resources/img/footer-youtube.png')}}" alt="">
            <img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
            <img src="{{ Vite::asset('resources/img/footer-periscope.png')}}" alt="">
        </div>
    </div>
</footer>
