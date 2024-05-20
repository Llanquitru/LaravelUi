@extends('layouts.app')


@section('content')
    
<div class="container">
    <div class="card text-center">
        <div class="card-header">
        Menu funcionario
        </div>
        <div class="card-body">
          
          <a href="{{route('funcionario.create')}}" class="btn btn-primary">Crear Funcionario</a>
          <a href="{{route('funcionario.tabla')}}" class="btn btn-primary">Registro de funcionario</a>
      
        </div>
        <div class="card-footer text-muted">
        Cosas de funcionario
        </div>
      </div>
</div>
@endsection