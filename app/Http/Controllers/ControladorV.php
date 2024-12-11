<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // Importación querybuilder
use Carbon\Carbon;
use Illuminate\Http\Request;

class ControladorV extends Controller
{
    public function home()
    {
        return view('principal');
    }

    public function create()
    {
        return view('formularioContacto');
    }

    public function select()
    {
        return view('ListadoContactos');
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'txtnombre' => 'required|string|min:4|max:150',
            'txtcorreo' => 'required|email',
            'txttelefono' => 'required|string|min:9|max:15',
        ]);

        DB::table('cliente')->insert([
            "nombre" => $validatedData['txtnombre'],
            "correo" => $validatedData['txtcorreo'],
            "telefono" => $validatedData['txttelefono'],
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        session()->flash('exito', 'Se guardó el usuario: ' . $validatedData['txtnombre']);
        return redirect()->route('formularioContacto');
    }
}
