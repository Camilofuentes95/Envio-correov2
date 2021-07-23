<?php

namespace App\Http\Controllers;

use App\Models\dato;
use App\Imports\Datosimport;
use Illuminate\Http\Request;
//use App\Imports\DatosImport;

use App\Mail\ConcatanosMailable;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;


class ContactanosController extends Controller 
{
    public function index(){
        return view('contactanos.index');

    }

    public function store(Request $request){
        $email = new ConcatanosMailable($request);

        $request->validate([
            'name' => 'required',
            'correo' => 'required|email'


        ]);

       

        Mail::to($request->get('correo'))->send($email);
        $dato = new dato();
        $dato->name = $request->name;
        $dato->email = $request->correo;
     

        $dato->save();


        return redirect()->route('inicio.principal');

        

          //  return ('ha ocurrido un error');
        }

        public function excel(Request $request)
        {
        
        $file = $request->file('file');
        Excel::import(new Datosimport, $file);
        

        }
        
    
    }

?>