<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('weather')}}">MegaWeather</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link @if (Route::current()->getName() == 'weather') active @endif" href="{{route('weather')}}">Погода</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Route::current()->getName() == 'news') active @endif" href="{{route('news')}}">Новости</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if (Route::current()->getName() == 'maps') active @endif" href="#">Карта</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
