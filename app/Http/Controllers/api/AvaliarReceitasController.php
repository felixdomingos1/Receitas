<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AvaliarReceitas;

class AvaliarReceitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return AvaliarReceitas::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $receitaId)
    {
        $newAvaliarReceitas = $request->all();

        AvaliarReceitas::create(array_merge($newAvaliarReceitas, ["receitaId" => $receitaId]));

        return response()->json(['mensagem'=>'avaliar receita was created sucessfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
