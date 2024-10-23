<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <div class="d-flex justify-content-between w-100">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <a href="{{route('main.index')}}" class="btn btn-outline-primary w-50">Перейти на сайт</a>
        <form action="{{route('logout')}}" method="post">@csrf<input type="submit" value="Выйти" class="btn btn-outline-secondary"></form>
    </div>
</nav>
