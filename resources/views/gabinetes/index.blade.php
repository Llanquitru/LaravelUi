@extends('layouts.app')




@section('content')




<div class="container">
    <nav>
        <a class="btn btn-dark" href="{{route('home')}}" >Volver</a>
    </nav>
    <div class="card text-center">
        <div class="card-header">
            <h1 class="h1 text-center"> Tabla de Gabinete</h1>
        </div>
        <div class="card-body">
      <div class="">
        <div class="form-group">
            <form action="/search" method="GET">
                <div class="input-group">
                    <input class="form-control" name="search" placeholder="Buscador" type="text">
                    <button>Search</button>
                </div>
            </form>
        </div>
      </div>
  
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Marca gabinete</th>
                    <th scope="col">Modelo gabinete</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Cantidad de ram</th>
                    <th scope="col">Tipo de ram</th>
                    <th scope="col">Observar</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                     @foreach ($gabinetes as $gabinete) 
                    <td>
                     {{$gabinete -> id}}
                    </td>

                    <td>
                        {{$gabinete -> marca_gabinete}}
                       </td>
                       <td>
                        {{$gabinete -> serial_gabinete}}
                       </td>

                       <td>
                        {{$gabinete -> estado}}
                       </td>

                       <td>
                        {{$gabinete -> ram}}
                       </td>

                       <td>
                        {{$gabinete -> ram_tipo}}
                       </td>


              <td>
                    <a class="btn btn-danger" href="{{route('gabinetes.show',$gabinete)}}">Observar</a>
                </td>

                <td>
                    <a class="btn btn-danger" href="{{route('gabinetes.edit', $gabinete)}}">Editar</a>
                </td> 

                <td>
                    <form action="{{route('gabinetes.update',$gabinete)}}" method="POST">@csrf 
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
                <a class="btn btn-danger" href="{{route('gabinetes.create')}}">Crear</a>
            </td> 
        </div>
      </div>
  </div>

@endsection
