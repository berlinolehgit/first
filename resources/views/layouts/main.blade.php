<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                <header class="header">
                    <div class="container">
                        <h1>{{__('education.city') }}</h1>
                        <h2>{{__('education.company') }}</h2>
                    </div>
                </header>
                <nav class="page-navigation">
                    <div class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                    </div>
                    <div class=" nav container navbar dropdown">
                        <a href="{{route('index')}}" class="">Головна</a>
                        <a href="{{route('offers.index')}}" class="dropdown_item ">Оголошення</a>
                        {{--<a href="" class="" >Перегляд оголошення</a>--}}
                        <a href="{{route('offers.add')}}" class="" >Добавлення оголошення</a>
                        <a href="{{route('users.index')}}" class="dropdown_item ">Користувачі</a>
                        <a href="{{route('users.add')}}" class="dropdown_item ">Добавлення ористувача</a>
                        <div class = "dropdown-offer">
                            {{--<a href="" class="dropdown_item ">Оголошення</a>--}}
                            {{--<a href="" class="" >Перегляд оголошення</a>--}}
                            {{--<a href="" class="" >Добавлення оголошення</a>--}}
                            {{--<div class="dropdowncontent">--}}
                                {{--<a href="" class="" >Перегляд оголошення</a>--}}
                                {{--<a href="" class="" >Добавлення оголошення</a>--}}
                            {{--</div>--}}
                        </div>
                        {{--<div class = "dropdown-offer">--}}
                            {{--<a href="" class="dropdown_item ">Користувачі</a>--}}
                            {{--<div class="dropdowncontent">--}}
                                {{--<a href="" class="">Перегляд користувачів</a>--}}
                                {{--<a href="" class="">Добавлення користувача</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                </nav>
                @yield('content')
                <footer class="footer">
                    <div class="container">
                        <p>Copyright © Example.com 2018</p>
                    </div>
                </footer>

    </body>
</html>
