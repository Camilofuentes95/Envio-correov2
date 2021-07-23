@extends('layouts.plantilla')

@section('title', 'home' )

@section('contenido')
    

    <h1>pagina principal</h1>
    <a href="{{route('contactanos.store')}}">crear nuevo registro</a>
    <form action="{{route('edicion.update',$datos)}}" method="POST">
        @csrf
        @method('put')
<table class="table table-light">
    <thead class="thead-light">
     
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>correo</th>
            <th>fecha registro</th>
            <th> </th>
            <th> </th>
        </tr>

    </thead>
    <tbody>
        @foreach ($datos as $dato)
            
        
        <tr>
           
            <td>{{$dato->id}}</td>
            <td>{{$dato->name}}</td>
            <td>{{$dato->email}}</td>
            <td>{{$dato->created_at}}</td>
            <td><a href="{{route('edicion.edit',$dato)}}">Opciones</a></td>
    
            
           
        </tr>
        
        @endforeach
    </tbody>
</form>

</table>

<form action="{{route('datos.import.excel')}}" method="post" enctype="multipart/form-data">
    @csrf
    
        
   <input type="file" name="file">
   <button>importar datos</button>

</form>





    {{$datos->links()}}

@endsection