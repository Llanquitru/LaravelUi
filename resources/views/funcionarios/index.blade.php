@extends('layouts.app')

@section('content')
<<<<<<< HEAD




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

=======
 
<div class="container p-4">
    <div class="card text-center">
      <div class="card-header h1">
     Contenedor de funcionario
      </div>
      <div class="card-body">
    
        <div class="container container p-3 my-3 border ">
    
    
          <table class="table border-top-0 w-80 p-3 align-middle table-striped table-bordered table-hover  table-responsive  ">
            <thead class="thead-dark ">
            <tr>
            <th>Id</th>
            <th>nombre</th>
            <th>oficio</th>
            <th>departamento</th>
            <th>Usuario quien ingraso</th>
           <th>Ver</th>
           <th>Editar</th>
           <th>Eliminar</th>
            </tr>
            <tbody>
             @foreach($funcionarios as $funcionario)
            
                
            
            <tr>
                <td>
                    {{$funcionario->id}}  
                  </td>
                <td>
                  {{$funcionario->nombre}}  
                </td>
                <td>
                    {{$funcionario->oficio}}  
                  </td>
                  <td>
                    {{$funcionario->departamento}}  
                  </td>
                  <td>
                    {{$funcionario->user->name}}
                  </td>
               <td class="text-center"><a class="btn btn-primary" href="{{route('funcionario.show',$funcionario)}}">VER</a></td>
                  <td class="text-center"><a class="btn btn-primary" href="{{route('funcionario.edit',$funcionario)}}">Editar</a></td> 
             <td class="text-center"> <form action="{{route('funcionario.update',$funcionario)}}" method="POST">@csrf 
            @method('DELETE')
            
             <Button type="submit" onclick="Alerta()" class="btn btn-danger">Eliminar</Button>
            </form>
          </td>    
          
            </tr>
            
           @endforeach 
            </tbody>
            
            </thead>
            
            </table>
        </div>
        
        
      </div>
    
    
    
      <div class="card-footer text-muted">
        <div class="container">
          <a class="btn btn-dark" href="{{route('funcionario.create')}}" >Ingresar Funcionario</a>
        </div>
      </div>
    </div>
  </div>
 {{-- <script>
   function Alerta() {
   const resultado = confirm('Esta seguro de eliminar?');
   if(resultado == false){
    event.preventDefault();
   }
  }
 </script> --}}
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
@endsection
