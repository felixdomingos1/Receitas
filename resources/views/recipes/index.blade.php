@extends('layouts.app')

@section('content')
    <h1>Lista de Receitas</h1>
    <ul>
        @foreach($recipes as $recipe)
            <li><a href="{{ route('recipes.show', $recipe->id) }}">{{ $recipe->title }}</a></li>
        @endforeach
    </ul>
@endsection
