<header>
    <div class="top-blue-bar">
        <div class="container d-flex justify-content-end">
            <div>DC PowerVisa</div>
            <div class="pad-left20">Additional DC Sites</div>
        </div>
    </div>
    <div class="container nav-div d-flex justify-content-between align-items-center">
        <div id="logo" class="text-center">
            <a href="{{route('home')}}"><img id="logo-img" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC"></a>
        </div>
        <nav class="container navbar-light">
            <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('comics.index')}}">
                        COMICS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('comics.create')}}">
                        ADD NEW COMIC
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        LOREM
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        IPSUM
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        DOLOR
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        SIT
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        AMET
                    </a>
                </li>
            </ul>
        </nav>
        <div>
            <input type="text" placeholder="Search">
        </div>
    </div>

    {{-- jumbotron --}}
    <div class="jumbo">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Cartoon Decoration">
    </div>
   
</header>