@extends('layouts.app')



@section('content')

<div class="container">

    <form method="POST" action="{{route('funcionario.store')}}" >
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nombre del funcionario</label>
          <input type="text" class="form-control" id="nombre_funcionario" name="nombre_funcionario" aria-describedby="funcionarioHelp" placeholder="Ingrese el nombre del funcionario" required>
      
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Ingrese el correo" required>
        
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Departamento</label>
            <input type="text" class="form-control" id="departamento" name="departamento" aria-describedby="departamento" placeholder="Ingrese el departamento" required>
        
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Trabajo</label>
            <input type="text" class="form-control" id="trabajo" name="trabajo" aria-describedby="emailHelp" placeholder="Ingrese el oficio" required>
        
          </div>
          
      
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>

</div>

    
@endsection