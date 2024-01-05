@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <h1>Receitas</h1>
                @foreach($recipes as $recipe)
                    <div>
                        <h2>{{ $recipe->title }}</h2>
                        <p>{{ $recipe->description }}</p>
                        <!-- Mais detalhes da receita e botões para avaliar/compartilhar -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
