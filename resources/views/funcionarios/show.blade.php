@extends('layouts.app')

@section('content')
<<<<<<< HEAD

<div class="container">

    <div class="card text-center">
        <div class="card-header">
         Vista de esta solicitud
        </div>
        <div class="card-body">
       <h1 class="text-center">Nombre: {{$funcionario->nombre_funcionario}}</h1>
       <h1 class="text-center">Correo: {{$funcionario->correo}}</h1>
       <h1 class="text-center">Departamento: {{$funcionario->departamento}}</h1>
       <h1 class="text-center">Trabajo: {{$funcionario->trabajo}}</h1>
       <h1 class="text-center">Quien lo ingreso: {{$funcionario->user->name}}</h1>
        </div>
        <div class="card-footer text-muted">
 <i class="fa fa-comments-o" aria-hidden="true"></i>
        </div>
      </div>
</div>

=======
  
<div class="container">



    <div class="card text-center">
        <div class="card-header">
          Funcionario Individual
        </div>

        <div class="card-body">
          
            <h1>Nombre:  {{$funcionario->nombre}}  </h1>
            
            <h1>Oficio:  {{$funcionario->oficio}}  </h1>
            
            <h1>Departamento:  {{$funcionario->departamento}}  </h1>
            
            <h1>Usuario:   {{$funcionario->user->name}} </h1>
            
    
        </div>
        <div class="card-footer text-muted">
          
        <div>
            <a class="btn btn-primary" href="{{route('funcionario.index')}}">Volver</a>
        </div>

        </div>
      </div>
    

</div>


>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
@endsection