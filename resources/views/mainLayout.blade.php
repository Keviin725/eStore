<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!--CSS-->
        <link rel="stylesheet" href="/css/style.css">
        <link href="/your-path-to-uicons/css/uicons-[your-style].css" rel="stylesheet">


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield ('title')</title>
    </head>

    <body>

        <header>
            <nav class="navbar navbar-expand-lg">
                <div class="collapse navbar-collapse" id="navbar">
                    <a class="navbar-brand titulo" href="{{('welcome')}}">
                    eStore
                    <img src="/img/shopping-cart.png" alt="" width="30" height="24" class="d-inline-block align-text-top">

                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{('login')}}" class="nav-link">Login</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{('registrar')}}" class="nav-link">Registrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{('categoria')}}" class="nav-link">Categoria</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{('cart')}}" class="nav-link">Meu Carrinho</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{session('msg')}}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>

        <footer>
            <p>Kevin Machava &copy; 2022</p>
        </footer>


    </body>

</html>
