@extends('layouts.app')

@section('content')
    <h1>Criar Nova Receita</h1>
    <form method="POST" action="{{ route('recipes.store') }}">
        @csrf
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" required><br><br>
        <!-- Adicionar campos adicionais para descrição, ingredientes, instruções, etc. -->
        <label for="description">Descrição:</label>
        <textarea id="description" name="description" required></textarea><br><br>
        <!-- Campos para ingredientes, instruções, avaliação e compartilhamento -->
        <!-- ... -->
        <button type="submit">Salvar Receita</button>
    </form>
@endsection
