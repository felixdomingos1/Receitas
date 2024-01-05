@extends('layouts.app')

@section('content')
    <h1>{{ $recipe->title }}</h1>
    <p><strong>Descrição:</strong> {{ $recipe->description }}</p>
    <!-- Mostrar outros detalhes da receita, como ingredientes, instruções, etc. -->
    <!-- ... -->
    <!-- Adicionar recursos de avaliação e compartilhamento -->
    <p>Avaliação: {{ $recipe->rating }}</p>
    <form method="POST" action="{{ route('recipes.rate', $recipe->id) }}">
        @csrf
        <input type="hidden" name="rating" value="5"> <!-- Campo para escolher a avaliação -->
        <button type="submit">Avaliar</button>
    </form>
    <button onclick="shareRecipe()">Compartilhar</button> <!-- Botão para compartilhar via JavaScript -->
@endsection

@section('scripts')
    <script>
        function shareRecipe() {
            // Lógica para compartilhar a receita (pode ser implementado com JavaScript)
        }
    </script>
@endsection
