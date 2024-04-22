@extends('layouts.app')



@section('content')

<div class="container">

    <form method="POST" action="{{route('solicitud.store')}}" >@csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Oficina</label>
          <input type="text" class="form-control" id="oficina" name="oficina" aria-describedby="emailHelp" placeholder="Ingrese la oficina donde ocurrio el accidente">
      
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Equipo</label>
            <input type="text" class="form-control" id="equipo" name="equipo" aria-describedby="emailHelp" placeholder="Que equipo es?">
        
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Codigo</label>
            <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="emailHelp" placeholder="Ingrese el codigo del equipo">
        
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Requerimiento</label>
            <input type="text" class="form-control" id="requerimiento" name="requerimiento" aria-describedby="emailHelp" placeholder="Ingrese el requerimento">
        
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" aria-describedby="emailHelp" placeholder="ingrese una descripcion del">
        
          </div>
      
      
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>

</div>

    
@endsection