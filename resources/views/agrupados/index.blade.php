@extends('layouts.app')

@section('content')


<div class="container">
  
 
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <span class="navbar-text">
            
   
    <a  href="{{route('home')}}"> volver al inicio</a>
  
          </span>
          
        </div>
      </nav>
     
    <div class="container p-4">
  
        <div class="card text-center">
          <div class="card-header h1">
 Asignacion de equipo
      
          </div>
          <div class="card-body">
          
            <div class="container container p-3 my-3 border ">
        
        
              <table class="table border-top-0 w-80 p-3 align-middle table-striped table-bordered table-hover  table-responsive  ">
                <thead class="thead-dark ">
                <tr>
                <th>Id</th>
                <th>Funcionario</th>
                <th>Pantalla</th>
                <th>gabinete</th>
                <th>Teclado</th>
                <th>Cable</th>
                <th>Raton</th>
                <th>Edifico</th>
                <th>Departamento</th>
               <th>Ver</th>
               <th>Edita</th>
               <th>Eliminar</th>
                </tr>
                <tbody>
                 @foreach($agrupados as $agrupado)
                
                    
                
                <tr>
                    <td>
                        {{$agrupado->id}}
                      </td>
                    <td>
                        {{$agrupado->funcionarios->nombre_funcionario}}
                    </td>
                    <td>
                      {{$agrupado->pantallas->marca_pantalla}}
                      </td>
                      <td>
                     {{$agrupado->gabinetes->marca_gabinete}}
                      </td>
                      <td>
              {{$agrupado->teclados->marca_teclado}}
                      </td>
                      <td>
                    {{$agrupado->insumos->cables}}
                      </td>
                      <td>
                       {{$agrupado->mauses->marca_raton}}
                      </td>
                      <td>
                      {{$agrupado->edificio}}
                      </td>

                      <td>
                        {{$agrupado->departamento}}
                        </td>
                   <td class="text-center"><a href="{{route('agrupados.show',$agrupado)}}" class="btn btn-primary">VER</a></td>
                      <td class="text-center"><a href="#"class="btn btn-secondary">Editar</td> 
                  <td class="text-center"> <form action="#" method="POST">@csrf 
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
              <a class="btn btn-dark" href="{{route('agrupados.create')}}" >Asignar equipo al funcionario</a>
            </div>
    
           
          </div>
        </div>
      </div>

      {{-- <div class=""><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
      </button></div> --}}
      
   
       
      
</div>
@endsection
