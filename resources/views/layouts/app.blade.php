<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset("css/main.css") }}">
    @yield('custom_css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h2><a href="/">Darina flowers</a></h2>
        <nav>
            <ul class="menu">
                <li><a href="/">Главная</a><span class="red">(!)</span></li>
                <li><a href="/products">Все товары</a>
                    <ul class="cat-menu">
                        @foreach($categories as $category)
                            <li><a href=" {{ route('showCategory', $category->alias) }} ">{{ $category->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#">static</a><span class="red">(!)</span></li>
                <li><a href="#">Корзина</a><span class="red">(!)</span></li>
                <ul class="cat-menu auth">
                    @guest
                        <li>
                            <a href="{{ route('login') }}">Войти</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}">Регистрация</a>
                        </li>
                    @else
                        <li>
                            {{ Auth::user()->name }}
                        </li>
                        <li>
                            <a href="{{ route('home') }}">Кабинет пользователя</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Выйти</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    @endguest
                </ul>
            </ul>
        </nav>
        <div class="search">
            <form action="#">
                <input type="text" placeholder="Поиск товаров...">
                <button type="submit">найти</button>
                <span class="red">(!)</span>
            </form>
        </div>
    </header>
    @yield('content')
    <footer>
        <h2>Футер сайта</h2>
    </footer>
    @yield('custom_js')
</body>
</html>
