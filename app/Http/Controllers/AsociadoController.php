<?php

namespace App\Http\Controllers;

use App\Models\asociado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AsociadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(asociado $asociado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(asociado $asociado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, asociado $asociado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(asociado $asociado)
    {
        //
    }

    public function listCreate(Request $request){
        
        $lista_asociados = $request->lista_asociados;

        $id_registro = $request->id_registro;
        
        foreach ($lista_asociados as $id_persona) {
            
            $asociado = asociado::create([
                'id_persona' => $id_persona, 
                'id_registro' => $id_registro
            ]);     
        }

        return response()->json(true);
    }
}
