@extends('layouts.app')


@section('content')


<div class="container">
  <div class="card text-center">
      <div class="card-header">
    Inventario de insumos
      </div>
      <div class="card-body">
        
        <table class="table border-top-0 w-80 p-3 align-middle table-striped table-bordered table-hover  table-responsive  ">
            <thead class="thead-dark ">
            <tr>
            <th>Id</th>
            <th>Nombre del insumo</th>
            <th>Serial</th>
            <th>Descripcion</th>
            <th>Estado</th>
            <th>Usuario quien ingraso</th>
           <th>Ver</th>
          
            </tr>
            <tbody>
             @foreach($inventories as $inventorie)
            
                
            
            <tr>
                <td>
                    {{$inventorie->id}}  
                  </td>
                <td>
                  {{$inventorie->nombre_objeto}}  
                </td>
                <td>
                    {{$inventorie->serial}}  
                  </td>
                  <td>
                    {{$inventorie->descripcion}}  
                  </td>

                  <td>
                    {{$inventorie->estado}}  
                  </td>
                
                  <td>
                    {{$inventorie->user->name}}
                  </td>
                 
                    <td class="text-center"><a href="{{route('inventario.show',$inventorie)}}" class="btn btn-primary">VER</a></td>
                  
                 
            </tr>
            
           @endforeach 
            </tbody>
            
            </thead>
            
            </table>


    
      </div>
      <div class="container">
        <a class="btn btn-dark" href="{{route('inventario.create')}}" >Agregar insumo</a>
      </div>
    </div>
</div>

    

    
@endsection