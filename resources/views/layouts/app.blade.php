<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    @yield('custom_css')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h2><a href="/">Darina flowers</a></h2>
        <nav>
            <ul class="menu">
                <li><a href="/">Главная</a></li>
                <li><a href="/products">Все товары</a>
                    <ul>
                        @foreach($categories as $category)
                            <li><a href=" {{ route('showCategory', $category->alias) }} ">{{ $category->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#">static</a></li>
                <li><a href="#">Корзина</a></li>
                <li><a href="#">Кабинет</a></li>
            </ul>
        </nav>
        <div class="search">
            <form action="#">
                <input type="text" placeholder="Поиск товаров...">
                <button type="submit">найти</button>
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
