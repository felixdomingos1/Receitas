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
    <form method="POST" action="{{ route('signup') }}">

        @csrf

        <input type="text" name="first_name" id="first_name" placeholder="primeiro nome">

        <input type="text" name="last_name" id="last_name" placeholder="ultimo nome">
        <input type="email" name="email" id="email" placeholder="email">
        <input type="text" name="userType" id="userType" placeholder="Tipo de usuário">
        <input type="password" name="password" id="password" placeholder="palavra passe">
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="confirmar palavra passe">
        <button type="submit">Enviar</button>
    </form>

    
</body>
</html>