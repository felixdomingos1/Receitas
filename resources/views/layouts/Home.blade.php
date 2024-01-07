



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Receitas</title>

        <style>
            *{
                text-decoration: none;
                list-style: none;
                font-family: sans-serif;
                color: #000;
                margin: 0;
                padding: 0;
            }
            header{
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding:30px 70px;
            }

            nav ul{
                display: flex;
                align-items: center;
                gap: 10px;
            }

            header{
                box-shadow: 1px 2px 3px #000;
            }
        </style>
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/home.css">
    
    </head>
    <body>
       <header>
            <img src="" alt="">

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
                <form action="">
                    <input type="text">
                    <button type="submit">Enviar</button>
                </form>

                <div class="receita">
                    <div class="left">
                         <img src="/imgs/pratodecomidafotomarcossantos003.jpg" alt="">
                    </div>
                    <div class="right">
                        
                    </div>
                </div>
            </main>

    </body>
</html>

