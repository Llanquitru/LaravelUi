@extends('layouts.app')

@section('content')
   
<div class="container">

    <form method="POST" action="{{route('funcionario.update', $funcionario)}}" >
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nombre del funcionario</label>
          <input type="text" class="form-control" id="nombre_funcionario" value="{{$funcionario-> nombre_funcionario}}" name="nombre_funcionario" aria-describedby="funcionarioHelp" placeholder="Ingrese el nombre del funcionario" required>
      
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Correo</label>
            <input type="email" class="form-control" id="correo"  value="{{$funcionario-> correo}}" name="correo" aria-describedby="emailHelp" placeholder="Ingrese el correo" required>
        
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Departamento</label>
            <input type="text" class="form-control" id="departamento" value="{{$funcionario-> departamento}}" name="departamento" aria-describedby="departamento" placeholder="Ingrese el departamento" required>
        
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Trabajo</label>
            <input type="text" class="form-control" id="trabajo" value="{{$funcionario-> trabajo}}" name="trabajo" aria-describedby="emailHelp" placeholder="Ingrese el oficio" required>
        
          </div>
          
      
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>

</div>
@endsection
