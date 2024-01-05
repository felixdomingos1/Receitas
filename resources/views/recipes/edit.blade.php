@extends('layouts.app')

@section('content')
    <h1>Editar Receita</h1>
    <form method="POST" action="{{ route('recipes.update', $recipe->id) }}">
        @csrf
        @method('PUT')
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" value="{{ $recipe->title }}" required><br><br>
        <!-- Campos para editar descrição, ingredientes, instruções, etc. -->
        <label for="description">Descrição:</label>
        <textarea id="description" name="description" required>{{ $recipe->description }}</textarea><br><br>
        <!-- Campos para ingredientes, instruções, avaliação e compartilhamento -->
        <!-- ... -->
        <button type="submit">Atualizar Receita</button>
    </form>
@endsection
