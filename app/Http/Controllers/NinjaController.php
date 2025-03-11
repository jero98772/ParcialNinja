<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NinjaController extends Controller
{
    // Zona de inicio
    public function index()
    {
        return view('ninjas.index');
    }

    // Mostrar formulario para registrar ninja
    public function create()
    {
        return view('ninjas.create');
    }

    // Almacenar un nuevo ninja
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'aldea' => 'required|in:Hoja,Niebla',
            'chakra' => 'required|integer|min:1'
        ]);

        Ninja::create($request->all());

        return redirect()->route('ninjas.create')
                         ->with('success', 'Ninja registrado exitosamente');
    }

    // Listar todos los ninjas ordenados por chakra (mayor a menor)
    public function list()
    {
        $ninjas = Ninja::orderBy('chakra', 'desc')->get();
        return view('ninjas.list', compact('ninjas'));
    }

    // Mostrar estadísticas de ninjas
    public function stats()
    {
        $ninjasHoja = Ninja::where('aldea', 'Hoja')->count();
        $ninjasNiebla = Ninja::where('aldea', 'Niebla')->count();
        $totalChakra = Ninja::sum('chakra');
        
        return view('ninjas.stats', compact('ninjasHoja', 'ninjasNiebla', 'totalChakra'));
    }
}