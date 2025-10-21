@extends('layouts.app')

@section('content')




<div class="container">
    <nav>
        <a class="btn btn-dark" href="{{route('home')}}" >Volver</a>
    </nav>
    <div class="card text-center">
        <div class="card-header">
            <h1 class="h1 text-center"> Tabla de Pantallas</h1>
        </div>
        <div class="card-body">
      
  
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Observar</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                     @foreach ($pantallas as $pantalla) 
                    <td>
                     {{$pantalla -> id}}
                    </td>

                    <td>
                        {{$pantalla -> marca_pantalla}}
                       </td>
                       <td>
                        {{$pantalla -> serial_pantalla}}
                       </td>

                       <td>
                        {{$pantalla -> estado}}
                       </td>


              <td>
                    <a class="btn btn-danger" href="{{route('pantallas.show',$pantalla)}}">Observar</a>
                </td>

                <td>
                    <a class="btn btn-danger" href="{{route('pantallas.edit', $pantalla)}}">Editar</a>
                </td> 

                <td>
                    <form action="{{route('pantallas.update',$pantalla)}}" method="POST">@csrf 
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
                <a class="btn btn-danger" href="{{route('pantallas.create')}}">Crear</a>
            </td> 
        </div>
      </div>
  </div>

@endsection
