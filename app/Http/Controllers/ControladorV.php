<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;//Importacion querybuilder

use Illuminate\Http\Request;

class ControladorV extends Controller
{
    public function home ()
    {
    return view('principal');
    }
    public function create ()
    {
    return view('formularioContacto');
    }
    public function select ()
    {

    return view('ListadoContactos');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> 'required|string|min:4|max:150',
            'correo' => 'required|email',
            'telefono'=> 'required|string|min:9|max:15',

        ]);
        DB::table('cliente')->insert([
            "nombre"=>$request->input('txtnombre'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),

        ]);
        $cliente=$request->input('txtnombre');
        session()->flash('exito', 'Se guardo el usuario', $cliente);
        return to_route('formularioContacto');

    }



    

}
