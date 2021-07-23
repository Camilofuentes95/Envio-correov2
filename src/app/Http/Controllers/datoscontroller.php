<?php

namespace App\Http\Controllers;

use App\Models\dato;
use Illuminate\Http\Request;

class datoscontroller extends Controller
{
    public function principal(){

        $datos = dato::paginate();

        return view('inicio.principal',compact('datos'));
    }

    public function edit(dato $datos){
        
        
        return view('edicion.edit', compact('datos'));

    }

    public function update(Request $request,dato $datos){
        $datos->name = $request->name;
        $datos->email = $request->correo;

        $datos->save();

        return redirect()->route('inicio.principal');
    }

    public function destroy(dato $datos){
        $datos->delete();
        return redirect()->route('inicio.principal');


    }

}

?>