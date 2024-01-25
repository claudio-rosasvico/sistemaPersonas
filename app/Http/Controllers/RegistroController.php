<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Models\categoriaRegistro;
use App\Models\persona;
use App\Models\registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registros = registro::all();
        
        return view('registros.index', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Log::info('Pasa por create');
        $data = [
            'personas' => persona::all(),
            'categorias' => categoriaRegistro::all()
        ];
        return view('registros.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegistroRequest $request)
    {   
        
        $array_registro = $request->validated();

        if($request->id){
            $registro = registro::find($request->id);
            $registro->update($array_registro);    
        } else {
            $registro = registro::create($array_registro);
        }

        return response()->json($registro);
    }

    /**
     * Display the specified resource.
     */
    public function show(registro $registro)
    {
        return view('registros.show', compact('registro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(registro $registro)
    {
        Log::info('Pasa por edit');
        $data = [
            'personas' => persona::all(),
            'categorias' => categoriaRegistro::all()
        ];
        return view('registros.create', $data, compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, registro $registro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(registro $registro)
    {
        //
    }

    public static function table(Request $request)
    {
        $search = $request->search;
        if ($search) {
            $registros = registro::where('titulo', 'LIKE', '%' . $search . '%')
                                ->orWhere('descripcion', 'LIKE', '%' . $search . '%')->get();
        } else {
            $registros = registro::get();
        }

        $desktop = view('registros.table-desktop', compact('registros'))->render();
        $movil = view('registros.table-movil', compact('registros'))->render();

        return response()->json(['desktop' => $desktop, 'movil' => $movil]);
    }
}
