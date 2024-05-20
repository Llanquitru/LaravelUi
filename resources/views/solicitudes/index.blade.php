@extends('layouts.app')

@section('content')
 
<div class="container p-4">
  
    <div class="card text-center">
      <div class="card-header h1">
      Solicitudes
      </div>
      <div class="card-body">
    
        <div class="container container p-3 my-3 border ">
    
    
          <table class="table border-top-0 w-80 p-3 align-middle table-striped table-bordered table-hover  table-responsive  ">
            <thead class="thead-dark ">
            <tr>
            <th>Id</th>
            <th>Oficina</th>
            <th>Equipo</th>
            <th>Codigo</th>
            <th>Requerimiento</th>
            <th>Descripcion</th>
            <th>Usuario quien ingraso</th>
           <th>Ver</th>
           <th>Edita</th>
           <th>Eliminar</th>
            </tr>
            <tbody>
             @foreach($solicituds as $solicitud)
            
                
            
            <tr>
                <td>
                    {{$solicitud->id}}  
                  </td>
                <td>
                  {{$solicitud->oficina}}  
                </td>
                <td>
                    {{$solicitud->equipo}}  
                  </td>
                  <td>
                    {{$solicitud->codigo}}  
                  </td>

                  <td>
                    {{$solicitud->requerimiento}}  
                  </td>
                  <td>
                    {{$solicitud->descripcion}}
                  </td>
                  <td>
                    {{$solicitud->user->name}}
                  </td>
               <td class="text-center"><a href="{{route('solicitud.show',$solicitud)}}" class="btn btn-primary">VER</a></td>
                  <td class="text-center"><a href="{{route('solicitud.edit',$solicitud)}}"class="btn btn-secondary">Editar</td> 
              <td class="text-center"> <form action="{{route('solicitud.update',$solicitud)}}" method="POST">@csrf 
            @method('DELETE')
            
             <Button type="submit" class="btn btn-danger">Eliminar</Btton>
            </form></td>   
            </tr>
            
           @endforeach 
            </tbody>
            
            </thead>
            
            </table>
        </div>
        
        
      </div>
    
    
    
      <div class="card-footer text-muted">
        <div class="container">
          <a class="btn btn-dark" href="{{route('solicitud.create')}}" >Ingresar Solicitud</a>
        </div>
      </div>
    </div>
  </div>
  
@endsection
