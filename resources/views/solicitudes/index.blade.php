@extends('layouts.app')

@section('content')
 
<div class="container p-4">
  <div class="container">
    <a class="btn btn-dark" href="{{route('home')}}" >Volver</a>
  </div>
    <div class="card text-center">
      <div class="card-header h1">
      Funciones
      
      </div>
      <div class="card-body">
    
        <div class="container container p-3 my-3 border ">
    
    
          <table class="table border-top-0 w-80 p-3 align-middle table-striped table-bordered table-hover  table-responsive  ">
            <thead class="thead-dark ">
       
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
           {{-- <th>modal</th> --}}
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

            {{-- <td>   <div class=""><a type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal{{$solicitud->id}}">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-binoculars" viewBox="0 0 16 16">
                <path d="M3 2.5A1.5 1.5 0 0 1 4.5 1h1A1.5 1.5 0 0 1 7 2.5V5h2V2.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5v2.382a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V14.5a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 14.5v-3a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5v3A1.5 1.5 0 0 1 5.5 16h-3A1.5 1.5 0 0 1 1 14.5V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882zM4.5 2a.5.5 0 0 0-.5.5V3h2v-.5a.5.5 0 0 0-.5-.5zM6 4H4v.882a1.5 1.5 0 0 1-.83 1.342l-.894.447A.5.5 0 0 0 2 7.118V13h4v-1.293l-.854-.853A.5.5 0 0 1 5 10.5v-1A1.5 1.5 0 0 1 6.5 8h3A1.5 1.5 0 0 1 11 9.5v1a.5.5 0 0 1-.146.354l-.854.853V13h4V7.118a.5.5 0 0 0-.276-.447l-.895-.447A1.5 1.5 0 0 1 12 4.882V4h-2v1.5a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5zm4-1h2v-.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm4 11h-4v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zm-8 0H2v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5z"/>
              </svg>
            </a></div> </td> --}}
            </tr>
            @include('solicitudes.modal')
    
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
