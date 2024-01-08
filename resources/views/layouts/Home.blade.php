



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
                         <h2>Arroz com Feijão</h2>
                    </div>
                    <div class="right">
                    <h2>RECEITAS</h2>

                        <ul >
                            <li>Arroz 1kz</li>
                            <li>Massa a goso</li>
                            <li>Agua a gosto</li>
                            <li>Tigela a gosto</li>
                        </ul>

                        <h2>Modo de preparo</h2>

                        <ul>
                        <li>Arroz 1kz</li>
                        <li>Massa a goso</li>
                        <li>Agua a gosto</li>
                        <li>Tigela a gosto</li>
                        </ul>

                    </div>
                </div>

                <div class="receita">
                    <div class="left">
                         <img src="/imgs/pratodecomidafotomarcossantos003.jpg" alt="">
                         <h2>Arroz com Feijão</h2>
                    </div>
                    <div class="right">
                           <h2>RECEITAS</h2>

                            <ul >
                                <li>Arroz 1kz</li>
                                <li>Massa a goso</li>
                                <li>Agua a gosto</li>
                                <li>Tigela a gosto</li>
                            </ul>

                           <h2>Modo de preparo</h2>

                           <ul>
                            <li>Arroz 1kz</li>
                            <li>Massa a goso</li>
                            <li>Agua a gosto</li>
                            <li>Tigela a gosto</li>
                           </ul>

                    </div>
                </div>
            </main>


    </body>
</html>

