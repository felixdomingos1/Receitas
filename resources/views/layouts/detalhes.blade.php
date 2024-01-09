<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


{{ $receita  }}

<div>
    <img src="" alt="">
    <div> titulo:  {{$receita-> title }}</div>
    <div>igrediente:  {{$receita-> ingredient }}</div>
    <div> tempo de pre: {{$receita-> preparationTime }}</div>
    <div> metodo: {{$receita-> preparationMethod }}</div>
    <div>user id:  {{$receita-> user_id }}</div>
</div>

<a href="{{ route('home')}} ">Home</a>
</body>
</html>