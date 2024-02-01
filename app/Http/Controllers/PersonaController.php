<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonaRequest;
use App\Models\agrupacion;
use App\Models\localidad;
use App\Models\nivelCargo;
use App\Models\persona;
use App\Models\provincia;
use App\Models\tipoCargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = persona::all();

        return view('personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $data = [

            'localidades' => localidad::all(),
            'provincias'  => provincia::all(),
            'cargos'      => tipoCargo::all(),
            'nivelesCargo' => nivelCargo::all(),
            'agrupaciones' => agrupacion::all()
        ];

        return view('personas.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonaRequest $request)
    {
        if ($request->id) {
            $persona = persona::find($request->id);
            $persona->update($request->all());
            $id_persona = $request->id;
        } else {
            $persona = persona::create($request->all());
            $id_persona = '';
        }
        
        if($request->foto || $request->url_img){
            $this->cargarImagen($request, $persona);
        };

        return response()->json(['persona' => $persona, 'id_persona' => $id_persona]);
    }

    /**
     * Display the specified resource.
     */
    public function show(persona $persona)
    {
        return view('personas.show', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(persona $persona)
    {
        $data = [

            'localidades' => localidad::all(),
            'provincias'  => provincia::all(),
            'cargos'      => tipoCargo::all(),
            'nivelesCargo' => nivelCargo::all(),
            'agrupaciones' => agrupacion::all(),
            'persona'   => $persona
        ];

        return view('personas.create', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(persona $persona)
    {
        $registros = $persona->registro;
        foreach ($registros as $registro) {
            $registro->delete();
        }

        $persona->delete();
        Log::info('estoy destruyendo');
        return redirect()
            ->route('personas.index')
            ->withStatus('Persona eliminada correctamente.');
    }

    public function getLocalidades($id_provincia)
    {

        $localidades = localidad::where('id_provincia', $id_provincia)->get();

        return response()->json($localidades);
    }

    public function getPersona($id_persona)
    {

        $persona = persona::find($id_persona);

        return response()->json($persona);
    }

    public static function table(Request $request)
    {
        $search = $request->search;
        if ($search) {
            $personas = persona::where('nombre', 'LIKE', '%' . $search . '%')
                ->orWhere('apellido', 'LIKE', '%' . $search . '%')->get();
        } else {
            $personas = persona::get();
        }

        $desktop = view('personas.table-desktop', compact('personas'))->render();
        $movil = view('personas.table-movil', compact('personas'))->render();

        return response()->json(['desktop' => $desktop, 'movil' => $movil]);
    }

    public function cargarImagen($request, $persona){
        if ($request->foto !== 'undefined') {
            $foto = $request->file('foto');
            $nombre_foto = ($request->nombre . '-' . $request->apellido . '-' . $persona->id . '.' . $foto->getClientOriginalExtension());
            $foto->storeAs('/public/assets/img/perfil', $nombre_foto);

            $persona->nombre_foto = $nombre_foto;
            $persona->save();
        } elseif ($request->url_img) {

            $url = $request->url_img;
            $foto = Http::get($url);
            $nombre_foto = $request->nombre . '-' . $request->apellido . '-' . $persona->id . '.' . pathinfo($url, PATHINFO_EXTENSION);
            Storage::put('/public/assets/img/perfil/' . $nombre_foto, $foto);

            $persona->nombre_foto = $nombre_foto;
            $persona->save();
        }
    }
}
