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
       <span class='Logo'>Rece<strong>itas</strong> </span>
       <ul class='ulHeader'>
        <li class='active'>Inicio</li>
        <li>Minhas Receitas</li>
        <li>Notificações</li>
        <li>Detalhes</li>
       </ul>
        <div class="singInOut">
        @if($userData)
            <p>Olá, {{ $userData-> first_name}}</p>
         @endif
       <span></span>
       @if($userData)
            <p>Olá, {{ $userData-> userType }}</p>
        @endif
            <nav>
                @auth

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class='logoutBtn'>Logout</button>
                    </form>
                @else

                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('signup') }}">signup</a>
                @endauth
            </nav>
        </div>
        </header>

<!-- ////////////////////////////////////terá componentes aqui;;;;;;;;;;;;;;;; -->

            <main>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form  class='form' action="" id="publicReceitas" name="publicReceitas">
                    <input type="text" id="openModal">
                    <button >Publicar</button>
                </form>
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2>Publicação</h2>
                        <form method="POST" action="{{ route('receitas')}}">
                        @csrf
                            <input type="text" name="title" id="title" placeholder="Título">
                            <input type="text" name="ingredient" id="ingredient" placeholder="Igredientes">
                            <input type="text" name="preparationTime" id="preparationTime" placeholder="Tempo de Cozimento">
                            <textarea name="preparationMethod" id="preparationMethod" placeholder="Modo de preparação"></textarea>
                            <button type="submit">Publicar</button>
                        </form>
               @auth
                <form action="" id="publicReceitas" name="publicReceitas">
                        <input type="text">
                        <button type="submit">Enviar</button>
                    </form>
               @endauth

                <div class="receita">
                    <div class="left">
                         <img src="/imgs/pratodecomidafotomarcossantos003.jpg" alt="">
                         <h2>Arroz com Feijão</h2>
                    </div>
                </div>
            <div class="containerReceitas">
           

                
                @foreach (array_reverse($receitas->all()) as $receita)
                <div class="card">

           
                       <a href="{{ route('detalhes', ['receitaId' => $receita->id ]) }}">  <img  src="/imgs/pratodecomidafotomarcossantos003.jpg" alt=""> </a>
                        <h2>{{$receita->title}}</h2>
                        <div class="user-rating">
                            <input type="radio" id="star1" name="rating" value="1">
                            <label for="star1">1</label>
                            <input type="radio" id="star2" name="rating" value="2">
                            <label for="star2">2</label>
                            <input type="radio" id="star3" name="rating" value="3">
                            <label for="star3">3</label>
                            <input type="radio" id="star4" name="rating" value="4">
                            <label for="star4">4</label>
                            <input type="radio" id="star5" name="rating" value="5">
                            <label for="star5">5</label>
                        </div>
                        <div class="user-datas">
                            <div class="imgUser">
                                <!-- <img src="/imgs/pratodecomidafotomarcossantos003.jpg" alt=""> -->
                            {{$userData -> first_name[0]}}{{$userData -> last_name[0]}}
                            </div>
                            <div class="userName">
                                {{$userData -> first_name}} {{$userData -> last_name}}
                            </div>
                        </div>
                        </div>
                    @endforeach
               
                
            </div>  

            </main>
            <footer>
                Copyright 2024, All right reserved
            </footer>

    </body>
    <script src="/js/index.js"></script>
    <script src="/js/home.js"></script>
</html>

