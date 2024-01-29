<?php

namespace App\Http\Controllers;

use App\Models\cargoPersona;
use App\Models\categoriaRegistro;
use App\Models\localidad;
use App\Models\nivelCargo;
use App\Models\persona;
use App\Models\tipoCargo;
use App\Models\tipoVinculo;
use App\Models\vinculoPersona;
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

    public function getVinculos($id_persona){

        $tipo_vinculos = tipoVinculo::all();
        $personas = persona::all();

        $persona = persona::find($id_persona);

        $vinculo_personas = vinculoPersona::where('id_persona1', $id_persona)->get();

        return view('parametros.vinculos', compact ('tipo_vinculos', 'personas', 'persona', 'vinculo_personas'));
    }

    public static function vinculoStore(Request $request)
    {
        $vinculoPersona = vinculoPersona::create($request->all());

        $tipo_vinculo = tipoVinculo::find($request->id_vinculo);

        $vinculoPersona2 = vinculoPersona::create(['id_persona1' => $request->id_persona2, 'id_persona2' => $request->id_persona1, 'id_vinculo' => $tipo_vinculo->reciproco]);

        $vinculo_personas = vinculoPersona::where('id_persona1', $request->id_persona1)->get();

        $view = view('parametros.tabla_vinculos', compact('vinculo_personas'))->render();

        return response()->json($view);
    }

    public function getCargos($id_persona){

        $data = [
            'tipo_cargos' => tipoCargo::all(),
            'personas' => persona::all(),
            'persona' => persona::find($id_persona),
            'localidades' => localidad::where('id_provincia', 9)->get(),
            'cargo_personas' => cargoPersona::where('id_persona', $id_persona)->get(),
            'niveles' => nivelCargo::all()
        ];
        
        return view('parametros.cargos', $data);
    }

    public static function cargoStore(Request $request)
    {
        $cargoPersona = cargoPersona::create($request->all());

        $cargo_personas = cargoPersona::where('id_persona', $request->id_persona)->get();

        $view = view('parametros.tabla_cargos', compact('cargo_personas'))->render();

        return response()->json($view);
    }
}
