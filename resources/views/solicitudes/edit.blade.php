@extends('layouts.app')

@section('content')
    
<div class="container">

    <div class="card text-center">
        <div class="card-header">
         Editar
        </div>
        <div class="card-body">
        
            <form method="POST" action="{{route('solicitud.update', $solicitud)}}" >@csrf
                @method('PUT')
                <div class="form-group">
                  <label for="exampleInputEmail1">Oficina</label>
                  <input type="text" class="form-control" id="oficina" name="oficina" aria-describedby="emailHelp" value="{{$solicitud->oficina}}">
              
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Equipo</label>
                    <input type="text" class="form-control" id="equipo" name="equipo" aria-describedby="emailHelp"  value="{{$solicitud->equipo}}" >
                
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Codigo</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="emailHelp" value="{{$solicitud->codigo}}">
                
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Requerimiento</label>
                    <input type="text" class="form-control" id="requerimiento" name="requerimiento" aria-describedby="emailHelp"  value="{{$solicitud->requerimiento}}">
                
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Descripcion</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" aria-describedby="emailHelp" value="{{$solicitud->descripcion}}">
                
                  </div>

                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Usuario Que ingreso</label>
                  <input type="text" class="form-control" id="descripcion" name="descripcion" aria-describedby="emailHelp" value="{{$solicitud->user->name}}" disabled>
              
                </div>
              
           


        </div>
        <div class="card-footer text-muted">
           
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
        </div>
      </div>
    
</div>
@endsection