<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipeController extends Controller
{
   public function index()
   {
      $recipes = Recipe::latest()->get();
      return view('recipes.index', compact('recipes'));
   } 
   public function create() {
         return view('recipes.create');
   }

   public function store(Request $request) {
         // Lógica para validar e salvar uma nova receita
   }

   public function edit($id) {
         // Buscar a receita pelo ID e retornar a view para editar
   }

   public function update(Request $request, $id) {
         // Lógica para validar e atualizar uma receita existente
   }

   public function show($id) {
         // Buscar a receita pelo ID e mostrar detalhes completos
   }

   public function rateRecipe($id, $rating) {
         // Método para avaliar uma receita (adicionar a funcionalidade de avaliação)
   }

   public function shareRecipe($id) {
         // Método para compartilhar uma receita (adicionar a funcionalidade de compartilhamento)
   }  
}
