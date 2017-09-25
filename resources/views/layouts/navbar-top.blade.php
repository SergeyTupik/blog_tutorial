<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="{{ url('/') }}">Главная</a>

            <a class="nav-link" href="#">Обо мне</a>

            @if(Auth::check())
                <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
                <a class="nav-link" href="{{ route('posts.create') }}">Добавить запись</a>
                <a class="nav-link " href="{{ route('logout') }}">Выйти</a>
            @else
                <a class="nav-link ml-auto" href="{{ route('login') }}">Войти</a>
                <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
            @endif

        </nav>
    </div>
</div>