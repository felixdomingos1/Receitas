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

    
    </head>
    <body>
       <header>
            <img src="" alt="">

            <nav>
                <ul>
                    <li><a href="{{ route('login') }}"> ENTRAR</a></li>

                    <li><!-- resources/views/layouts/app.blade.php ou onde quer que seus links/botões de registro estejam -->
                        @guest
                            <a href="{{ route('signup') }}">Register</a>
                        @endguest
                    </li>

                </ul>

            </nav>
        </header>
    </body>
</html>