@extends('layouts.app')

@section('content')




<div class="container">
    <nav>
        <a class="btn btn-dark" href="{{route('home')}}" >Volver</a>
    </nav>
    <div class="card text-center">
        <div class="card-header">
            <h1 class="h1 text-center"> Tabla de parlantes</h1>
        </div>
        <div class="card-body">
      
  
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Modelo del parlante</th>
                    <th scope="col">Serial del parlante</th>
                    <th scope="col">Observar</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                     @foreach ($parlantes as $parlante) 
                    <td>
                 {{$parlante->id}}
                    </td>
                       
                    <td>
                        {{$parlante->parlante_modelo}}
                       </td>

                       <td>
                        {{$parlante->parlante_serial}}
                       </td>

                       
                   
                     


              <td>
                    <a class="btn btn-danger" href="{{route('parlantes.show',$parlante)}}">Observar</a>
                </td>

                <td>
                    <a class="btn btn-danger" href="{{route('parlantes.edit', $parlante)}}">Editar</a>
                </td> 

                <td>
                    <form action="{{route('parlantes.update',$parlante)}}" method="POST">@csrf 
                        @method('DELETE')
                        
                         <Button type="submit" class="btn btn-danger">Eliminar</Btton>
                        </form>
                </td> 
                </tbody>

                @endforeach 
              </table>
              




      
        </div>
        <div class="card-footer text-muted">
           <td>
                <a class="btn btn-danger" href="{{route('parlantes.create')}}"><svg class="w-[48px] h-[48px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M12 11v5m0 0 2-2m-2 2-2-2M3 6v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1Zm2 2v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8H5Z"/>
                  </svg>
                  </a>
            </td> 
        </div>
      </div>
  </div>

@endsection
