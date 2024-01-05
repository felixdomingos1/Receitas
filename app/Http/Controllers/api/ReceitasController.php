<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receitas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReceitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Receitas::all();
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
    public function store(Request $request)
    {
        $userLogedId = Auth::id();
       
        $newReceita = $request->all();

        if (!$userLogedId) {
            $userLogedId = 1000;
        }

        Receitas::create(array_merge( [ "userId" => $userLogedId], $newReceita));
        return response()->json(['mensagem' => 'created a new Receitas  sucessfully']);
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
