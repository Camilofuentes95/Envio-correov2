@extends('layouts.plantilla')

@section('title', 'home')

@section('contenido')
<h1>mensaje</h1>
    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        @error('name')
        <p>{{'el nombre es requerido'}}</p>
            
        @enderror

        <label>
        correo:
          <br>
          <input type="text" name="correo">      
        </label> 
        <br>
        @error('correo')
        <p>{{''}}</p>
            
        @enderror
        
        <br>
        <button type="submit">enviar</button>
        </label>   
    </form>
@endsection

