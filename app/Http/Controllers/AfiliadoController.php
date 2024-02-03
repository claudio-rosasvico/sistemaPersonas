<?php

namespace App\Http\Controllers;

use App\Models\afiliado;
use Illuminate\Http\Request;

class AfiliadoController extends Controller
{
    public function index(){

        $afiliados = afiliado::take(100)->orderBy('nombre_apellido')->get();

        return view('afiliados.index', compact('afiliados'));
    }

    public static function table(Request $request)
    {
        $search = $request->search;
        if ($search) {
            $afiliados = afiliado::where('nombre_apellido', 'LIKE', '%' . $search . '%')
                ->orWhere('DNI', 'LIKE', '%' . $search . '%')->take(100)->orderBy('nombre_apellido')->get();
        } else {
            $afiliados = afiliado::take(100)->orderBy('nombre_apellido')->get();
        }

        $desktop = view('afiliados.table-desktop', compact('afiliados'))->render();
        $movil = view('afiliados.table-movil', compact('afiliados'))->render();

        return response()->json(['desktop' => $desktop, 'movil' => $movil]);
    }
}
