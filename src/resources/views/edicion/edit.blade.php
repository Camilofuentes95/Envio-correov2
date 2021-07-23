@extends('layouts.plantilla')

@section('title', 'edit')

@section('contenido')
<h1>Edicion</h1>
    <form action="{{route('edicion.update',$datos)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$datos->name}}">
        </label>
        <br>

        <label>
        correo:
          <br>
          <input type="text" name="correo" value="{{$datos->email}}">      
        </label> 
        
        <br>
        
        <br>
        
        <button type="submit">actualizar</button>
    </form>
        <form action="{{route('edicion.destroy', $datos)}}" method="POST">
            @csrf
            @method('delete')
        <button type="submit">borrar</button>
    </form>
        </label>   
    </form>
@endsection
