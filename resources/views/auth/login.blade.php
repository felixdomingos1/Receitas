<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            *{
                text-decoration: none;
                list-style: none;
                font-family: sans-serif;
                color: #000;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            form{
                display: flex;
                flex-direction: column;
                gap: 20px;

                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
            }

            form input{
                height: 50px;
                width: 250px;
                padding: 10px ;
            }

            form button{
                padding: 20px;
                width: 200px;
                cursor: pointer;
            }
        </style>
</head>
<body>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="Post" action="{{ route('login') }}">
    @csrf
    
        <input type="email" name="email" id="email" placeholder="email">
        <input type="password" name="password" id="password" placeholder="palavra passe">
        <button type="submit">Enviar</button>
        <a href="{{route('home')}}"> continuar anonimo</a>
    </form>

    
</body>
</html>