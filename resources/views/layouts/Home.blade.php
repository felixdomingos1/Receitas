



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Receitas</title>

        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/home.css">
    
    </head>
    <body>
       <header>
        <span></span>
            <nav>
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endauth

            </nav>
        </header>

<!-- ////////////////////////////////////terá componentes aqui;;;;;;;;;;;;;;;; -->

            <main>
                <form action="" id="publicReceitas" name="publicReceitas">
                    <input type="text">
                    <button type="submit">Enviar</button>
                </form>

                <div class="receita">
                    <div class="left">
                         <img src="/imgs/pratodecomidafotomarcossantos003.jpg" alt="">
                    </div>
                    <div class="right">
                            nlknlkn
                    </div>
                </div>
            </main>

    </body>
</html>

