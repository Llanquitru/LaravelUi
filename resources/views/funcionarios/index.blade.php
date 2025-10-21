@extends('layouts.app')

@section('content')




<div class="container">
    <nav>
        <a class="btn btn-dark" href="{{route('home')}}" >Volver</a>
    </nav>
    <div class="card text-center">
        <div class="card-header">
            <h1 class="h1 text-center"> Tabla de los funcionarios</h1>
        </div>
        <div class="card-body">
      
  
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre del funcionario</th>
                    <th scope="col">correo</th>
                    <th scope="col">departamento</th>
                    <th scope="col">trabajo</th>
                    <th scope="col">Usuario quien ingreso</th>
                    <th scope="col">Ver</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($funcionarios as $funcionario)
                    <td>
                        {{$funcionario->id}}
                    </td>
                    <td>
                        {{$funcionario->nombre_funcionario}}
                    </td>

                    <td>
                        {{$funcionario->correo}}
                    </td>
                  
                    <td>
                        {{$funcionario->departamento}}
                    </td>
                    <td>
                        {{$funcionario->trabajo}}
                    </td>

                    <td>
                        {{$funcionario->user->name}}
                    </td>

                <td>
                    <a class="btn btn-danger" href="{{route('funcionario.show',$funcionario)}}">Observar</a>
                </td>

                <td>
                    <a class="btn btn-danger" href="{{route('funcionario.edit', $funcionario)}}">Editar</a>
                </td>

                <td>
                    <form action="{{route('funcionario.update',$funcionario)}}" method="POST">@csrf 
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
                <a class="btn btn-danger" href="{{route('funcionario.create')}}">Crear</a>
            </td>
        </div>
      </div>
  </div>

@endsection
