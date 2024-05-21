@extends('layouts.app')

@section('content')
 
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
@endsection
