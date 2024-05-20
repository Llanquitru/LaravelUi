@extends('layouts.app')


@section('content')
    
<div class="container">

    <div class="card text-center">
        <div class="card-header">
          Featured
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('funcionario.store')}}" >@csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Ingrese la oficina donde ocurrio el accidente">
              
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="text" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Que equipo es?">
                
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Departamento</label>
                    <input type="text" class="form-control" id="departamento" name="departamento" aria-describedby="emailHelp" placeholder="Ingrese el codigo del equipo">
                
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Cargo</label>
                    <input type="text" class="form-control" id="trabajo" name="trabajo" aria-describedby="emailHelp" placeholder="Ingrese el requerimento">
                
                  </div>
                  
              
              
        </div>
        <div class="card-footer text-muted">
       
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
        </div>
      </div>

</div>
@endsection