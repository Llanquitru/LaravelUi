@extends('layouts.app')

@section('content')




<div class="container">
    <nav>
        <a class="btn btn-dark" href="{{route('home')}}" >Volver</a>
    </nav>
    <div class="card text-center">
        <div class="card-header">
            <h1 class="h1 text-center"> Tabla de Ratones</h1>
        </div>
        <div class="card-body">
      
  
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Marca del raton</th>
                    <th scope="col">Serial del raton</th>
                    <th scope="col">Tipo de raton</th>
                    <th scope="col">Observar</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                     @foreach ($mauses as $mause) 
                    <td>
                        {{$mause->id}}
                    </td>
                       
                    <td>
                        {{$mause-> marca_raton}}
                       </td>
                       <td>
                        {{$mause-> serial_raton}}
                       </td>

                       <td>
                        {{$mause-> tipo_raton}}
                       </td>
                   
                     


              <td>
                    <a class="btn btn-danger" href="{{route('mauses.show',$mause)}}">Observar</a>
                </td>

                <td>
                    <a class="btn btn-danger" href="{{route('mauses.edit', $mause)}}">Editar</a>
                </td> 

                <td>
                    <form action="{{route('mauses.update',$mause)}}" method="POST">@csrf 
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
                <a class="btn btn-danger" href="{{route('mauses.create')}}">Crear</a>
            </td> 
        </div>
      </div>
  </div>

@endsection
