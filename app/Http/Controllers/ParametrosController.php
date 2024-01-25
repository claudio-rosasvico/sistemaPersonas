<?php

namespace App\Http\Controllers;

use App\Models\categoriaRegistro;
use App\Models\nivelCargo;
use App\Models\tipoCargo;
use App\Models\tipoVinculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ParametrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'categorias'    => categoriaRegistro::all(),
            'nivelesCargo'    => nivelCargo::all(),
            'tiposCargo'    => tipoCargo::all(),
            'tiposVinculo'    => tipoVinculo::all()
        ];

        return view('parametros.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parametros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $variable = $request->variable;
        $valor = $request->valor;
        Log::info($variable . ' / ' . $valor);

        switch ($variable) {
            case 'categoria':
                $parametro = categoriaRegistro::create(['nombre' => $valor]);
                break;
            
            case 'nivel':
                $parametro = nivelCargo::create(['nombre' => $valor]);
                break;
            
            case 'tipo_vinculo':
                $parametro = tipoVinculo::create(['nombre' => $valor]);
                break;
            
            case 'tipo_cargo':
                $parametro = tipoCargo::create(['nombre' => $valor]);
                break;
            
            default:
                return false;
                break;
        }
        Log:info($parametro);

        return response()->json($parametro);
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
