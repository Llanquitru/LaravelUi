@extends('layouts.app')

@section('content')
  
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


@endsection