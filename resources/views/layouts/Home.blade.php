<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Receitas</title>
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/home.css">  

        </script>
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
            <nav>
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class='logoutBtn'>Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Login</a>
                @endauth
            </nav>
        </div>
        </header>

<!-- ////////////////////////////////////terá componentes aqui;;;;;;;;;;;;;;;; -->

            <main>
                <form  class='form' action="" id="publicReceitas" name="publicReceitas">
                    <input type="text" >
                    <button type="submit" onclick='Postar()'>Publicar</button>
                </form>

                
            <div class="containerReceitas">
                
            <div class="card">
                    <img src="/imgs/pratodecomidafotomarcossantos003.jpg" alt="">
                    <h2>Arroz com Feijão</h2>
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
                <div class="card">
                    <img src="/imgs/pratodecomidafotomarcossantos003.jpg" alt="">
                    <h2>Arroz com Feijão</h2>
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
                <div class="card">
                    <img src="/imgs/pratodecomidafotomarcossantos003.jpg" alt="">
                    <h2>Arroz com Feijão</h2>
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
                <div class="card">
                    <img src="/imgs/pratodecomidafotomarcossantos003.jpg" alt="">
                    <h2>Arroz com Feijão</h2>
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
                <div class="card">
                    <img src="/imgs/pratodecomidafotomarcossantos003.jpg" alt="">
                    <h2>Arroz com Feijão</h2>
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
                <div class="card">
                    <img src="/imgs/pratodecomidafotomarcossantos003.jpg" alt="">
                    <h2>Arroz com Feijão</h2>
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
                <div class="card">
                    <img src="/imgs/pratodecomidafotomarcossantos003.jpg" alt="">
                    <h2>Arroz com Feijão</h2>
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
                <div class="card">
                    <img src="/imgs/pratodecomidafotomarcossantos003.jpg" alt="">
                    <h2>Arroz com Feijão</h2>
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

                
            </div>  

            </main>
            <footer>
                Copyright 2024, All right reserved
            </footer>

    </body>
</html>

